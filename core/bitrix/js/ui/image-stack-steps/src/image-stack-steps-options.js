export type ImageStackStepsOptions = {
	steps: Array<StepType>,
};

export type StepType = {
	id: string,
	progressBox?: {
		title: string,
	},
	header: HeaderType,
	stack: StackType,
	footer: FooterType,
};

export const headerTypeEnum = Object.freeze({
	TEXT: 'text',
	STUB: 'stub',
});

export type HeaderType = {
	type: headerTypeEnum.STUB | headerTypeEnum.TEXT,
	data: {} | { text: string },
	styles?: {
		maxWidth?: number,
	},
};

export type StackType = {
	images: Array<ImageType>,
	status?: StackStatusType,
};

export const imageTypeEnum = Object.freeze({
	IMAGE: 'image',
	IMAGE_STUB: 'image-stub',
	USER: 'user',
	USER_STUB: 'user-stub',
	ICON: 'icon',
});

export type ImageTypeImage = {
	src: string,
	title?: string,
};

export type IconType = {
	icon: string,
	color: string,
};

export type ImageType = {
	type: (
		imageTypeEnum.IMAGE
		| imageTypeEnum.USER
		| imageTypeEnum.USER_STUB
		| imageTypeEnum.IMAGE_STUB
		| imageTypeEnum.ICON
	),
	data: ImageTypeImage | ImageTypeImage & { userId: number } | {} | IconType,
};

export const stackStatusEnum = Object.freeze({
	CUSTOM: 'custom',
	OK: 'ok',
	CANCEL: 'cancel',
	WAIT: 'wait',
});

export type StackStatusType = {
	type: stackStatusEnum.OK | stackStatusEnum.WAIT | stackStatusEnum.CANCEL | stackStatusEnum.CUSTOM,
	data?: IconType,
};

export const footerTypeEnum = Object.freeze({
	TEXT: 'text',
	STUB: 'stub',
	DURATION: 'duration',
});

export type FooterType = {
	type: footerTypeEnum.STUB | footerTypeEnum.TEXT | footerTypeEnum.DURATION,
	data: {} | { text: string } | FooterDurationType,
	styles?: {
		maxWidth?: number,
	},
};

export type FooterDurationType = {
	duration: number, // seconds
	format?: string | [],
	realtime: boolean,
	realtimeBoundary?: number,
};