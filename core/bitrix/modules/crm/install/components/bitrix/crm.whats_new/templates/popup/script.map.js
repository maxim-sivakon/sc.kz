{"version":3,"file":"script.map.js","names":["exports","main_core","main_popup","crm_integration_ui_bannerDispatcher","_templateObject","_classPrivateMethodInitSpec","obj","privateSet","_checkPrivateRedeclaration","add","_classPrivateFieldInitSpec","privateMap","value","set","privateCollection","has","TypeError","_classPrivateMethodGet","receiver","fn","namespaceCrmWhatsNew","Reflection","namespace","_popup","WeakMap","_data","_options","_bannerDispatcher","_userOptionCategory","_userOptionName","_getPopupContent","WeakSet","RichPopup","_ref","data","options","userOptionCategory","userOptionName","babelHelpers","classCallCheck","this","writable","classPrivateFieldSet","Type","isObject","isString","isNumber","entityTypeId","isStringFilled","classPrivateFieldGet","concat","BannerDispatcher","createClass","key","show","_this","isAnyPopupShown","PopupManager","isAnySliderShown","BX","SidePanel","Instance","getOpenSlidersCount","htmlStyles","getComputedStyle","document","documentElement","popupPadding","getPropertyValue","popupPaddingNumberValue","parseFloat","popupOverlayColor","Popup","className","closeIcon","closeByEsc","cacheable","padding","overlay","opacity","backgroundColor","content","_getPopupContent2","call","width","height","events","onPopupClose","save","toQueue","onDone","subscribe","userOptions","checkpoint","Tag","render","taggedTemplateLiteral","innerImage","innerTitle","innerSubTitle","innerDescription","innerInfo","window","Main","Crm","Integration","UI"],"sources":["script.js"],"mappings":"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"}