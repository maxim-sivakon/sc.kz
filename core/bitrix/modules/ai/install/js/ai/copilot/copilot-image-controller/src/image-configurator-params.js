import { Tag, Event, Dom } from 'main.core';
import { EventEmitter } from 'main.core.events';
import type { MenuItemOptions, MenuOptions } from 'main.popup';
import { Menu, MenuItem } from 'main.popup';
import { Icon, Actions, Main } from 'ui.icon-set.api.core';

import './css/image-configurator-params.css';

import { params } from './image-configurator-params-config';
import type {
	ImageConfiguratorParam,
	ImageConfiguratorParamOption,
	ImageConfiguratorParamsCurrentValues,
} from './image-configurator-params-config';

type ImageConfiguratorParamsOptions = {};

export class ImageConfiguratorParams extends EventEmitter
{
	#container: HTMLElement | null;
	#currentValues: ImageConfiguratorParamsCurrentValues;
	#openOptionsMenu: Menu | null;

	constructor(options: ImageConfiguratorParamsOptions)
	{
		super(options);

		const data = {
			format: params.format.options[0].value,
			light: params.light?.options[0].value,
			composition: params.composition?.options[0].value,
		};

		const handler = {
			set: (target: ImageConfiguratorParamsCurrentValues, property, value) => {
				Reflect.set(target, property, value);

				if (this.#container)
				{
					const option = params[property].options.find((currentOption) => currentOption.value === value);

					const optionElem = this.#container.querySelector(`#ai__copilot-image-params-item-${property}`);

					if (optionElem)
					{
						optionElem.innerText = option.title;

						Dom.attr(optionElem, 'title', option.title);
					}
				}

				return true;
			},
		};

		this.#currentValues = new Proxy(data, handler);

		this.setEventNamespace('AI.Copilot.ImageParams');
	}

	getCurrentValues(): ImageConfiguratorParamsCurrentValues
	{
		return { ...this.#currentValues };
	}

	isContainsTarget(target: HTMLElement): boolean
	{
		return this.#container?.contains(target)
			|| this.#openOptionsMenu?.getPopupWindow()?.getPopupContainer()?.contains(target);
	}

	render(): HTMLElement
	{
		this.#container = Tag.render`
			<div class="ai__copilot-image-params">
				${this.#renderParams(params)}
			</div>
		`;

		return this.#container;
	}

	#renderParams(parameters: ImageConfiguratorParam[]): HTMLElement[]
	{
		return Object.entries(parameters).map(([parameterName, parameter]) => {
			return this.#renderParam(parameter, parameterName);
		});
	}

	#renderParam(options: ImageConfiguratorParam, parameterName): HTMLElement
	{
		const selectedOption = options.options.find((option) => option.value === this.#currentValues[parameterName]);
		const icon = new Icon({
			size: 24,
			icon: options.icon,
			color: '#8E52EC',
		});

		const rightChevronIcon = new Icon({
			size: 16,
			icon: Actions.CHEVRON_RIGHT,
			color: getComputedStyle(document.body).getPropertyValue('--ui-color-base-50'),
		});

		const param = Tag.render`
			<div class="ai__copilot-image-params-item">
				<div class="ai__copilot-image-params-item_title">
					<div class="ai__copilot-image-params-item_title-icon">
						${icon.render()}
					</div>
					<div
						class="ai__copilot-image-params-item_title-text"
						title="${options.title}"
					>
						${options.title}
					</div>
				</div>
				<div ref="value" class="ai__copilot-image-params-item_value">
					<div
						id="ai__copilot-image-params-item-${parameterName}"
						class="ai__copilot-image-params-item_value-text"
						title="${selectedOption.title}"
					>
						${selectedOption.title}
					</div>
					<div class="ai__copilot-image-params-item_value-arrow-icon">
						${rightChevronIcon.render()}
					</div>
				</div>
			</div>
		`;

		Event.bind(param.root, 'click', () => {
			if (this.#openOptionsMenu)
			{
				this.#openOptionsMenu.close();
			}
			else
			{
				this.#showOptionsMenu(param.value, options.options, parameterName);
			}
		});

		return param.root;
	}

	#showOptionsMenu(bindElement: HTMLElement, options: ImageConfiguratorParam[], parameterName): void
	{
		this.#openOptionsMenu = new Menu({
			...this.#getMenuOptions(bindElement, options, parameterName),
		});

		this.#openOptionsMenu.show();
	}

	#getMenuOptions(
		bindElement: HTMLElement,
		imageConfiguratorParams: ImageConfiguratorParam[],
		parameterName: string,
	): MenuOptions
	{
		const position = Dom.getPosition(bindElement);

		return {
			bindElement: {
				top: position.top - 6,
				left: position.right + 18,
			},
			cacheable: false,
			minWidth: 200,
			items: this.#getMenuItemsFromOptions(imageConfiguratorParams, parameterName),
			events: {
				onPopupAfterClose: () => {
					this.#openOptionsMenu = null;
				},
			},
		};
	}

	#getMenuItemsFromOptions(options: ImageConfiguratorParamOption[], parameterName: string): MenuItemOptions[]
	{
		return options.map((option): MenuItemOptions => {
			const isSelectedOption = option.value === this.#currentValues[parameterName];

			return {
				id: option.value,
				text: option.title,
				html: this.#getMenuItemHtml(option.title, isSelectedOption),
				onclick: this.#handleMenuItemClick(parameterName, option.value),
			};
		});
	}

	#getMenuItemHtml(title: string, isSelected: boolean): string
	{
		const selectedIcon = new Icon({
			size: 18,
			icon: Main.CHECK,
			color: getComputedStyle(document.body).getPropertyValue('--ui-color-link-primary-base'),
		});

		return Tag.render`
			<div class="ai__copilot-image-params-popup-item">
				<span class="ai__copilot-image-params-popup-item_title">${title}</span>
				${isSelected ? selectedIcon.render() : null}
			</div>
		`;
	}

	#handleMenuItemClick(parameterName: string, parameterValue): Function
	{
		return (e: PointerEvent, menuItem: MenuItem): void => {
			this.#currentValues[parameterName] = parameterValue;

			menuItem.getMenuWindow().close();
			this.#openOptionsMenu = null;
		};
	}
}