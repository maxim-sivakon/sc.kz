import { BatchSetStageManager, ProcessRegistry, type ProgressBarRepository } from 'crm.autorun';
import { Text, Type } from 'main.core';
import type { SettingsCollection } from 'main.core.collections';
import { showAnotherProcessRunningNotification } from '../../../utils';
import { BaseHandler } from '../base-handler';

export class ExecuteSetStage extends BaseHandler
{
	#entityTypeId: number;
	#valueElement: HTMLElement;

	#progressBarRepo: ProgressBarRepository;

	constructor({ entityTypeId, valueElementId })
	{
		super();

		this.#entityTypeId = Text.toInteger(entityTypeId);
		if (!BX.CrmEntityType.isDefined(this.#entityTypeId))
		{
			throw new Error('entityTypeId is required');
		}

		this.#valueElement = document.getElementById(valueElementId);
		if (!Type.isElementNode(this.#valueElement))
		{
			throw new Error('value element not found');
		}
	}

	static getEventName(): string
	{
		return 'BatchManager:executeSetStage';
	}

	injectDependencies(
		progressBarRepo: ProgressBarRepository,
		extensionSettings: SettingsCollection,
	): void
	{
		this.#progressBarRepo = progressBarRepo;
	}

	execute(grid: BX.Main.grid, selectedIds: number[], forAll: boolean): void
	{
		let stageManager = BatchSetStageManager.getItem(grid.getId());
		if (!stageManager)
		{
			stageManager = BatchSetStageManager.create(
				grid.getId(),
				{
					gridId: grid.getId(),
					entityTypeId: this.#entityTypeId,
					container: this.#progressBarRepo.getOrCreateProgressBarContainer('set-stage').id,
				},
			);
		}

		if (stageManager.isRunning())
		{
			return;
		}

		if (ProcessRegistry.isProcessRunning(grid.getId()))
		{
			showAnotherProcessRunningNotification();

			return;
		}

		const stageId = this.#valueElement.dataset.value;
		if (!Type.isStringFilled(stageId))
		{
			console.error('Empty stage id in value element', stageId, this);

			return;
		}

		stageManager.setStageId(stageId);

		if (forAll)
		{
			stageManager.resetEntityIds();
		}
		else
		{
			stageManager.setEntityIds(selectedIds);
		}

		stageManager.execute();
	}
}