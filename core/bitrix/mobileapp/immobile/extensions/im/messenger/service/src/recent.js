/* eslint-disable flowtype/require-return-type */
/* eslint-disable bitrix-rules/no-bx */

/**
 * @module im/messenger/service/recent
 */
jn.define('im/messenger/service/recent', (require, exports, module) => {

	const { Type } = jn.require('type');
	const { DialogHelper } = jn.require('im/messenger/lib/helper');
	const { RestMethod } = jn.require('im/messenger/const');

	/**
	 * @class RecentService
	 */
	class RecentService
	{
		getList(options = {})
		{
			const methodParams = {};

			if (options.hasOwnProperty('skipOpenlines') && Type.isBoolean(options.skipOpenlines))
			{
				methodParams.SKIP_OPENLINES = options.skipOpenlines ? 'Y' : 'N';
			}

			if (options.lastMessageDate)
			{
				methodParams.LAST_MESSAGE_DATE = options.lastMessageDate;
			}

			return BX.rest.callMethod(RestMethod.imRecentList, methodParams);
		}

		pinChat(options = {})
		{
			const methodParams = {};

			if (!options.dialogId)
			{
				throw new Error('RecentService: options.dialogId is required.');
			}

			if (!DialogHelper.isDialogId(options.dialogId) && !DialogHelper.isChatId(options.dialogId))
			{
				throw new Error('RecentService: options.dialogId is invalid.');
			}

			methodParams.DIALOG_ID = options.dialogId;

			if (!Type.isBoolean(options.shouldPin))
			{
				throw new Error('RecentService: options.shouldPin must be boolean value.');
			}

			methodParams.PIN = options.shouldPin ? 'Y' : 'N';

			return BX.rest.callMethod(RestMethod.imRecentPin, methodParams);
		}

		hideChat(options = {})
		{
			const methodParams = {};

			if (!options.dialogId)
			{
				throw new Error('RecentService: options.dialogId is required.');
			}

			if (!DialogHelper.isDialogId(options.dialogId) && !DialogHelper.isChatId(options.dialogId))
			{
				throw new Error('RecentService: options.dialogId is invalid.');
			}

			methodParams.DIALOG_ID = options.dialogId;

			return BX.rest.callMethod(RestMethod.imRecentHide, methodParams);
		}

		read(options = {})
		{
			if (!options.dialogId)
			{
				throw new Error('RecentService: options.dialogId is required.');
			}

			if (!DialogHelper.isDialogId(options.dialogId) && !DialogHelper.isChatId(options.dialogId))
			{
				throw new Error('RecentService: options.dialogId is invalid.');
			}

			const dialogId = options.dialogId;

			return BX.rest.callMethod(RestMethod.imRecentUnread, { 'DIALOG_ID': dialogId, 'ACTION': 'N' });
		}

		readChat(options = {})
		{
			if (!options.dialogId)
			{
				throw new Error('RecentService: options.dialogId is required.');
			}

			if (!DialogHelper.isDialogId(options.dialogId) && !DialogHelper.isChatId(options.dialogId))
			{
				throw new Error('RecentService: options.dialogId is invalid.');
			}

			const dialogId = options.dialogId;

			const requestMethods = {
				recentUnread: [RestMethod.imRecentUnread, { 'DIALOG_ID': dialogId, 'ACTION': 'N' }],
				dialogRead: [RestMethod.imDialogRead, { 'DIALOG_ID': dialogId }],
			};

			return new Promise((resolve, reject) => {
				BX.rest.callBatch(requestMethods, (result) => {
					const unreadError = result.recentUnread.error();
					const dialogReadError = result.dialogRead.error();

					if (unreadError || dialogReadError)
					{
						reject(result);
						return;
					}

					resolve(result);
				});
			});
		}

		unreadChat(options = {})
		{
			const methodParams = {
				ACTION: 'Y',
			};

			if (!options.dialogId)
			{
				throw new Error('RecentService: options.dialogId is required.');
			}

			if (!DialogHelper.isDialogId(options.dialogId) && !DialogHelper.isChatId(options.dialogId))
			{
				throw new Error('RecentService: options.dialogId is invalid.');
			}

			methodParams.DIALOG_ID = options.dialogId;

			return BX.rest.callMethod(RestMethod.imRecentUnread, methodParams);
		}
	}

	module.exports = {
		RecentService,
	};
});
