{"version":3,"file":"profile-field-selector.bundle.map.js","names":["this","BX","Sign","V2","exports","main_core","main_core_events","ui_sidepanel_layout","_","t","_t","_t2","_t3","_t4","_ui","babelHelpers","classPrivateFieldLooseKey","_fields","_inputByFieldCodeMap","_chosenField","_preselectedFieldName","_loadAvailableFields","_render","_fillList","_chooseField","ProfileFieldSelector","EventEmitter","constructor","options","super","Object","defineProperty","value","_chooseField2","_fillList2","_render2","_loadAvailableFields2","writable","container","HTMLDivElement","fieldList","Map","setEventNamespace","Type","isStringFilled","preselectedFieldName","classPrivateFieldLooseBase","getFieldCaptionByName","fieldName","field","find","name","isObject","caption","open","instance","SidePanel","Instance","width","cacheable","events","onCloseComplete","emit","contentCallback","Layout","createContent","extensions","title","Loc","getMessage","design","section","content","buttons","SaveButton","closeButton","text","onclick","close","length","Promise","resolve","ajax","runAction","json","then","response","data","fields","Tag","render","preselectedField","forEach","radioInput","Event","bind","element","set","Dom","append","isNull","has","input","get","checked","B2e","UI"],"sources":["profile-field-selector.bundle.js"],"mappings":"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"}