{"version":3,"file":"document-counter.bundle.map.js","names":["this","BX","Sign","exports","main_core_events","ui_counterpanel","main_core","_filter","babelHelpers","classPrivateFieldLooseKey","Filter","constructor","options","Object","defineProperty","writable","value","classPrivateFieldLooseBase","Main","filterManager","getById","filterId","toggleField","name","field","getFieldByName","Type","isPlainObject","items","split","filteredValues","ITEMS","filter","item","includes","VALUE","map","length","getApi","extendFilter","getFilterRows","getFilterFieldsValues","deactivate","setFields","apply","_filter$1","_onActivateItem","_onDeactivateItem","_processItemSelection","_getFieldData","_isAllDeactivated","_onFilterApply","DocumentCounter","CounterPanel","super","target","getCounterItems","multiselect","title","_onFilterApply2","_isAllDeactivated2","_getFieldData2","_processItemSelection2","_onDeactivateItem2","_onActivateItem2","active","EventEmitter","subscribe","bind","static","id","Number","parseInt","isRestricted","color","hideValue","event","getData","preventDefault","fieldData","toUpperCase","getItems","every","record","isActive","compoundId","filterRows","counterItemIds","Set","toLowerCase","activeField","entries","find","row","values","result","join","has","forEach","activate","V2","Event","UI"],"sources":["document-counter.bundle.js"],"mappings":"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"}