import { Engine } from 'ai.engine';
import { Router } from 'crm.router';
import { ajax as Ajax, Event, Loc, Runtime, Text, Type } from 'main.core';
import { BaseEvent, EventEmitter } from 'main.core.events';
import { Button as ButtonUI, ButtonState } from 'ui.buttons';
import { MessageBox, MessageBoxButtons } from 'ui.dialogs.messagebox';
import { UI } from 'ui.notification';

import 'ui.feedback.form';

import { Button } from '../components/layout/button';
import ConfigurableItem from '../configurable-item';
import type { ActionParams } from './base';
import { Base } from './base';

const COPILOT_BUTTON_DISABLE_DELAY = 5000;
const COPILOT_BUTTON_NUMBER_OF_MANUAL_STARTS_LIMIT = 5;
const COPILOT_HELPDESK_CODE = 18_799_442;

declare type CoPilotAdditionalInfoData = {
	sliderCode: ?string,
	isAiMarketplaceAppsExist: ?boolean,
	isCopilotBannerNeedShow: ?boolean,
}

export class Call extends Base
{
	#isCopilotWelcomeTourShown: boolean = false;
	#isCopilotBannerShown: boolean = false;

	onInitialize(item: ConfigurableItem): void
	{
		this.#showCopilotWelcomeTour(item);
		this.#bindAdditionalCopilotActions(item);
	}

	onItemAction(item: ConfigurableItem, actionParams: ActionParams): void
	{
		const { action, actionType, actionData } = actionParams;

		if (actionType !== 'jsEvent')
		{
			return;
		}

		if (action === 'Call:MakeCall' && actionData)
		{
			this.#makeCall(actionData);
		}

		if (action === 'Call:Schedule' && actionData)
		{
			this.runScheduleAction(actionData.activityId, actionData.scheduleDate);
		}

		if (action === 'Call:OpenTranscript' && actionData && actionData.callId)
		{
			this.#openTranscript(actionData.callId);
		}

		if (action === 'Call:ChangePlayerState' && actionData && actionData.recordId)
		{
			this.#changePlayerState(item, actionData.recordId);
		}

		if (action === 'Call:DownloadRecord' && actionData && actionData.url)
		{
			this.#downloadRecord(actionData.url);
		}

		if (action === 'Call:LaunchCallRecordingTranscription' && actionData)
		{
			const isCopilotAgreementNeedShow = actionData.isCopilotAgreementNeedShow || false;
			if (isCopilotAgreementNeedShow)
			{
				Runtime.loadExtension('ai.copilot-agreement')
					.then(({ CopilotAgreement }) => {
						const copilotAgreementPopup = new CopilotAgreement({
							moduleId: 'crm',
							contextId: 'audio',
							events: {
								onAccept: () => this.#launchCallRecordingTranscription(item, actionData),
							},
						});

						void copilotAgreementPopup.checkAgreement()
							// eslint-disable-next-line promise/no-nesting
							.then((isAgreementAccepted) => {
								if (isAgreementAccepted)
								{
									this.#launchCallRecordingTranscription(item, actionData);
								}
							});
					})
					.catch(() => console.error('Cant load "ai.copilot-agreement" extension'))
				;
			}
			else
			{
				this.#launchCallRecordingTranscription(item, actionData);
			}
		}
	}

	#makeCall(actionData): void
	{
		if (!Type.isStringFilled(actionData.phone))
		{
			return;
		}

		const params = {
			ENTITY_TYPE_NAME: BX.CrmEntityType.resolveName(actionData.entityTypeId),
			ENTITY_ID: actionData.entityId,
			AUTO_FOLD: true,
		};

		if (actionData.ownerTypeId !== actionData.entityTypeId || actionData.ownerId !== actionData.entityId)
		{
			params.BINDINGS = {
				OWNER_TYPE_NAME: BX.CrmEntityType.resolveName(actionData.ownerTypeId),
				OWNER_ID: actionData.ownerId,
			};
		}

		if (actionData.activityId > 0)
		{
			params.SRC_ACTIVITY_ID = actionData.activityId;
		}

		window.top['BXIM'].phoneTo(actionData.phone, params);
	}

	#openTranscript(callId): void
	{
		if (BX.Voximplant && BX.Voximplant.Transcript)
		{
			BX.Voximplant.Transcript.create({ callId }).show();
		}
	}

	#changePlayerState(item: ConfigurableItem, recordId: Number): void
	{
		const player = item.getLayoutContentBlockById('audio');
		if (!player)
		{
			return;
		}

		if (recordId !== player.id)
		{
			return;
		}

		if (player.state === 'play')
		{
			player.pause();
		}
		else
		{
			player.play();
		}
	}

	#downloadRecord(url: String): void
	{
		location.href = url;
	}

	#launchCallRecordingTranscription(item: ConfigurableItem, actionData: Object): void
	{
		const isValidParams: boolean = Type.isNumber(actionData.activityId)
			&& Type.isNumber(actionData.ownerId)
			&& Type.isNumber(actionData.ownerTypeId)
			&& [BX.CrmEntityType.enumeration.lead, BX.CrmEntityType.enumeration.deal]
				.includes(parseInt(actionData.ownerTypeId, 10))
		;

		if (!isValidParams)
		{
			throw new Error('Invalid "actionData" parameters');
		}

		const aiCopilotBtn: Button = item.getLayoutFooterButtonById('aiButton');
		if (!aiCopilotBtn)
		{
			throw new Error('"CoPilot" button is not found in layout');
		}
		const aiCopilotBtnUI: ButtonUI = aiCopilotBtn.getUiButton();

		// start call record transcription
		aiCopilotBtnUI.setState(ButtonState.AI_WAITING);

		Ajax
			.runAction('crm.timeline.ai.launchRecordingTranscription', {
				data: {
					activityId: actionData.activityId,
					ownerTypeId: actionData.ownerTypeId,
					ownerId: actionData.ownerId,
				},
			}).then((response) => {
				if (
					response?.status === 'success'
					&& response?.data?.numberOfManualStarts >= COPILOT_BUTTON_NUMBER_OF_MANUAL_STARTS_LIMIT
				)
				{
					this.#emitTimelineCopilotTourEvent(
						aiCopilotBtnUI.getContainer(),
						'BX.Crm.Timeline.Call:onShowTourWhenManualStartTooMuch',
						'copilot-in-call-automatically',
						500,
					);
				}
			})
			.catch((response) => {
				const customData: ?CoPilotAdditionalInfoData = response.errors[0].customData;
				if (customData)
				{
					customData.isCopilotBannerNeedShow = actionData.isCopilotBannerNeedShow || false;

					this.#showAdditionalInfo(customData, item, actionData);

					aiCopilotBtnUI.setState(ButtonState.ACTIVE);
				}
				else
				{
					aiCopilotBtnUI.setState(ButtonState.DISABLED);

					UI.Notification.Center.notify({
						content: Text.encode(response.errors[0].message),
						autoHideDelay: COPILOT_BUTTON_DISABLE_DELAY,
					});

					setTimeout(() => {
						aiCopilotBtnUI.setState(ButtonState.ACTIVE);
					}, COPILOT_BUTTON_DISABLE_DELAY);
				}

				throw response;
			});
	}

	#showAdditionalInfo(data: CoPilotAdditionalInfoData, item: ConfigurableItem, actionData: Object): void
	{
		if (this.#isSliderCodeExist(data))
		{
			if (data.sliderCode === 'limit_boost_copilot')
			{
				Runtime.loadExtension('baas.store')
					.then(({ ServiceWidget, Analytics }) => {
						if (!ServiceWidget)
						{
							BX?.UI?.InfoHelper.show('limit_boost_copilot');

							console.error('Cant load "baas.store" extension');
						}

						const serviceWidget = ServiceWidget?.getInstanceByCode('ai_copilot_token');
						const bindElement = item.getLayoutFooterButtonById('aiButton')?.getUiButton()?.getContainer();

						serviceWidget.bind(bindElement, Analytics.CONTEXT_CRM);
						serviceWidget.getPopup().adjustPosition({
							forceTop: true,
						});
						serviceWidget.show();
					})
					.catch(() => {
						BX?.UI?.InfoHelper.show('limit_boost_copilot');

						console.error('Cant load "baas.store" extension');
					})
				;
			}
			else
			{
				BX?.UI?.InfoHelper.show(data.sliderCode);
			}
		}
		else if (this.#isAiMarketplaceAppsExist(data))
		{
			if (!this.#isCopilotBannerShown && data.isCopilotBannerNeedShow)
			{
				this.#showCopilotBanner(item, actionData);
			}
			else
			{
				this.#showMarketMessageBox();
			}
		}
		else
		{
			this.#showFeedbackMessageBox();
		}
	}

	// eslint-disable-next-line sonarjs/cognitive-complexity
	#showCopilotWelcomeTour(item: ConfigurableItem): void
	{
		if (!item)
		{
			return;
		}

		if (this.#isCopilotWelcomeTourShown)
		{
			return;
		}

		const payload: ?Object = Type.isPlainObject(item.getDataPayload())
			? item.getDataPayload()
			: {};
		if (!payload.isWelcomeTourEnabled)
		{
			return;
		}

		setTimeout(() => {
			const aiCopilotBtn: Button = item.getLayoutFooterButtonById('aiButton');
			const aiCopilotUIBtn: ButtonUI = aiCopilotBtn?.getUiButton();
			if (
				!aiCopilotUIBtn
				|| aiCopilotUIBtn.getState() === ButtonState.DISABLED
			)
			{
				return;
			}

			if (aiCopilotBtn?.isInViewport())
			{
				this.#emitTimelineCopilotTourEvent(
					aiCopilotUIBtn.getContainer(),
					'BX.Crm.Timeline.Call:onShowCopilotTour',
					'copilot-button-in-call',
				);

				return;
			}

			const showCopilotTourOnScroll = () => {
				if (aiCopilotBtn?.isInViewport())
				{
					this.#emitTimelineCopilotTourEvent(
						aiCopilotUIBtn.getContainer(),
						'BX.Crm.Timeline.Call:onShowCopilotTour',
						'copilot-button-in-call',
					);
					this.#isCopilotWelcomeTourShown = true;

					Event.unbind(window, 'scroll', showCopilotTourOnScroll);
				}
			};

			Event.bind(window, 'scroll', showCopilotTourOnScroll);
		}, 50);
	}

	#bindAdditionalCopilotActions(item: ConfigurableItem): void
	{
		if (!item)
		{
			return;
		}

		setTimeout(() => {
			const player = item?.getLayoutContentBlockById('audio');
			if (!player)
			{
				return;
			}

			EventEmitter.subscribe('ui:audioplayer:pause', (event: BaseEvent): void => {
				const { initiator } = event.getData();
				const aiCopilotBtn: Button = item.getLayoutFooterButtonById('aiButton');
				const aiCopilotUIBtn: ButtonUI = aiCopilotBtn?.getUiButton();

				if (
					!aiCopilotUIBtn
					|| aiCopilotUIBtn.getState() === ButtonState.DISABLED
					|| !aiCopilotBtn?.isPropEqual('data-activity-id', initiator)
				)
				{
					return;
				}

				this.#emitTimelineCopilotTourEvent(
					aiCopilotUIBtn.getContainer(),
					'BX.Crm.Timeline.Call:onShowCopilotTour',
					'copilot-button-in-call',
					500,
				);
			});
		}, 75);
	}

	#showMarketMessageBox(): void
	{
		MessageBox.show({
			title: Loc.getMessage('CRM_TIMELINE_ITEM_AI_PROVIDER_POPUP_TITLE'),
			message: Loc.getMessage('CRM_TIMELINE_ITEM_AI_PROVIDER_POPUP_TEXT', {
				'[helpdesklink]': `<br><br><a href="##" onclick="top.BX.Helper.show('redirect=detail&code=${COPILOT_HELPDESK_CODE}');">`,
				'[/helpdesklink]': '</a>',
			}),
			modal: true,
			buttons: MessageBoxButtons.OK_CANCEL,
			okCaption: Loc.getMessage('CRM_TIMELINE_ITEM_AI_PROVIDER_POPUP_OK_TEXT'),
			onOk: () => {
				return Router.openSlider(Loc.getMessage('AI_APP_COLLECTION_MARKET_LINK'));
			},
			onCancel: (messageBox) => {
				messageBox.close();
			},
		});
	}

	#showFeedbackMessageBox(): void
	{
		MessageBox.show({
			title: Loc.getMessage('CRM_TIMELINE_ITEM_NO_AI_PROVIDER_POPUP_TITLE'),
			message: Loc.getMessage('CRM_TIMELINE_ITEM_NO_AI_PROVIDER_POPUP_TEXT'),
			modal: true,
			buttons: MessageBoxButtons.OK_CANCEL,
			okCaption: Loc.getMessage('CRM_TIMELINE_ITEM_NO_AI_PROVIDER_POPUP_OK_TEXT'),
			onOk: (messageBox) => {
				messageBox.close();

				BX.UI.Feedback.Form.open({
					id: 'b24_ai_provider_partner_crm_feedback',
					defaultForm: {
						id: 682,
						lang: 'en',
						sec: '3sd3le',
					},
					forms: [{
						zones: ['cn'],
						id: 678,
						lang: 'cn',
						sec: 'wyufoe',
					}, {
						zones: ['vn'],
						id: 680,
						lang: 'vn',
						sec: '2v97xr',
					}],
				});
			},
			onCancel: (messageBox) => {
				messageBox.close();
			},
		});
	}

	async #showCopilotBanner(): void
	{
		const { AppsInstallerBanner, AppsInstallerBannerEvents } = await Runtime.loadExtension('ai.copilot-banner');
		const portalZone = Loc.getMessage('PORTAL_ZONE');
		const copilotBannerOptions = {
			isWestZone: portalZone !== 'ru' && portalZone !== 'by' && portalZone !== 'kz',
		};
		const copilotBanner = new AppsInstallerBanner(copilotBannerOptions);
		copilotBanner.show();
		copilotBanner.subscribe(AppsInstallerBannerEvents.actionStart, () => {
			// eslint-disable-next-line no-console
			console.info('Install app started');
		});
		copilotBanner.subscribe(AppsInstallerBannerEvents.actionFinishSuccess, () => {
			setTimeout(() => {
				(new Engine()).setBannerLaunched().then(() => {}).catch(() => {});

				// eslint-disable-next-line no-console
				console.info('App installed successfully');
				this.#isCopilotBannerShown = true;
			}, 500);
		});

		copilotBanner.subscribe(AppsInstallerBannerEvents.actionFinishFailed, () => {
			console.error('Install app failed. Try installing the application manually.');

			setTimeout(() => {
				this.#showMarketMessageBox();
			}, 500);
		});
	}

	#emitTimelineCopilotTourEvent(target: Element, eventName: string, stepId: string, delay: Number = 1500): void
	{
		EventEmitter.emit(this, eventName, { target, stepId, delay });
	}

	#isSliderCodeExist(data: CoPilotAdditionalInfoData): boolean
	{
		return Object.hasOwn(data, 'sliderCode')
			&& Type.isStringFilled(data.sliderCode)
		;
	}

	#isAiMarketplaceAppsExist(data: CoPilotAdditionalInfoData): boolean
	{
		return Object.hasOwn(data, 'isAiMarketplaceAppsExist')
			&& Type.isBoolean(data.isAiMarketplaceAppsExist)
			&& data.isAiMarketplaceAppsExist
		;
	}

	static isItemSupported(item: ConfigurableItem): boolean
	{
		return (item.getType() === 'Activity:Call');
	}
}