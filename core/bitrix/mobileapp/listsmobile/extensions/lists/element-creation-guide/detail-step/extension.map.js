{"version":3,"file":"extension.map.js","names":["jn","define","require","exports","module","Loc","WizardStep","ProgressBarNumber","EventEmitter","DetailStepComponent","FocusManager","NotifyManager","DetailStep","constructor","props","super","this","uid","Random","getString","customEventEmitter","createWithUid","elementId","iBlockId","prevElementId","prevIBlockId","editorConfig","sign","prevEditorConfig","component","componentRefCallback","ref","subscribeOnEvents","isLoaded","getCurrentTime","Math","round","Date","now","on","stepAvailabilityChangeCallback","emit","isPreviousSelectedDetailContent","onEnterStep","async","stepId","showLoadingIndicator","Promise","resolve","getData","then","fields","ENTITY_DATA","Object","assign","catch","errors","console","error","finally","hideLoadingIndicator","updateProps","undefined","startTime","renderNumberBlock","isCompleted","number","stepNumber","getProgressBarSettings","isEnabled","title","text","getMessage","count","totalSteps","getTitle","getNextStepButtonText","isNextStepEnabled","isPrevStepEnabled","failedMove","Array","isArray","showErrors","finish","next","successMove","blurFocusedFieldIfHas","validate","startCreateProcess","IBLOCK_ID","reject","BX","ajax","runAction","data","timeToStart","response","createLayout","layout"],"sources":["extension.js"],"mappings":"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"}