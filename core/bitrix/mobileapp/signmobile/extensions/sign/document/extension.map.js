{"version":3,"file":"extension.map.js","names":["jn","define","require","exports","module","Card","ButtonSize","ButtonDesign","Button","Indent","Color","Loc","ResponseMobile","RefusedJustNow","NotifyManager","showConfirm","rejectConfirmation","IS_IOS","Application","getPlatform","URL_GOSKEY_APP_INSTALL","SignDocument","LayoutComponent","constructor","props","super","url","widget","memberId","hideButtons","title","isGoskey","this","layout","clearHeader","setTitle","text","setRightButtons","setLeftButtons","render","View","style","backgroundColor","bgPrimary","toHex","flex","WebView","scrollDisabled","zoomEnabled","data","paddingBottom","device","screen","safeArea","bottom","L","toNumber","getMessage","size","XL","design","FILLED","disabled","badge","stretched","onClick","canOpenUrl","openUrl","showComponent","documentTitle","layoutWidget","marginBottom","PLAN_ACCENT","description","confirmTitle","cancelTitle","onConfirm","showLoadingIndicator","then","hideLoadingIndicatorWithoutFallback","catch","showErrors","message"],"sources":["extension.js"],"mappings":"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"}