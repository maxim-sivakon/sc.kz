import { createPinia } from 'ui.vue3.pinia';
import { BitrixVue, nextTick } from 'ui.vue3';
import { Toolbar } from 'market.toolbar';
import { Main } from 'market.main';
import { ListApps } from 'market.list-apps';
import { EventEmitter } from 'main.core.events';

import "./market.css";

export class Market
{
	constructor(params = {})
	{
		this.params = params.params;
		this.result = params.result;

		(BitrixVue.createApp({
			name: 'Market',
			components: {
				Toolbar, Main, ListApps,
			},
			data: () => {
				return {
					params: this.params,
					result: this.result,
					categories: [],
					searchFilters: [],
					favNumbers: 0,
					numUpdates: 0,
					totalApps: 0,
					showMarketIcon: 'Y',
					skeleton: '',
					marketSlider: '',
					marketAction: '',
					searchAction: '',

					mainUri: '',

					currentUri: '',

					hideToolbar: false,
					hideCategories: false,
					hideBreadcrumbs: false,
					showTitle: true,
					canChangeHistory: true,

					firstPageHistory: false,
				};
			},
			computed: {
				isMainPage: function () {
					return this.params.COMPONENT_NAME === 'bitrix:market.main'
				},
				isListPage: function () {
					return this.params.COMPONENT_NAME === 'bitrix:market.list'
				},
				getFavNumbers: function () {
					return this.favNumbers > 99 ? '99+' : this.favNumbers;
				},
				getNumUpdates: function () {
					return this.numUpdates > 99 ? '99+' : this.numUpdates;
				},
				showSkeleton: function () {
					return this.skeleton.length > 0
				},
				getSkeletonPath: function () {
					return "/bitrix/images/market/slider/" + this.skeleton + ".svg"
				},
			},
			created() {
				this.categories = this.result.CATEGORIES;
				this.searchFilters = this.result.SEARCH_FILTERS;
				this.favNumbers = this.result.FAV_NUMBERS;
				this.numUpdates = this.result.NUM_UPDATES;
				this.totalApps = this.result.TOTAL_APPS;
				this.showMarketIcon = this.result.SHOW_MARKET_ICON;
				this.marketSlider = this.result.MARKET_SLIDER;
				this.marketAction = this.result.ADDITIONAL_MARKET_ACTION;
				this.searchAction = this.result.ADDITIONAL_SEARCH_ACTION;

				if (this.params.CURRENT_PAGE && this.params.CURRENT_PAGE.length > 0) {
					this.currentUri = this.params.CURRENT_PAGE;
				}
				if (this.params.HIDE_CATEGORIES && this.params.HIDE_CATEGORIES === 'Y') {
					this.hideCategories = true;
				}
				if (this.params.HIDE_TOOLBAR && this.params.HIDE_TOOLBAR === 'Y') {
					this.hideToolbar = true;
				}
				if (this.params.HIDE_BREADCRUMBS && this.params.HIDE_BREADCRUMBS === 'Y') {
					this.hideBreadcrumbs = true;
				}
				if (this.params.SHOW_TITLE && this.params.SHOW_TITLE === 'N') {
					this.showTitle = false;
				}
				if (this.params.CHANGE_HISTORY && this.params.CHANGE_HISTORY === 'N') {
					this.canChangeHistory = false;
				}
				if (this.params.ADDITIONAL_BODY_CLASS && this.params.ADDITIONAL_BODY_CLASS.length > 0) {
					document.body.classList.add(this.params.ADDITIONAL_BODY_CLASS);
				}
			},
			mounted() {
				this.$Bitrix.eventEmitter.subscribe('market:loadContent', this.loadContent);
				EventEmitter.subscribe('market:refreshUri', this.refreshUri);
				BX.addCustomEvent("SidePanel.Slider:onMessage", this.onMessageSlider);
			},
			methods: {
				emitLoadContent: function (event) {
					event.preventDefault();
					this.$Bitrix.eventEmitter.emit('market:loadContent', {info: event})
				},
				loadContent: function(event) {
					const link = event.data.info.target.closest('[data-load-content]');
					if (!link) {
						return;
					}

					if (link.dataset.loadContent.length <= 0 || link.href.length <= 0) {
						return;
					}

					if (this.result.MAIN_URI && this.result.MAIN_URI.length > 0) {
						this.mainUri = this.result.MAIN_URI;
					}

					this.updatePage(link.href, link.dataset.loadContent);
				},
				refreshUri: function(event) {
					if (!event.data.refreshUri || !event.data.skeleton) {
						return;
					}

					this.updatePage(event.data.refreshUri, event.data.skeleton);
				},
				updatePage: function (uri, skeleton) {
					this.skeleton = skeleton;
					this.$Bitrix.eventEmitter.emit('market:closeToolbarPopup');

					BX.ajax.runAction('market.Content.load', {
						data: {
							page: uri,
						},
						analyticsLabel: {
							page: uri,
						},
					}).then(
						response => {
							if (response.data) {
								if (
									BX.type.isObject(response.data.params) &&
									BX.type.isObject(response.data.result)
								) {
									this.params = response.data.params;
									this.result = response.data.result;

									if (this.canChangeHistory) {
										BX.SidePanel.Instance.getTopSlider().setUrl(uri);
										top.history.replaceState({}, '', uri);
									}

									if (this.showTitle && response.data.result.hasOwnProperty('TITLE')) {
										top.document.title = response.data.result.TITLE;
									}

									this.$Bitrix.eventEmitter.emit('market:loadContentFinish');

									if (document.querySelector('.market-toolbar')) {
										window.scrollTo({
											top: document.querySelector('.market-toolbar').getBoundingClientRect().top,
											behavior: 'smooth',
										});
									}

									if (this.result.ADDITIONAL_HIT_ACTION) {
										try {
											eval(
												this.result.ADDITIONAL_HIT_ACTION
													.replace("#HIT#", uri)
													.replace("#HIT_PARAMS#", JSON.stringify({
														title: top.document.title,
														referer: this.currentUri,
													}))
											);
										} catch (e) {}
									}

									this.currentUri = uri;
								}
							}
							nextTick(() => {
								this.skeleton = '';
							});
						},
						response => {
							this.skeleton = '';
						},
					);
				},
				onMessageSlider: function (event) {
					if (event.eventId === 'total-fav-number') {
						this.favNumbers = event.data.total;
					}
				},
			},
			template: `
				<div class="market-wrapper">
					<Toolbar
						:categories="categories"
						:searchFilters="searchFilters"
						:menuInfo="result.MENU_INFO"
						:marketAction="marketAction"
						:searchAction="searchAction"
						v-if="!hideToolbar"
					/>
					<Main
						v-if="isMainPage"
						:params="params"
						:result="result"
					/>
					<ListApps
						v-else
						:params="params"
						:result="result"
					/>
				</div>
			`,
		})).use(createPinia()).mount('#market-wrapper-vue');
	}
}