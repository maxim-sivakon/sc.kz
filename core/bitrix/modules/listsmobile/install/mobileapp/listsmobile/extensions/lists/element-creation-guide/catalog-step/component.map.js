{"version":3,"file":"component.map.js","names":["jn","define","require","exports","module","PureComponent","CatalogStepView","EventEmitter","Duration","NotifyManager","StorageCache","CatalogStepComponent","constructor","props","super","this","state","items","cachedItems","isLoading","uid","Random","getString","customEventEmitter","createWithUid","selectedItem","cache","env","userId","loadFromCache","subscribeOnEvents","on","item","emit","get","Object","keys","length","values","isLoaded","loadItems","BX","ajax","runAction","then","response","data","catch","console","error","errors","Array","isArray","showErrors","finally","preparedItems","map","formattedTime","getFormattedTime","set","setState","time","undefined","duration","createFromSeconds","s","getUnitPropertyModByFormat","i","H","d","m","Y","roundedTime","roundTime","getLengthFormat","YEAR","format","MONTH","DAY","HOUR","MINUTE","seconds","minutes","hours","days","months","years","render","layout"],"sources":["component.js"],"mappings":"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"}