{"version":3,"file":"bundle.map.js","names":["this","BX","exports","checkboxList_css","main_popup","ui_designTokens","ui_vue3","ui_forms","ui_switcher","main_core_events","main_core","viewMode","view","edit","CheckboxListOption","props","emits","data","titleData","title","isCheckedValue","isChecked","methods","getId","id","getValue","setValue","value","getTitle","_this$$refs$title$inn","_this$$refs$title","$refs","innerText","setTitle","setStateFromProps","getOptionClassName","isLocked","isViewMode","getLabelClassName","isEditMode","emitHandleCheckBox","event","setTimeout","isEditable","context","EventEmitter","emit","handleCheckBox","target","checked","$emit","onToggleViewMode","$nextTick","setFocusOnTitle","focus","range","document","createRange","selection","window","getSelection","selectNodeContents","collapse","removeAllRanges","addRange","onChangeTitle","computed","labelClassName","template","CheckboxListCategory","components","setRef","ref","setOptionRef","onToggleOption","CheckboxComponent","dataTitle","dataId","handleClick","key","TextToggleComponent","index","dataItems","findIndex","item","length","currentLabel","_this$dataItems$find","Type","isArrayFilled","label","find","CheckboxListSections","getSectionsItemClassName","sectionValue","Content","dataSections","sections","dataCategories","categories","dataCompactField","compactField","dataOptions","getPreparedDataOptions","dataParams","getPreparedParams","optionsRef","Map","search","longContent","scrollIsBottom","scrollIsTop","options","map","option","_params$useSearch","_params$useSectioning","_params$closeAfterApp","_params$showBackToDef","_params$isEditableOpt","_params$destroyPopupA","params","useSearch","Boolean","useSectioning","closeAfterApply","showBackToDefaultSettings","isEditableOptionsTitle","destroyPopupAfterClose","renderSwitcher","UI","Switcher","node","switcher","size","handlers","toggled","handleSwitcherToggled","clearSearch","handleClearSearchButtonClick","setFocusToSearchInput","_this$$refs","_this$$refs$searchInp","searchInput","handleSectionsToggled","section","getOptionsByCategory","category","getOptions","filter","categoryKey","optionsByTitle","getCheckedOptionsId","getCheckedOptions","getOptionRefs","checkLongContent","container","clientHeight","scrollHeight","getBottomIndent","scrollTop","getTopIndent","handleScroll","handleSearchEscKeyUp","defaultSettings","BaseEvent","fields","dialog","isDefaultPrevented","defaultValue","click","setDefaultValuesForOptions","forEach","get","toggleOption","onSelectAllClick","isAllSelected","deselectAll","selectAll","select","values","cancel","restoreOptionValues","destroyOrClosePopup","apply","isCheckedCheckboxes","eventParams","titles","getOptionTitles","adjustOptions","checkedFieldIds","includes","set","destroyPopup","closePopup","popup","destroy","close","isAllSectionsDisabled","every","has","watch","categoryBySection","visibleOptions","sectionKey","isEmptyContent","isNarrowWidth","innerWidth","isSearchDisabled","some","locked","toLowerCase","wrapperClassName","searchClassName","applyClassName","selectAllClassName","switcherText","isStringFilled","lang","Loc","getMessage","placeholderText","placeholder","defaultSettingsBtnText","defaultBtn","applyBtnText","acceptBtn","cancelBtnText","cancelBtn","selectAllBtnText","selectAllBtn","emptyStateTitleText","allSectionsDisabledTitle","emptyStateTitle","emptyStateDescriptionText","emptyStateDescription","isSomeSelected","selectAllCheckbox","indeterminate","mounted","_getColumnCount","babelHelpers","classPrivateFieldLooseKey","_getLayoutComponent","CheckboxList","constructor","_this$params$useSecti","super","Object","defineProperty","_getLayoutComponent2","_getColumnCount2","layoutApp","layoutComponent","setEventNamespace","subscribeFromOptions","events","isPlainObject","isArray","columnCount","isNumber","popupOptions","Error","customFooterElements","isBoolean","getPopup","Dom","create","addClass","innerHeight","Popup","className","width","maxWidth","Math","round","overlay","autoHide","minHeight","maxHeight","borderRadius","contentPadding","contentBackground","animation","titleBar","content","closeIcon","closeByEsc","onPopupClose","BitrixVue","createApp","classPrivateFieldLooseBase","mount","show","hide","_this$layoutComponent","unmount","isShown","getSelectedOptions","handleOptionToggled","saveColumns","columnIds","callback","selectOption","Main","Vue3","Event"],"sources":["bundle.js"],"mappings":"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"}