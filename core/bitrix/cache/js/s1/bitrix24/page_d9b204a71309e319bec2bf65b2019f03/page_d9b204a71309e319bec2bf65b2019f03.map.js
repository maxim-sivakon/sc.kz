{"version":3, "file":"page_d9b204a71309e319bec2bf65b2019f03.js", "sections": [{"offset": { "line": 2, "column": 0 }, "map": {"version":3,"sources":["/bitrix/components/bitrix/ui.sidepanel.wrapper/templates/.default/template.js"],"names":["BX","namespace","UI","SidePanel","Wrapper","parameters","prototype","init","this","container","containerId","isCloseAfterSave","isReloadGridAfterSave","isReloadPageAfterSave","skipNotification","useLinkTargetsReplacing","notification","previousSlider","Instance","getPreviousSlider","getSliderByWindow","window","parentWindow","getWindow","top","initEditableTitle","getParam","reloadGridOnParentPage","setParam","handler","content","loadExt","then","Notification","Center","notify","bind","location","reload","close","initLinkTargetsReplacing","title","selector","defaultTitle","dataContainer","querySelector","titleDataNode","style","display","TitleEditor","dataNode","replaceLinkTargets","MutationObserver","observer","domMutationHandler","observe","childList","subtree","mutations","forEach","mutation","i","addedNodes","length","node","item","context","document","body","list","tagName","nodeName","convert","nodeListToArray","querySelectorAll","filter","a","target","name","value","slider","getData","set","get","undefined","removeParam","delete","parent","id","type","isString","Main","gridManager","data","grid","instance","grids","getById","isInit","params","titleNode","inputNode","buttonNode","initialTitle","textContent","onDataNodeChange","startEdit","onKeyUp","endEdit","disabled","enable","isDisable","changeDisplay","disable","event","keyCode","preventDefault","getTitle","focus","isShow"],"mappings":"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","file":"template.map.js"}},{"offset": { "line": 6, "column": 0 }, "map": {"version":3,"file":"script.map.js","names":["BX","namespace","UI","ToolbarManager","toolbars","create","options","toolbar","Toolbar","this","get","getId","Error","getDefaultToolbar","id","type","isPlainObject","titleMinWidth","isNumber","titleMaxWidth","filterMinWidth","filterMaxWidth","Type","isStringFilled","Text","getRandom","toolbarContainer","target","isDomNode","titleContainer","querySelector","filterContainer","filterButtons","rightButtons","afterTitleButtons","buttons","Object","buttonIds","isArray","length","forEach","buttonId","button","ButtonManager","createByUniqId","getContainer","originalWidth","offsetWidth","getIcon","getDataSet","getColor","ButtonColor","PRIMARY","setDataSet","toolbarCollapsedIcon","ButtonIcon","ADD","console","warn","getText","windowWidth","document","body","reduceItemsWidth","window","addEventListener","isWindowIncreased","increaseItemsWidth","bind","prototype","getButtons","getButton","previousWindowWidth","currentWindowWidth","getContainerSize","getInnerTotalWidth","scrollWidth","values","i","isCollapsed","setCollapsed","setIcon","item","newInnerWidth","icon","Star","initialized","currentPageInMenu","starContNode","ready","init","addCustomEvent","getElementById","currentFullPath","getAttribute","isNotEmptyString","location","pathname","search","Uri","removeParam","top","params","processMenuItemData","onStandardItemChangedSuccess","onCustomEvent","context","isNotEmptyObject","addClass","title","message","classList","contains","showMessage","pageTitle","innerText","pageTitleTemplate","replace","pageLink","isActive","hasClass","isBoolean","removeClass","popup","PopupWindowManager","content","darkMode","offsetTop","offsetLeft","angle","events","onPopupClose","destroy","autoHide","show","setTimeout"],"sources":["/bitrix/components/bitrix/ui.toolbar/templates/.default/script.js"],"mappings":"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"}},{"offset": { "line": 10, "column": 0 }, "map": {"version":3,"file":"script.map.js","names":["BX","namespace","Landing","TileGrid","params","this","transferPopup","siteId","siteType","wrapper","inner","tiles","minTileWidth","maxTileWidth","tileRowLength","sizeSettings","minWidth","maxWidth","tileRatio","maxTileHeight","setTileWidth","bind","window","requestAnimationFrame","classList","add","prototype","obj","getTileCalculating","width","height","i","length","style","marginLeft","margin","marginTop","wrapperWidth","clientWidth","wholeMarginSize","tileAmountInRow","Math","floor","action","data","successClb","componentName","loaderContainer","create","attrs","className","document","body","appendChild","loader","Loader","size","color","show","ajax","url","util","add_url_param","location","href","method","sessid","message","actionType","dataType","onsuccess","hide","type","result","msg","UI","Tool","ActionDialog","getInstance","error_type","error","top","InfoHelper","Bitrix24","PhoneVerify","setEntityType","setEntityId","startVerify","mandatory","PaymentAlertShow","error_description","content","confirm","reload","onCustomEvent"],"sources":["/bitrix/components/bitrix/landing.sites/templates/.default/script.js"],"mappings":"CAAC,WAEA,aAEAA,GAAGC,UAAU,uBAEbD,GAAGE,QAAQC,SAAW,SAAUC,GAE/BC,KAAKC,cAAgB,GAErB,UAAWF,IAAW,SACtB,CACCC,KAAKE,OAASH,EAAOG,OACrBF,KAAKG,SAAWJ,EAAOI,SACvBH,KAAKI,QAAUL,EAAOK,QACtBJ,KAAKK,MAAQN,EAAOM,MACpBL,KAAKM,MAAQP,EAAOO,MACpBN,KAAKO,aAAe,EACpBP,KAAKQ,aAAe,EACpBR,KAAKS,cAAgB,EAGrB,GAAGV,EAAOW,aACV,CACCV,KAAKO,aAAeR,EAAOW,aAAaC,SACxCX,KAAKQ,aAAeT,EAAOW,aAAaE,QACzC,MACK,GAAIb,EAAOU,cAChB,CACCT,KAAKS,cAAgBV,EAAOU,aAC7B,KAEA,CACCT,KAAKO,aAAe,IACpBP,KAAKQ,aAAe,GACrB,CAEAR,KAAKa,UAAYd,EAAOc,WAAa,KACrCb,KAAKc,cAAgBd,KAAKQ,aAAeR,KAAKa,UAE9Cb,KAAKe,eACLpB,GAAGqB,KAAKC,OAAQ,SAAUjB,KAAKe,aAAaC,KAAKhB,OAEjDkB,sBAAsB,WAClBlB,KAAKI,QAAQe,UAAUC,IAAI,kBAC/B,EAAEJ,KAAKhB,MACR,CACD,EAEAL,GAAGE,QAAQC,SAASuB,UACpB,CACCN,aAAe,WAEd,IAAIO,EAAOtB,KAAKuB,qBAEhB,IAAIC,EAAQF,EAAIE,MAChB,IAAIC,EAASH,EAAIG,OAEjB,GAAGzB,KAAKO,aACR,CACCiB,EAAQA,GAASxB,KAAKQ,aAAec,EAAIE,MAAQxB,KAAKQ,aACtDiB,EAASA,GAAUzB,KAAKc,cAAgBQ,EAAIG,OAASzB,KAAKc,aAC3D,CAEAI,sBAAsB,WACrB,IAAI,IAAIQ,EAAE,EAAGA,EAAE1B,KAAKM,MAAMqB,OAAQD,IAClC,CACC1B,KAAKM,MAAMoB,GAAGE,MAAMJ,MAAQA,EAAQ,KACpCxB,KAAKM,MAAMoB,GAAGE,MAAMH,OAASA,EAAS,KACtCzB,KAAKM,MAAMoB,GAAGE,MAAMC,WAAaP,EAAIQ,OAAS,KAC9C9B,KAAKM,MAAMoB,GAAGE,MAAMG,UAAYT,EAAIQ,OAAS,IAC9C,CACA9B,KAAKK,MAAMuB,MAAMC,WAAcP,EAAIQ,QAAU,EAAK,KAClD9B,KAAKK,MAAMuB,MAAMG,UAAaT,EAAIQ,QAAU,EAAK,EAAI,IACtD,EAAEd,KAAKhB,MACR,EAEAuB,mBAAqB,WAEpB,IAAIS,EAAehC,KAAKI,QAAQ6B,YAAc,GAC9C,IAAIC,EAAmBF,EAAe,IAAM,EAC5C,IAAIR,EAAQ,EACXW,EAAkB,EAEnB,GAAGnC,KAAKS,cACR,CACC0B,EAAkBnC,KAAKS,cACvBe,GAASQ,EAAeE,GAAmBlC,KAAKS,aACjD,KACK,CACJe,EAAQxB,KAAKO,aACb4B,GAAmBH,EAAeE,GAAmBV,EAGrD,GAAGW,EAAkBnC,KAAKM,MAAMqB,OAChC,CACCH,GAASQ,EAAeE,GAAmBlC,KAAKM,MAAMqB,OACtDH,EAAQA,EAAQxB,KAAKQ,aAAeR,KAAKQ,aAAegB,CACzD,MAEK,GAAIW,EAAkBC,KAAKC,MAAMF,GAAoB,EAC1D,CACCA,EAAkBC,KAAKC,MAAMF,GAC7BX,GAASQ,EAAeE,GAAmBC,CAC5C,CACD,CACA,MAAO,CACNX,MAAOA,EACPM,OAAQI,GAAmBC,EAAgB,GAC3CV,OAAQD,EAAQxB,KAAKa,UAEvB,EAEAyB,OAAQ,SAASA,EAAQC,EAAMC,EAAYC,GAE1C,IAAIC,EAAkB/C,GAAGgD,OAAO,MAAM,CACrCC,MAAM,CAACC,UAAU,sCAElBC,SAASC,KAAKC,YAAYN,GAE1B,IAAIO,EAAS,IAAItD,GAAGuD,OAAO,CAACC,KAAM,IAAKC,MAAO,YAC9CH,EAAOI,KAAKX,GAEZ/C,GAAG2D,KAAK,CACPC,IAAK5D,GAAG6D,KAAKC,cACZxC,OAAOyC,SAASC,KAChB,CAACrB,OAAQA,IAEVsB,OAAQ,OACRrB,KAAM,CACLA,KAAMA,EACNsB,OAAQlE,GAAGmE,QAAQ,iBACnBC,WAAY,OACZtB,qBAAsBA,IAAkB,YAClCA,EACA,MAEPuB,SAAU,OACVC,UAAW,SAAS1B,GAEnBU,EAAOiB,OACPxB,EAAgBvB,UAAUC,IAAI,+BAC9B,UACQmB,EAAK4B,OAAS,oBACd5B,EAAK6B,SAAW,YAExB,CACC,GAAI7B,EAAK4B,OAAS,QAClB,CACC,IAAIE,EAAM1E,GAAGE,QAAQyE,GAAGC,KAAKC,aAAaC,cAC1C,GACClC,EAAKmC,aAAe,YAEnBnC,EAAK6B,OAAO,GAAGO,QAAU,uBACzBpC,EAAK6B,OAAO,GAAGO,QAAU,sBACzBpC,EAAK6B,OAAO,GAAGO,QAAU,uBACzBpC,EAAK6B,OAAO,GAAGO,QAAU,4BAG3B,CACC,GAAIpC,EAAK6B,OAAO,GAAGO,QAAU,sBAC7B,CACCC,IAAIjF,GAAG2E,GAAGO,WAAWxB,KAAK,0BAC3B,MACK,GAAId,EAAK6B,OAAO,GAAGO,QAAU,2BAClC,CACCC,IAAIjF,GAAG2E,GAAGO,WAAWxB,KAAK,mBAC3B,KAEA,CACC,GAAIrD,KAAKG,WAAa,QACtB,CACCyE,IAAIjF,GAAG2E,GAAGO,WAAWxB,KAAK,oBAC3B,MACK,GAAIrD,KAAKG,WAAa,YAC3B,CACCyE,IAAIjF,GAAG2E,GAAGO,WAAWxB,KAAK,mCAC3B,KAEA,CACCuB,IAAIjF,GAAG2E,GAAGO,WAAWxB,KAAK,qBAC3B,CACD,CACD,MACK,GAAId,EAAK6B,OAAO,GAAGO,QAAU,6BAClC,CACCC,IAAIjF,GAAG2E,GAAGO,WAAWxB,KAAK,mBAC3B,MACK,GAAId,EAAK6B,OAAO,GAAGO,QAAU,sBAClC,CACCC,IAAIjF,GAAG2E,GAAGO,WAAWxB,KAAK,4BAC3B,MACK,GAAId,EAAK6B,OAAO,GAAGO,QAAU,uBAAyBhF,GAAGmF,UAAYnF,GAAGmF,SAASC,YACtF,CACCpF,GAAGmF,SAASC,YACVN,cACAO,cAAc,gBACdC,YAAYjF,KAAKE,QACjBgF,YAAY,CAACC,UAAW,OAE3B,MACK,UACGxF,GAAGE,QAAQuF,mBAAqB,aACvC7C,EAAKmC,aAAe,UAErB,CACC/E,GAAGE,QAAQuF,iBAAiB,CAC3BtB,QAASvB,EAAK6B,OAAO,GAAGiB,mBAE1B,KAEA,CACChB,EAAIhB,KAAK,CACRiC,QAAS/C,EAAK6B,OAAO,GAAGiB,kBACxBE,QAAS,KACTpB,KAAM,SAER,CACD,KAEA,CACC,UAAW3B,IAAe,WAC1B,CACCA,EAAWD,EACZ,KAEA,CACC,GAAIqC,IAAI3D,SAAWA,OACnB,CAECA,OAAOyC,SAAS8B,QACjB,KAEA,CACC7F,GAAG8F,cAAc,0BAClB,CACD,CACD,CACD,CACD,EAAEzE,KAAKhB,OAET,EAGD,EApPA"}}]}