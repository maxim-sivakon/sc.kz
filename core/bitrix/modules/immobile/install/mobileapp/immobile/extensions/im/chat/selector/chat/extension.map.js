{"version":3,"sources":["extension.js"],"names":["jn","define","require","exports","module","ChatProvider","defaultEntities","defaultOptions","entities","user","dynamicLoad","dynamicSearch","filters","id","options","searchableChatTypes","fillDialogWithDefaultValues","searchableBotTypes","filterExistingLines","ChatSelector","EntitySelector","constructor","ui","super","this","singleSelection","isNetworkSearchEnabled","isNetworkSearchAvailable","providerOptions","context","createSearchingSections","setProvider","setEntitiesOptions","reduce","result","entityName","provider","setOptions","listener","sections","push","title","BX","message","toUpperCase","backgroundColor","commonSection","getUiSection","commonUserSection","networkSection","unshift","setSections","Section","defaultSize","maxSize","uiSection","onRecentResult","items","cache","forEach","item","sectionCode","scopeFilter","onFetchResult","queryString","query","addSectionCodeForItem","filter","groupSections","getResultedItems","onItemSelected","data","type","close","onResult","prepareResult","onSearchSectionButtonClick","updateSectionsItems","onClickShowMore","onClickShowNetwork","emptyResults","doSearch","onSearchNetworkItemSelected","lineId","params","rest","callBatch","network_join","method","CODE","onSearchItemSelected","changedSection","switchState","updateList","itemList","clear","addItem","entityId","getButtonSearchNetwork","styles","font","color","getItems","length","minSearchSize","concat","isOpen","size","slice","Application","getApiVersion","getButtonMore","setButtonTextBySize","buttonText"],"mappings":"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","file":"extension.map.js"}