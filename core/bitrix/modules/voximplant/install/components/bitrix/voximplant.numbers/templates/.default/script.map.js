{"version":3,"sources":["script.js"],"names":["BX","namespace","defaults","gridId","numbers","users","isPhoneAllowed","lastGridUrl","Voximplant","UserEditor","config","this","userId","popup","loader","passwordEdit","elements","deviceSettings","deviceOverlay","server","login","passwordBox","passwordInput","passwordSpan","Object","defineProperty","get","setDefaults","params","prop","getObject","getString","getBoolean","prototype","show","ajax","runComponentAction","data","then","response","createPopup","bind","PopupWindow","autoHide","closeByEsc","closeIcon","contentNoPaddings","contentColor","events","onPopupClose","destroy","onPopupDestroy","content","render","buttons","PopupWindowCustomButton","id","text","message","className","click","onSaveButtonClick","create","props","onPopupBodyClick","children","attrs","type","value","isNotEmptyString","extension","util","htmlspecialchars","bxchange","e","currentTarget","renderLineOptions","userLine","selected","phoneEnabled","onDeviceEnabledChange","style","maxHeight","phoneServer","phoneLogin","phonePassword","innerText","onEditPasswordClick","currentValue","result","lineId","hasOwnProperty","node","html","push","showLoader","classList","add","Loader","target","hideLoader","remove","hide","focus","stopPropagation","saveButton","getButton","buttonNode","options","grid","Main","gridManager","getInstanceById","reload","close","catch","error","errors","alert"],"mappings":"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","file":"script.map.js"}