{"version":3,"file":"script.map.js","names":["this","BX","exports","ui_popupcomponentsmaker","main_core","_","t","_t","_t2","_t3","_t4","_instance","babelHelpers","classPrivateFieldLooseKey","_popup","_isBitrix","_isAdmin","_isRequisite","_isMainPageAvailable","_getWidgetPopup","_load","SettingsWidgetLoader","constructor","params","Object","defineProperty","value","_load2","_getWidgetPopup2","writable","classPrivateFieldLooseBase","showOnce","node","popup","getPopup","setBindElement","show","popupContainer","getPopupContainer","getBoundingClientRect","left","style","Intranet","SettingsWidget","Promise","resolve","then","bindAndShow","getHeaderSkeleton","Tag","render","getItemSkeleton","getSplitItemSkeleton","getFooterSkeleton","static","options","PopupComponentsMaker","width","container","Dom","clean","addClass","append","ajax","runComponentAction","mode","response","loadCss","data","assets","css","loadJs","js","load","loadScript","Runtime","html","setTimeout","bindWidget","UI"],"sources":["script.js"],"mappings":"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"}