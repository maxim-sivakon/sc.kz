
; /* Start:"a:4:{s:4:"full";s:93:"/bitrix/components/bitrix/socialnetwork.admin.set/templates/.default/script.js?17287331842527";s:6:"source";s:78:"/bitrix/components/bitrix/socialnetwork.admin.set/templates/.default/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
var waitDiv = null;
var waitPopup = null;
var waitTimeout = null;
var waitTime = 500;

function __SASSetAdmin()
{
	__SASShowWait();
	BX.ajax({
		url: '/bitrix/components/bitrix/socialnetwork.admin.set/ajax.php',
		method: 'POST',
		dataType: 'json',
		data: {'ACTION': 'SET', 'sessid': BX.bitrix_sessid(), 'site': BX.util.urlencode(BX.message('SASSiteId'))},
		onsuccess: function(data) { __SASProcessAJAXResponse(data); }
	});
}

function __SASProcessAJAXResponse(data)
{
	if (data["SUCCESS"] != "undefined" && data["SUCCESS"] == "Y")
	{
		BX.reload();
		return false;
	}
	else if (data["ERROR"] != "undefined" && data["ERROR"].length > 0)
	{
		if (data["ERROR"].indexOf("SESSION_ERROR", 0) === 0)
		{
			__SASShowError(BX.message('SASErrorSessionWrong'));
			BX.reload();
		}
		else if (data["ERROR"].indexOf("CURRENT_USER_NOT_ADMIN", 0) === 0)
		{
			__SASShowError(BX.message('SASErrorNotAdmin'));
			return false;
		}
		else if (data["ERROR"].indexOf("CURRENT_USER_NOT_AUTH", 0) === 0)
		{
			__SASShowError(BX.message('SASErrorCurrentUserNotAuthorized'));
			return false;
		}
		else if (data["ERROR"].indexOf("SONET_MODULE_NOT_INSTALLED", 0) === 0)
		{
			__SASShowError(BX.message('SASErrorModuleNotInstalled'));
			return false;
		}
		else
		{
			__SASShowError(data["ERROR"]);
			return false;		
		}
	}
}
				
function __SASShowError(errorText) 
{
	__SASCloseWait();

	var errorPopup = new BX.PopupWindow('sas-error' + Math.random(), window, {
		autoHide: true,
		lightShadow: false,
		zIndex: 2,
		content: BX.create('DIV', {props: {'className': 'sonet-adminset-error-text-block'}, html: errorText}),
		closeByEsc: true,
		closeIcon: true
	});
	errorPopup.show();

}

function __SASShowWait(timeout)
{
	if (timeout !== 0)
	{
		return (waitTimeout = setTimeout(function(){
			__SASShowWait(0)
		}, 50));
	}

	if (!waitPopup)
	{
		waitPopup = new BX.PopupWindow('sas_wait', window, {
			autoHide: true,
			lightShadow: true,
			zIndex: 2,
			content: BX.create('DIV', {
				props: {
					className: 'sonet-adminset-wait-cont'
				},
				children: [
					BX.create('DIV', {
						props: {
							className: 'sonet-adminset-wait-icon'
						}
					}),
					BX.create('DIV', {
						props: {
							className: 'sonet-adminset-wait-text'
						},
						html: BX.message('SASWaitTitle')
					})
				]
			})
		});
	}
	else
		waitPopup.setBindElement(window);

	waitPopup.show();
}

function __SASCloseWait()
{
	if (waitTimeout)
	{
		clearTimeout(waitTimeout);
		waitTimeout = null;
	}

	if (waitPopup)
		waitPopup.close();
}
/* End */
;
; /* Start:"a:4:{s:4:"full";s:87:"/bitrix/components/bitrix/tasks.iframe.popup/templates/wrap/logic.min.js?17287331841375";s:6:"source";s:68:"/bitrix/components/bitrix/tasks.iframe.popup/templates/wrap/logic.js";s:3:"min";s:72:"/bitrix/components/bitrix/tasks.iframe.popup/templates/wrap/logic.min.js";s:3:"map";s:72:"/bitrix/components/bitrix/tasks.iframe.popup/templates/wrap/logic.map.js";}"*/
"use strict";BX.namespace("Tasks.Component");(function(){if(typeof BX.Tasks.Component.IframePopup!="undefined"){return}BX.Tasks.Component.IframePopup={};BX.Tasks.Component.IframePopup.SideSlider=BX.Tasks.Component.extend({sys:{code:"iframe-popup-side-slider"},methods:{bindEvents:function(){BX.addCustomEvent(window,"tasksTaskEvent",this.onTaskGlobalEvent.bind(this));BX.bindDelegate(this.scope(),"click",{className:"js-id-copy-page-url"},this.onCopyUrl.bind(this))},onCopyUrl:function(e){e=e||window.event;this.onCopyUrlByNode(e.target,this.getWindowHref())},onCopyUrlByNode:function(e,o){this.timeoutIds=this.timeoutIds||[];if(!BX.clipboard.copy(o)){return}var t={content:BX.message("TASKS_TIP_TEMPLATE_LINK_COPIED"),darkMode:true,autoHide:true,zIndex:1e3,angle:true,offsetLeft:20,bindOptions:{position:"top"}};var n=new BX.PopupWindow("tasks_clipboard_copy",e,t);n.show();var i;while(i=this.timeoutIds.pop())clearTimeout(i);i=setTimeout((function(){n.close()}),1500);this.timeoutIds.push(i)},getWindowHref:function(){return BX.util.remove_url_param(window.location.href,["IFRAME","IFRAME_TYPE"])},onTaskGlobalEvent:function(e,o){if(BX.type.isNotEmptyString(e)){o=o||{};if(!o.options.STAY_AT_PAGE){const e=window.top.BX.SidePanel.Instance.getTopSlider();window.top.BX.SidePanel.Instance.close(false,(()=>{e.destroy()}))}}}}})}).call(this);
/* End */
;; /* /bitrix/components/bitrix/socialnetwork.admin.set/templates/.default/script.js?17287331842527*/
; /* /bitrix/components/bitrix/tasks.iframe.popup/templates/wrap/logic.min.js?17287331841375*/

//# sourceMappingURL=page_f5e937d8269fa72a464e1cd5a3115230.map.js