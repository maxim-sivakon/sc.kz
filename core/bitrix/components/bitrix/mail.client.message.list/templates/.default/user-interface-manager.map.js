{"version":3,"file":"user-interface-manager.map.js","names":["BX","namespace","Mail","Client","Message","List","UserInterfaceManager","options","this","gridId","mailboxId","spamDir","outcomeDir","inboxDir","trashDir","PATH_TO_USER_TASKS_TASK","PATH_TO_USER_BLOG_POST","ENTITY_TYPE_NO_BIND","ENTITY_TYPE_CRM_ACTIVITY","ENTITY_TYPE_TASKS_TASK","ENTITY_TYPE_BLOG_POST","ENTITY_TYPE_IM_CHAT","ENTITY_TYPE_CALENDAR_EVENT","MESSAGE_MAIL_HREF_LIST","enableNextPage","settingsMenu","readActionBtnRole","notReadActionBtnRole","spamActionBtnRole","crmActionBtnRole","hideClassName","mailboxMenuToggle","document","querySelector","settingsToggle","mailboxPopupMenuId","isCurrentFolderSpam","isCurrentFolderTrash","isCurrentFolderOutcome","setLastDir","initMailboxes","mailboxMenu","setCurrentFolderFlags","getFilterInstance","addEventHandlers","updateLeftMenuCounter","setDefaultBtnTitles","prototype","mailboxesUnseen","i","length","dataset","unseen","Main","MenuManager","destroy","bind","delegate","onMailboxMenuClick","onSettingsToggleClick","addCustomEvent","onApplyFilter","setDefaultBtnOnShow","getGridInstance","getRows","getSelectedIds","onCustomEvent","window","handleGridSelectItem","event","messageId","row","findParent","tagName","id","getElementsByClassName","updateUnreadCounters","getCurrentFolder","Home","Counters","updateCounters","name","lower","count","onMessagesRead","action","getEventId","Grid","reloadTable","trackActionPanelStyleChange","popupWindow","uniquePopupId","indexOf","getPopupContainer","bindElement","parentElement","updateRowMenuSeenBtn","updateRowMenuSpamBtn","updateRowMenuCrmBtn","onCrmBindingDeleted","bindingWrapper","deactivation","updateGridByUnbindFilter","targetNode","gridInstance","gridManager","getById","instance","checkbox","create","props","type","disabled","getCountDisplayed","title","message","style","verticalAlign","setCheckboxNodeForCheckAll","container","display","height","paddingLeft","children","getCheckAllCheckboxes","list","push","Element","enableCheckAllCheckboxes","setTimeout","bindOnCheckAll","firstChild","onclick","resetGridSelection","insertBefore","getGridHeaderCheckbox","gridHeaderCheckbox","undefined","showElement","element","force","classList","remove","hideElement","add","notSpamBtn","className","spamBtn","tableRow","gridRow","getActionsMenu","addCrmBtn","excludeCrmBtn","showAddCrmBtn","isAddToCrmActionAvailable","node","notReadBtn","readBtn","actionName","isSelectedRowsHaveClass","selectedIds","params","changeMessageRead","updateGridByUnseenFilter","filter","getFilterFieldsValues","onPopupMenuFirstShow","contentContainer","close","popup","PopupMenu","events","onPopupFirstShow","isShown","show","getMenuItems","forEach","menuItem","isLocked","Event","getContainer","onPopupClose","onMailboxListClose","onPopupDestroy","closeMailboxMenu","getMenuById","updateMailboxMenuUnseenCounter","updateUnreadMessageMailboxesMarker","totalNumberOfUnreadLetters","unreadMessageMailboxesMarker","updateTotalUnreadCounters","totalNumberOfUnreadMessagesInOtherMailboxes","setTotalUnseenCounter","mailboxCounters","getTotalCounter","top","B24","mail_unseen","BXIM","notify","counters","updateNotifyMailCount","updateMailboxUnseenCounter","seenNumber","columns","j","setAttribute","oldMessage","cells","updateSeenBtn","updateCrmBtn","updateSpamBtn","createEvent","initEvent","dispatchEvent","disActivateBtn","btnRole","activateBtn","activatingBtnRole","toggleButton","role","buttons","querySelectorAll","Array","slice","call","button","showAddToCrm","crmBtn","getPanel","getItemById","notCrmBtn","hide","showAsInlineBlock","oldMessagesNumber","panel","items","item","UI","ActionPanel","Item","disable","layout","removeAttribute","isArray","getRowMenu","filterManager","data","filterInstance","promise","presetName","getPreset","getCurrentPresetId","getLastDir","lastDir","getCurrentMailboxId","currentMailbox","currentMailboxId","html","updateMailboxMenuItemUnseenCounter","setMailboxTitleMenuUnseenCounter","path","isCounted","find","replace","match","isVisible","contains","updateMessageMailHrefList","messageHrefList","currentPage","sliderData","SidePanel","Instance","getTopSlider","getData","lastElement","pop","getSliderByWindow","set","setActiveFeaturePromoter","activeFeaturePromoter","Type","isFunction"],"sources":["user-interface-manager.js"],"mappings":"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"}