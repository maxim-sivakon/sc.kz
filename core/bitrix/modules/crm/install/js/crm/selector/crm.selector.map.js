{"version":3,"file":"crm.selector.map.js","names":["BX","window","CrmUISelector","onGetEntityTypes","params","type","isNotEmptyObject","selector","selectorInstance","getOption","entityTypes","CONTACTS","options","enableSearch","searchById","addTab","onlyWithEmail","prefixType","isNotEmptyString","returnItemUrl","returnMultiEmail","COMPANIES","onlyMy","dynamicTypes","dynamicTitles","typeId","entityTypeId","addTabCrmDynamics","title","LEADS","DEALS","ORDERS","PRODUCTS","QUOTES","SMART_INVOICES","onSearchRequestCallbackSussess","responseData","ENTITIES","entityTypesList","entityType","indexOf","match","ITEMS","itemCode","hasOwnProperty","entities","items","eventResult","found","itemCodeList","push","onFilterDestinationSelectorConvert","selectorId","value","Main","selectorManagerV2","isObject","getById","split","QUOTE","parseInt","PRODUCT","COMPANY","CONTACT","LEAD","DEAL","SMART_INVOICE","JSON","stringify","setFilterSelected","UI","SelectorManager","instances","componentSelectorInstance","isNumeric","prefix","convertJson","i","current","parsedValue","parse","isArray","length","selected","ORDER","ready","addCustomEvent"],"sources":["crm.selector.js"],"mappings":"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"}