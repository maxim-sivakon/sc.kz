{"version":3,"file":"display.bundle.map.js","names":["this","BX","Desktop","Field","exports","ui_entitySelector","tagItem","main_core","main_core_events","hasOwnProperty","_templateObject","_templateObject2","_templateObject3","_templateObject4","Dialog","params","_this","babelHelpers","classCallCheck","defineProperty","Set","targetNode","document","getElementById","targetNodeId","Error","concat","fieldName","toLowerCase","fieldNameForEvent","fieldTitle","context","messages","isMultiple","prepareItems","createWrappers","Runtime","loadExtension","then","tagSelector","getTagSelector","TagSelector","renderTo","wrapper","adjustLayout","dialogSelector","getDialogSelector","prepareInput","Event","bind","show","selectedItems","size","toConsumableArray","input","value","title","createClass","key","_this2","values","items","Array","isArray","entityId","forEach","element","setItem","id","VALUE","NAME","tabs","add","IS_SELECTED","node","Tag","render","taggedTemplateLiteral","Dom","append","event","length","search","clearSearch","deselectAll","hide","getSelectedItems","some","item","getText","createWrapper","createValuesWrapper","appendChild","valuesWrapper","entitySelector","options","getDialogOptions","events","onElementSelect","onElementDeselect","addButtonCaption","getMessage","addButtonCaptionMore","showCreateButton","dialogOptions","getDialogSelectedItems","height","textBoxWidth","onTagAdd","onTagRemove","getDialogItems","dropdownMode","showAvatars","compactView","multiple","enableSearch","getItemFromEventData","clear","getTitle","createOption","unselectedItem","filter","JSON","stringify","getData","tag","_this3","isChanged","arguments","undefined","clearValueItems","adjustItem","fireEvent","innerHTML","createInputTag","toUpperCase","_this$messages$key","Ui","container","valueContainerId","block","defaultFieldName","formName","bindElement","decl","name","valueDelete","onChangeHandler","onChange","EventEmitter","subscribe","defer","firstChild","eventNode","controlObject","BaseEvent","data","currentValue","getAttribute","parse","changeValue","s","Type","i","Text","encode","Enum","UI","EntitySelector"],"sources":["display.bundle.js"],"mappings":"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"}