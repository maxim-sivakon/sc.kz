{"version":3,"file":"document.bundle.map.js","names":["this","BX","Sign","exports","main_core","main_core_events","_","t","_t","_t2","_t3","_t4","_t5","_t6","_focusedItem","babelHelpers","classPrivateFieldLooseKey","_templates","_renderUploadButtons","_renderDocumentTemplates","_waitForConnectTemplate","_upload","_resetFocus","DocumentUploader","EventEmitter","constructor","super","Object","defineProperty","value","_resetFocus2","_upload2","_waitForConnectTemplate2","_renderDocumentTemplates2","_renderUploadButtons2","writable","classPrivateFieldLooseBase","Map","setFocus","documentId","templateNode","get","Dom","addClass","render","addDocumentTitle","Loc","getMessage","recentTemplatesTitle","templateList","Tag","fileInput","listItems","img","title","info","pdf","doc","Event","bind","async","target","files","length","entries","list","buttons","map","key","click","append","templates","Array","keys","index","emit","relatedTarget","focusedNode","set","observer","MutationObserver","isConnected","focus","disconnect","observe","document","body","childList","subtree","Promise","resolve","setTimeout","upload","removeClass","V2"],"sources":["document.bundle.js"],"mappings":"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"}