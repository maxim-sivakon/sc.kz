{"version":3,"file":"script.map.js","names":["exports","main_core","main_core_events","catalog_productSelector","_createForOfIteratorHelper","o","allowArrayLike","it","Symbol","iterator","Array","isArray","_unsupportedIterableToArray","length","i","F","s","n","done","value","e","_e","f","TypeError","normalCompletion","didErr","err","call","step","next","_e2","minLen","_arrayLikeToArray","Object","prototype","toString","slice","constructor","name","from","test","arr","len","arr2","instances","Map","ProductField","babelHelpers","createClass","key","getById","id","get","settings","arguments","undefined","classCallCheck","this","defineProperty","onSelectEdit","bind","onCancelEdit","onBeforeGridRequest","unsubscribeEvents","onSkuLoaded","onGridUpdate","selector","ProductSelector","columnName","componentName","signedParameters","rowIdMask","subscribeEvents","set","EventEmitter","incrementMaxListeners","subscribe","onSelectEditHandler","onCancelEditHandler","onBeforeGridRequestHandler","onGridUpdateHandler","onSkuLoadedHandler","subscribeOnce","onUnsubscribeEventsHandler","unsubscribe","event","currentRowElement","document","getElementById","data","closest","querySelectorAll","style","height","inlineElementList","toConsumableArray","maxColumnsHeight","Math","max","apply","map","cell","parseInt","Dom","concat","setTimeout","forEach","inlineElements","getSelector","wrapper","getWrapper","_event$getData","getData","_event$getData2","slicedToArray","gridData","submitData","BX","prop","FIELDS","productId","getModel","getProductId","replace","imageInputContainer","querySelector","inputs","values","newFilesRegExp","RegExp","_iterator","_step","inputItem","_inputItem$name$match","match","_inputItem$name$match2","fileCounter","code","fileSetting","keys","productNameInput","setMode","Catalog","MODE_VIEW","clearLayout","layout","grid","Main","gridManager","getInstanceById","getConfig","row","getRows","getCellById","removeClass","getContentContainer","EDIT_CLASS","isEdit","MODE_EDIT","addClass","Reflection","namespace","window","Event"],"sources":["script.js"],"mappings":"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"}