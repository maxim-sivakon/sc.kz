{"version":3,"file":"apache-superset-dashboard-selector.bundle.map.js","names":["this","BX","e","t","a","i","s","n","l","add","r","set","has","TypeError","o","d","WeakMap","c","b","h","p","v","u","WeakSet","m","S","f","w","E","B","H","babelHelpers","classPrivateFieldGet","classPrivateFieldSet","Dialog","id","multiple","targetNode","offsetTop","context","entities","dynamicLoad","dynamicSearch","footer","F","call","enableSearch","dropdownMode","showAvatars","compactView","clearUnavailableItems","preselectedItems","events","P","bind","EventEmitter","emit","Promise","I","data","item","then","dashboard","T","title","dashboardId","credentials","catch","errors","Type","isStringFilled","message","UI","Notification","Center","notify","content","Text","encode","ajax","runAction","k","show","Tag","render","taggedTemplateLiteral","Loc","getMessage","Event","SidePanel","Instance","open","customLeftBoundary","BIConnector","ApacheSupersetAnalytics","sendAnalytics","c_element","innerHTML","g","Reflection","namespace","SupersetDashboardSelector","classCallCheck","writable","value","document","getElementById","containerId","textNodeId","marketCollectionUrl","isMarketInstalled","subscribe","EntitySelector"],"sources":["apache-superset-dashboard-selector.bundle.js"],"mappings":"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"}