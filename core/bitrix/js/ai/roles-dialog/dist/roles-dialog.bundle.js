/* eslint-disable  */
this.BX = this.BX || {};
(function (exports,ai_engine,main_popup,main_core_events,ui_vue3_components_hint,main_core,ui_vue3_pinia,ui_label,ui_iconSet_api_vue,ui_iconSet_api_core) {
	'use strict';

	let _ = t => t,
	  _t,
	  _t2;
	var _popup = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("popup");
	var _initPopup = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("initPopup");
	var _renderContent = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("renderContent");
	var _renderPopupTitleBar = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("renderPopupTitleBar");
	class RolesDialogLoaderPopup {
	  constructor() {
	    Object.defineProperty(this, _renderPopupTitleBar, {
	      value: _renderPopupTitleBar2
	    });
	    Object.defineProperty(this, _renderContent, {
	      value: _renderContent2
	    });
	    Object.defineProperty(this, _initPopup, {
	      value: _initPopup2
	    });
	    Object.defineProperty(this, _popup, {
	      writable: true,
	      value: void 0
	    });
	  }
	  show() {
	    if (!babelHelpers.classPrivateFieldLooseBase(this, _popup)[_popup]) {
	      babelHelpers.classPrivateFieldLooseBase(this, _initPopup)[_initPopup]();
	    }
	    babelHelpers.classPrivateFieldLooseBase(this, _popup)[_popup].show();
	  }
	  hide() {
	    var _babelHelpers$classPr;
	    (_babelHelpers$classPr = babelHelpers.classPrivateFieldLooseBase(this, _popup)[_popup]) == null ? void 0 : _babelHelpers$classPr.close();
	  }
	}
	function _initPopup2() {
	  babelHelpers.classPrivateFieldLooseBase(this, _popup)[_popup] = new main_popup.Popup({
	    content: babelHelpers.classPrivateFieldLooseBase(this, _renderContent)[_renderContent](),
	    resizable: true,
	    width: 881,
	    height: 621,
	    padding: 0,
	    contentPadding: 0,
	    borderRadius: '10px 10px 4px 4px',
	    className: 'ai_roles-dialog_popup',
	    animation: true,
	    cacheable: false
	  });
	}
	function _renderContent2() {
	  return main_core.Tag.render(_t || (_t = _`
			<div class="ai__roles-dialog_loader-popup-inner">
				${0}
				<div class="ai__roles-dialog_loader-popup-content">
					<div class="ai__roles-dialog_loader-popup-content-left">
						<div style="width: 145px; height: 10px; margin-bottom: 22px; margin-left: 12px;">
							<div class="rec --color-ai"></div>
						</div>
						<div style="width: 100%; height: 119px; margin-bottom: 14px;">
							<div class="rec --color-ai"></div>
						</div>
						<div style="width: 100%; height: 54px;">
							<div class="rec --color-ai"></div>
						</div>
					</div>
					<div class="ai__roles-dialog_loader-popup-content-right">
					<div style="width: 101px; height: 10px; margin-bottom: 22px;">
							<div class="rec"></div>
						</div>
						<div style="width: 100%; height: 75px; margin-bottom: 8px;">
							<div class="rec"></div>
						</div>
						<div style="width: 100%; height: 75px;">
							<div class="rec"></div>
						</div>
					</div>
				</div>
			</div>
		`), babelHelpers.classPrivateFieldLooseBase(this, _renderPopupTitleBar)[_renderPopupTitleBar]());
	}
	function _renderPopupTitleBar2() {
	  return main_core.Tag.render(_t2 || (_t2 = _`
			<div class="ai__roles-dialog_loader-popup-title-bar">
				<div
					style="width: 152px; height: 16px;"
					class="ai__roles-dialog_loader-popup-title-bar-left"
				>
					<div class="rec"></div>
				</div>
				<div
					style="width: 98px; height: 16px;"
					class="ai__roles-dialog_loader-popup-title-bar-left"
				>
					<div class="rec"></div>
				</div>
			</div>
		`));
	}

	let _$1 = t => t,
	  _t$1;
	function showRolesDialogErrorPopup() {
	  const popup = new main_popup.Popup({
	    content: renderPopupContent(),
	    resizable: false,
	    width: 881,
	    height: 621,
	    padding: 0,
	    contentPadding: 0,
	    borderRadius: '10px 10px 4px 4px',
	    className: 'ai_roles-dialog_popup',
	    animation: true,
	    cacheable: false,
	    autoHide: true,
	    closeByEsc: true,
	    closeIcon: true,
	    closeIconSize: main_popup.CloseIconSize.LARGE
	  });
	  popup.show();
	}
	function renderPopupContent() {
	  return main_core.Tag.render(_t$1 || (_t$1 = _$1`
		<div class="ai__roles-dialog_error-popup-inner">
			<div class="ai__roles-dialog_error-popup-content">
				<div class="ai__roles-dialog_error-popup-content-warning-icon">
					${0}
				</div>
				<p class="ai__roles-dialog_error-popup-content-error-text">
					${0}
				</p>
			</div>
		</div>
	`), renderWarningIcon(), main_core.Loc.getMessage('AI_COPILOT_ROLES_ERROR_TEXT'));
	}
	function renderWarningIcon() {
	  const warningIconColor = 'rgba(176, 149, 220, 0.4)';
	  const warningIcon = new ui_iconSet_api_core.Icon({
	    icon: ui_iconSet_api_core.Main.WARNING,
	    size: 56,
	    color: warningIconColor
	  });
	  return warningIcon.render();
	}

	const RolesDialogAnalyticsEvent = Object.freeze({
	  OPEN: 'open',
	  CLOSE: 'close',
	  SAVE: 'save',
	  SEARCH: 'search',
	  FEEDBACK: 'feedback',
	  SELECT: 'save'
	});
	const RolesDialogAnalyticsEventStatus = Object.freeze({
	  SUCCESS: 'success',
	  ERROR: 'error'
	});
	var _cSection = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("cSection");
	var _sendLabel = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("sendLabel");
	var _getCommonParameters = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getCommonParameters");
	var _getFormattedExtraParams = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getFormattedExtraParams");
	var _formatCSectionParam = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("formatCSectionParam");
	class RolesDialogAnalytics {
	  constructor(options) {
	    Object.defineProperty(this, _formatCSectionParam, {
	      value: _formatCSectionParam2
	    });
	    Object.defineProperty(this, _getFormattedExtraParams, {
	      value: _getFormattedExtraParams2
	    });
	    Object.defineProperty(this, _getCommonParameters, {
	      value: _getCommonParameters2
	    });
	    Object.defineProperty(this, _sendLabel, {
	      value: _sendLabel2
	    });
	    Object.defineProperty(this, _cSection, {
	      writable: true,
	      value: void 0
	    });
	    babelHelpers.classPrivateFieldLooseBase(this, _cSection)[_cSection] = babelHelpers.classPrivateFieldLooseBase(this, _formatCSectionParam)[_formatCSectionParam](options.cSection);
	  }
	  sendOpenLabel(isSuccess, role) {
	    const status = isSuccess ? RolesDialogAnalyticsEventStatus.SUCCESS : RolesDialogAnalyticsEventStatus.ERROR;
	    const extraParams = role ? {
	      p1: {
	        name: 'role',
	        value: role
	      }
	    } : {};
	    babelHelpers.classPrivateFieldLooseBase(this, _sendLabel)[_sendLabel]({
	      status,
	      extraParams,
	      event: RolesDialogAnalyticsEvent.OPEN
	    });
	  }
	  sendCloseLabel(role) {
	    const extraParams = role ? {
	      p1: {
	        name: 'role',
	        value: role
	      }
	    } : {};
	    babelHelpers.classPrivateFieldLooseBase(this, _sendLabel)[_sendLabel]({
	      extraParams,
	      event: RolesDialogAnalyticsEvent.CLOSE
	    });
	  }
	  sendSelectLabel(role) {
	    const extraParams = role ? {
	      p1: {
	        name: 'role',
	        value: role
	      }
	    } : {};
	    babelHelpers.classPrivateFieldLooseBase(this, _sendLabel)[_sendLabel]({
	      extraParams,
	      event: RolesDialogAnalyticsEvent.SELECT
	    });
	  }
	  sendSearchLabel(search) {
	    const extraParams = search ? {
	      p1: {
	        name: 'search',
	        value: search
	      }
	    } : {};
	    babelHelpers.classPrivateFieldLooseBase(this, _sendLabel)[_sendLabel]({
	      extraParams,
	      event: RolesDialogAnalyticsEvent.SEARCH
	    });
	  }
	  sendFeedBackLabel() {
	    babelHelpers.classPrivateFieldLooseBase(this, _sendLabel)[_sendLabel]({
	      event: RolesDialogAnalyticsEvent.FEEDBACK
	    });
	  }
	}
	async function _sendLabel2(params) {
	  const status = params.status || RolesDialogAnalyticsEventStatus.SUCCESS;
	  const event = params.event;
	  const extraParams = params.extraParams || {};
	  try {
	    const {
	      sendData
	    } = await main_core.Runtime.loadExtension('ui.analytics');
	    const sendDataOptions = {
	      event,
	      status,
	      ...babelHelpers.classPrivateFieldLooseBase(this, _getCommonParameters)[_getCommonParameters](),
	      ...babelHelpers.classPrivateFieldLooseBase(this, _getFormattedExtraParams)[_getFormattedExtraParams](extraParams)
	    };
	    sendData(sendDataOptions);
	  } catch (er) {
	    console.error('AI: RolesDialog: Can\'t send analytics', er);
	  }
	}
	function _getCommonParameters2() {
	  return {
	    tool: 'ai',
	    category: 'roles_picker',
	    c_section: babelHelpers.classPrivateFieldLooseBase(this, _cSection)[_cSection]
	  };
	}
	function _getFormattedExtraParams2(extraParams) {
	  const formattedExtraParams = {};
	  Object.entries(extraParams).forEach(([paramKey, param]) => {
	    formattedExtraParams[paramKey] = `${main_core.Text.toCamelCase(param.name)}_${main_core.Text.toCamelCase(param.value)}`;
	  });
	  return formattedExtraParams;
	}
	function _formatCSectionParam2(cSection) {
	  return cSection.split('_').map(stringPart => {
	    if (Number.isNaN(parseInt(stringPart, 10))) {
	      return stringPart;
	    }
	    return '';
	  }).filter(stringPart => stringPart).join('_');
	}

	const RolesDialogGroupListFooterEvents = {
	  CHOOSE_STANDARD_ROLE: 'AI.RolesDialog.GroupListFooter:ChooseStandardRole'
	};
	const RolesDialogGroupListFooter = {
	  methods: {
	    handleClick() {
	      main_core_events.EventEmitter.emit(document, RolesDialogGroupListFooterEvents.CHOOSE_STANDARD_ROLE);
	    }
	  },
	  template: `
		<button @click="handleClick" class="ai__roles-dialog_standard-group-btn">
			<span class="ai__roles-dialog_standard-group-btn-text">
				{{ $Bitrix.Loc.getMessage('AI_COPILOT_ROLES_USE_STANDARD_ROLE') }}
			</span>
		</button>
	`
	};

	const RolesDialogHeaderWithHint = {
	  components: {
	    Hint: ui_vue3_components_hint.Hint
	  },
	  props: {
	    header: {
	      type: String,
	      required: false,
	      default: ''
	    },
	    hint: {
	      type: String,
	      required: false,
	      default: ''
	    }
	  },
	  template: `
		<div class="ai__roles-dialog_header-with-hint">
			<span class="ai__roles-dialog_header-with-hint-text">
				{{ header }}
			</span>
			<span
				v-if="hint"
				class="ai__roles-dialog_header-with-hint-text-hint"
			>
				<Hint :text="hint" />
			</span>
		</div>
	`
	};

	const RolesDialogGroupListHeader = {
	  components: {
	    RolesDialogHeaderWithHint
	  },
	  computed: {
	    text() {
	      return this.$Bitrix.Loc.getMessage('AI_COPILOT_ROLES_GROUP_LIST_HEADER_2');
	    },
	    hint() {
	      return this.$Bitrix.Loc.getMessage('AI_COPILOT_ROLES_GROUP_LIST_HEADER_HINT_2');
	    }
	  },
	  template: `
		<div class="ai__roles-dialog_group-list-header">
			<RolesDialogHeaderWithHint
				:header="text"
				:hint="hint"
			/>
		</div>
	`
	};

	function getRolesDialogContentHeader(States, analytic) {
	  const sendSearchAnalyticLabel = searchQuery => {
	    analytic.sendSearchLabel(searchQuery);
	  };
	  const debouncedSendSearchAnalyticLabel = main_core.Runtime.debounce(sendSearchAnalyticLabel, 800);
	  return {
	    components: {
	      RolesDialogHeaderWithHint
	    },
	    computed: {
	      ...ui_vue3_pinia.mapWritableState(States.useGlobalState, {
	        searchQuery: 'searchQuery',
	        searching: 'searchApplied'
	      }),
	      header() {
	        return this.$Bitrix.Loc.getMessage('AI_COPILOT_ROLES_MAIN_CONTENT_HEADER');
	      },
	      hint() {
	        return this.$Bitrix.Loc.getMessage('AI_COPILOT_ROLES_MAIN_CONTENT_HEADER_HINT');
	      }
	    },
	    watch: {
	      searchQuery() {
	        if (this.searching) {
	          debouncedSendSearchAnalyticLabel(this.searchQuery);
	        }
	      }
	    },
	    template: `
			<div class="ai__roles-dialog_main-content-header">
				<RolesDialogHeaderWithHint
					:header="header"
					:hint="hint"
				/>
			</div>
		`
	  };
	}

	const RolesDialogRoleItemAvatar = {
	  name: 'RolesDialogRoleItemAvatar',
	  components: {
	    BIcon: ui_iconSet_api_vue.BIcon
	  },
	  data() {
	    return {
	      isAvatarLoaded: null
	    };
	  },
	  props: {
	    avatar: {
	      type: String,
	      required: false,
	      default: null
	    },
	    avatarAlt: {
	      type: String,
	      required: false,
	      default: ''
	    },
	    icon: {
	      type: String,
	      required: false,
	      default: null
	    }
	  },
	  computed: {
	    iconSize() {
	      return 24;
	    },
	    iconColor() {
	      return getComputedStyle(document.body).getPropertyValue('--ui-color-background-primary') || '#fff';
	    },
	    fallbackIcon() {
	      return ui_iconSet_api_core.Main.COPILOT_AI;
	    }
	  },
	  methods: {
	    onImageLoad() {
	      this.isAvatarLoaded = true;
	    },
	    onImageLoadError() {
	      this.isAvatarLoaded = false;
	    }
	  },
	  template: `
		<div
			class="ai__roles-dialog_role-image-wrapper"
		>
			<div
				v-if="icon"
				class="ai__roles-dialog_role-image-icon"
			>
				<BIcon
					:name="icon"
					:size="iconSize"
					:color="iconColor"
				/>
			</div>
			<div
				v-else
			>
				<transition name="ai-roles-dialog-icon-fade">
					<img
						v-show="isAvatarLoaded"
						class="ai__roles-dialog_role-image"
						:src="avatar"
						:alt="avatarAlt"
						@error="onImageLoadError"
						@load="onImageLoad"
					/>
				</transition>
				<div
					v-if="isAvatarLoaded === null || isAvatarLoaded === false"
					:class="{'ai__roles-dialog_role-image-icon': true, '--loading': isAvatarLoaded === null}"
				>
					<BIcon
						:name="fallbackIcon"
						:size="iconSize"
						:color="iconColor"
					/>
				</div>
			</div>
		</div>
	`
	};

	const RolesDialogLabelNew = {
	  props: {
	    inverted: {
	      type: Boolean,
	      required: false,
	      default: false
	    }
	  },
	  computed: {
	    labelHTML() {
	      const labelColor = this.inverted ? ui_label.LabelColor.COPILOT_LIGHT_REVERSE : ui_label.LabelColor.COPILOT_LIGHT;
	      const label = new ui_label.Label({
	        color: labelColor,
	        size: ui_label.LabelSize.SM,
	        text: 'NEW',
	        fill: true
	      });
	      return label.render().outerHTML;
	    }
	  },
	  template: `
		<div ref="label" class="ai__roles-dialog_label" v-html="labelHTML"></div>
	`
	};

	// eslint-disable-next-line max-lines-per-function
	function getRolesDialogRoleItemWithStates(States) {
	  return {
	    name: 'RolesDialogRoleItem',
	    components: {
	      BIcon: ui_iconSet_api_vue.BIcon,
	      RolesDialogRoleItemAvatar,
	      RolesDialogLabelNew
	    },
	    props: ['itemData'],
	    computed: {
	      ...ui_vue3_pinia.mapWritableState(States.useGlobalState, {
	        searching: 'searchApplied',
	        searchQuery: 'searchQuery'
	      }),
	      item() {
	        return this.itemData.itemData;
	      },
	      subtitle() {
	        const subtitle = this.item.subtitle;
	        if (this.searching && this.searchQuery !== '') {
	          return subtitle.replaceAll(new RegExp(this.searchQuery, 'gi'), match => `<mark>${match}</mark>`);
	        }
	        return subtitle;
	      },
	      title() {
	        const title = this.item.title;
	        if (this.searching && this.searchQuery !== '') {
	          return title.replaceAll(new RegExp(this.searchQuery, 'gi'), match => `<mark>${match}</mark>`);
	        }
	        return title;
	      },
	      isSelected() {
	        var _this$item$customData;
	        return Boolean((_this$item$customData = this.item.customData) == null ? void 0 : _this$item$customData.selected);
	      },
	      isNew() {
	        var _this$item$customData2;
	        return Boolean((_this$item$customData2 = this.item.customData) == null ? void 0 : _this$item$customData2.isNew);
	      },
	      isInfoItem() {
	        var _this$item$customData3;
	        return Boolean((_this$item$customData3 = this.item.customData) == null ? void 0 : _this$item$customData3.isInfoItem);
	      },
	      className() {
	        return {
	          'ai__roles-dialog_role-item': true,
	          '--selected': this.isSelected
	        };
	      },
	      selectedIconData() {
	        return {
	          name: ui_iconSet_api_core.Main.CHECK,
	          color: this.getUiTokenValue('--ui-color-copilot-soft') || '#B095DC',
	          size: 16
	        };
	      },
	      infoIcon() {
	        return ui_iconSet_api_core.Main.INFO;
	      }
	    },
	    methods: {
	      selectRole() {
	        if (main_core.Type.isFunction(this.item.button.action)) {
	          this.item.button.action();
	        }
	      },
	      getUiTokenValue(token) {
	        getComputedStyle(document.body).getPropertyValue(token);
	      }
	    },
	    template: `
			<article @click="selectRole" :class="className">
			  <RolesDialogRoleItemAvatar
			      :avatar="item.customData.avatar"
			      :avatar-alt="item.title"
			      :icon="isInfoItem ? infoIcon : null"
			  />
			  <div class="ai__roles-dialog_role-item-info">
			    <div class="ai__roles-dialog_role-item-title-wrapper">
					<div class="ai__roles-dialog_role-item-title" v-html="title"></div>
					<div class="ai__roles-dialog_role-item-label">
						<RolesDialogLabelNew v-if="isNew" />
					</div>
			    </div>
			    <p class="ai__roles-dialog_role-item-description" v-html="subtitle"></p>
			  </div>
			  <div
			      v-if="isSelected"
			      class="ai__roles-dialog_role-item-select-icon"
			  >
			    <BIcon
			        :name="selectedIconData.name"
			        :size="selectedIconData.size"
			        :color="selectedIconData.color"
			    />
			  </div>
			</article>
		`
	  };
	}

	const RolesDialogGroupItem = {
	  components: {
	    BIcon: ui_iconSet_api_vue.BIcon,
	    RolesDialogLabelNew
	  },
	  props: ['groupData'],
	  computed: {
	    group() {
	      return this.groupData.groupData;
	    },
	    isNew() {
	      return this.group.customData.isNew;
	    },
	    isSelected() {
	      return this.group.selected;
	    },
	    handleClick() {
	      if (this.group.selected) {
	        return undefined;
	      }
	      return this.groupData.handleClick;
	    },
	    groupItemClassname() {
	      return {
	        'ai__roles-dialog_group-item': true,
	        '--selected': this.isSelected
	      };
	    },
	    chevronRightIconName() {
	      return ui_iconSet_api_core.Actions.CHEVRON_RIGHT;
	    }
	  },
	  template: `
		<div @click="handleClick" class="ai__roles-dialog_group-item-wrapper">
			<div :class="groupItemClassname">
				<div class="ai__roles-dialog_group-item-inner">
				<div class="ai__roles-dialog_group-item-title-wrapper">
					<span class="ai__roles-dialog_group-item-title">
						{{ group.name }}
					</span>
					<div class="ai__roles-dialog_group-item-label-new">
						<RolesDialogLabelNew
							v-if="isNew"
							:inverted="isSelected"
						/>
					</div>
				</div>
					<b-icon :size="16" :name="chevronRightIconName"></b-icon>
				</div>
			</div>
		</div>
	`
	};

	const RolesDialogSearchStub = {
	  template: `
		<div class="ai__roles-dialog_search-stub">
			<div class="ai__roles-dialog_search-stub-content">
				<div class="ai__roles-dialog_search-stub-image"></div>
				<div class="ai__roles-dialog_search-stub-text">
					{{ $Bitrix.Loc.getMessage('AI_COPILOT_ROLES_SEARCH_NO_RESULT_2') }}
				</div>
			</div>
		</div>
	`
	};

	const RolesDialogEvents = {
	  HIDE: 'hide',
	  SELECT_ROLE: 'select-role',
	  SELECT_DEFAULT_ROLE: 'select-default-role'
	};
	const RECOMMENDED_GROUP_CODE = 'recommended';
	const RECENT_GROUP_CODE = 'recents';
	var _entityCatalog = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("entityCatalog");
	var _engine = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("engine");
	var _analytic = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("analytic");
	var _roles = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("roles");
	var _recentRoles = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("recentRoles");
	var _defaultRoleCode = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("defaultRoleCode");
	var _industries = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("industries");
	var _selectedDefaultRoleHandler = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("selectedDefaultRoleHandler");
	var _selectedRoleCode = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("selectedRoleCode");
	var _universalRole = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("universalRole");
	var _title = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("title");
	var _moduleId = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("moduleId");
	var _contextId = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("contextId");
	var _validateOptions = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("validateOptions");
	var _showAfterInit = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("showAfterInit");
	var _subscribeEvents = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("subscribeEvents");
	var _unsubscribeEvents = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("unsubscribeEvents");
	var _selectRole = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("selectRole");
	var _selectDefaultRole = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("selectDefaultRole");
	var _init = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("init");
	var _initEntityCatalog = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("initEntityCatalog");
	var _getSlots = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getSlots");
	var _getInfoItemData = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getInfoItemData");
	var _getAllIndustryCodes = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getAllIndustryCodes");
	var _loadData = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("loadData");
	var _getRecommendedRoleIndustry = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getRecommendedRoleIndustry");
	var _getRecentRoleIndustry = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getRecentRoleIndustry");
	var _getItemsData = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getItemsData");
	var _getUniversalRoleItemData = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getUniversalRoleItemData");
	var _getItemGroupsFromIndustries = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getItemGroupsFromIndustries");
	var _getItemGroupDataFromIndustry = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getItemGroupDataFromIndustry");
	var _getRecentItemGroupData = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getRecentItemGroupData");
	var _compareRecentItems = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("compareRecentItems");
	var _getItemDataFromRole = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getItemDataFromRole");
	var _getSelectedGroupIndex = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getSelectedGroupIndex");
	var _isSelectedIndustry = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("isSelectedIndustry");
	class RolesDialog extends main_core_events.EventEmitter {
	  constructor(_options) {
	    super(_options);
	    Object.defineProperty(this, _isSelectedIndustry, {
	      value: _isSelectedIndustry2
	    });
	    Object.defineProperty(this, _getSelectedGroupIndex, {
	      value: _getSelectedGroupIndex2
	    });
	    Object.defineProperty(this, _getItemDataFromRole, {
	      value: _getItemDataFromRole2
	    });
	    Object.defineProperty(this, _compareRecentItems, {
	      value: _compareRecentItems2
	    });
	    Object.defineProperty(this, _getRecentItemGroupData, {
	      value: _getRecentItemGroupData2
	    });
	    Object.defineProperty(this, _getItemGroupDataFromIndustry, {
	      value: _getItemGroupDataFromIndustry2
	    });
	    Object.defineProperty(this, _getItemGroupsFromIndustries, {
	      value: _getItemGroupsFromIndustries2
	    });
	    Object.defineProperty(this, _getUniversalRoleItemData, {
	      value: _getUniversalRoleItemData2
	    });
	    Object.defineProperty(this, _getItemsData, {
	      value: _getItemsData2
	    });
	    Object.defineProperty(this, _getRecentRoleIndustry, {
	      value: _getRecentRoleIndustry2
	    });
	    Object.defineProperty(this, _getRecommendedRoleIndustry, {
	      value: _getRecommendedRoleIndustry2
	    });
	    Object.defineProperty(this, _loadData, {
	      value: _loadData2
	    });
	    Object.defineProperty(this, _getAllIndustryCodes, {
	      value: _getAllIndustryCodes2
	    });
	    Object.defineProperty(this, _getInfoItemData, {
	      value: _getInfoItemData2
	    });
	    Object.defineProperty(this, _getSlots, {
	      value: _getSlots2
	    });
	    Object.defineProperty(this, _initEntityCatalog, {
	      value: _initEntityCatalog2
	    });
	    Object.defineProperty(this, _init, {
	      value: _init2
	    });
	    Object.defineProperty(this, _selectDefaultRole, {
	      value: _selectDefaultRole2
	    });
	    Object.defineProperty(this, _selectRole, {
	      value: _selectRole2
	    });
	    Object.defineProperty(this, _unsubscribeEvents, {
	      value: _unsubscribeEvents2
	    });
	    Object.defineProperty(this, _subscribeEvents, {
	      value: _subscribeEvents2
	    });
	    Object.defineProperty(this, _showAfterInit, {
	      value: _showAfterInit2
	    });
	    Object.defineProperty(this, _validateOptions, {
	      value: _validateOptions2
	    });
	    Object.defineProperty(this, _entityCatalog, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _engine, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _analytic, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _roles, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _recentRoles, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _defaultRoleCode, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _industries, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _selectedDefaultRoleHandler, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _selectedRoleCode, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _universalRole, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _title, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _moduleId, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _contextId, {
	      writable: true,
	      value: void 0
	    });
	    this.setEventNamespace('AI.RolesDialog');
	    babelHelpers.classPrivateFieldLooseBase(this, _validateOptions)[_validateOptions](_options);
	    babelHelpers.classPrivateFieldLooseBase(this, _title)[_title] = _options.title || '';
	    if (_options.engine) {
	      babelHelpers.classPrivateFieldLooseBase(this, _engine)[_engine] = _options.engine;
	    } else {
	      babelHelpers.classPrivateFieldLooseBase(this, _engine)[_engine] = new ai_engine.Engine({});
	    }
	    babelHelpers.classPrivateFieldLooseBase(this, _moduleId)[_moduleId] = _options.moduleId;
	    babelHelpers.classPrivateFieldLooseBase(this, _contextId)[_contextId] = _options.contextId;
	    babelHelpers.classPrivateFieldLooseBase(this, _engine)[_engine].setModuleId(_options.moduleId);
	    babelHelpers.classPrivateFieldLooseBase(this, _engine)[_engine].setContextId(_options.contextId);
	    babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode] = main_core.Type.isString(_options.selectedRoleCode) ? _options.selectedRoleCode : '';
	    babelHelpers.classPrivateFieldLooseBase(this, _analytic)[_analytic] = new RolesDialogAnalytics({
	      cSection: `${babelHelpers.classPrivateFieldLooseBase(this, _moduleId)[_moduleId]}_${babelHelpers.classPrivateFieldLooseBase(this, _contextId)[_contextId]}`
	    });
	  }
	  setSelectedRoleCode(code) {
	    babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode] = code;
	    if (babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog]) {
	      babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog].setGroups(babelHelpers.classPrivateFieldLooseBase(this, _getItemGroupsFromIndustries)[_getItemGroupsFromIndustries]());
	      babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog].setItems(babelHelpers.classPrivateFieldLooseBase(this, _getItemsData)[_getItemsData]());
	    }
	  }
	  async show() {
	    if (babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog]) {
	      babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog].show();
	      babelHelpers.classPrivateFieldLooseBase(this, _analytic)[_analytic].sendOpenLabel(true, babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode]);
	      return;
	    }
	    await babelHelpers.classPrivateFieldLooseBase(this, _showAfterInit)[_showAfterInit]();
	  }
	  hide() {
	    var _babelHelpers$classPr;
	    (_babelHelpers$classPr = babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog]) == null ? void 0 : _babelHelpers$classPr.close();
	  }
	}
	function _validateOptions2(options) {
	  if (main_core.Type.isStringFilled(options.moduleId) === false) {
	    throw new main_core.BaseError('AI.RolesDialog: moduleId is required option and must be string');
	  }
	  if (main_core.Type.isStringFilled(options.contextId) === false) {
	    throw new main_core.BaseError('AI.RolesDialog: contextId is required option and must be string');
	  }
	  if (options.selectedRoleCode !== undefined && main_core.Type.isString(options.selectedRoleCode) === false) {
	    throw new main_core.BaseError('AI.RolesDialog: selectedRoleCode must be string');
	  }
	  if (options.title && main_core.Type.isString(options.title) === false) {
	    throw new main_core.BaseError('AI.RolesDialog: title must be string');
	  }
	  if (options.engine && !(options.engine instanceof ai_engine.Engine)) {
	    throw new main_core.BaseError('AI.RolesDialog: engine option must be instance of Engine');
	  }
	}
	async function _showAfterInit2() {
	  const loader = new RolesDialogLoaderPopup();
	  let isShowLoader = true;
	  setTimeout(() => {
	    if (isShowLoader) {
	      loader.show();
	    }
	  }, 300);
	  try {
	    await babelHelpers.classPrivateFieldLooseBase(this, _init)[_init]();
	    babelHelpers.classPrivateFieldLooseBase(this, _analytic)[_analytic].sendOpenLabel(true, babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode]);
	    babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog].show();
	  } catch (e) {
	    showRolesDialogErrorPopup();
	    babelHelpers.classPrivateFieldLooseBase(this, _analytic)[_analytic].sendOpenLabel(false, babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode]);
	    console.error(e);
	  } finally {
	    isShowLoader = false;
	    loader.hide();
	  }
	}
	function _subscribeEvents2() {
	  babelHelpers.classPrivateFieldLooseBase(this, _selectedDefaultRoleHandler)[_selectedDefaultRoleHandler] = babelHelpers.classPrivateFieldLooseBase(this, _selectDefaultRole)[_selectDefaultRole].bind(this);
	  main_core_events.EventEmitter.subscribe(document, RolesDialogGroupListFooterEvents.CHOOSE_STANDARD_ROLE, babelHelpers.classPrivateFieldLooseBase(this, _selectedDefaultRoleHandler)[_selectedDefaultRoleHandler]);
	}
	function _unsubscribeEvents2() {
	  main_core_events.EventEmitter.unsubscribe(document, RolesDialogGroupListFooterEvents.CHOOSE_STANDARD_ROLE, babelHelpers.classPrivateFieldLooseBase(this, _selectedDefaultRoleHandler)[_selectedDefaultRoleHandler]);
	}
	function _selectRole2(role) {
	  const event = new main_core_events.BaseEvent({
	    data: {
	      role
	    }
	  });
	  this.setSelectedRoleCode(role.code);
	  babelHelpers.classPrivateFieldLooseBase(this, _analytic)[_analytic].sendSelectLabel(babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode]);
	  this.emit(RolesDialogEvents.SELECT_ROLE, event);
	}
	function _selectDefaultRole2() {
	  this.setSelectedRoleCode(babelHelpers.classPrivateFieldLooseBase(this, _defaultRoleCode)[_defaultRoleCode]);
	  const event = new main_core_events.BaseEvent({
	    data: {
	      code: babelHelpers.classPrivateFieldLooseBase(this, _defaultRoleCode)[_defaultRoleCode]
	    }
	  });
	  this.emit(RolesDialogEvents.SELECT_DEFAULT_ROLE, event);
	  babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog].close();
	}
	async function _init2() {
	  await babelHelpers.classPrivateFieldLooseBase(this, _loadData)[_loadData]();
	  await babelHelpers.classPrivateFieldLooseBase(this, _initEntityCatalog)[_initEntityCatalog]();
	}
	async function _initEntityCatalog2() {
	  const {
	    EntityCatalog,
	    States
	  } = await main_core.Runtime.loadExtension('ui.entity-catalog');
	  babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog] = new EntityCatalog({
	    title: babelHelpers.classPrivateFieldLooseBase(this, _title)[_title],
	    showSearch: true,
	    customComponents: {
	      RolesDialogContentHeader: getRolesDialogContentHeader(States, babelHelpers.classPrivateFieldLooseBase(this, _analytic)[_analytic]),
	      RolesDialogRoleItem: getRolesDialogRoleItemWithStates(States),
	      RolesDialogGroupListHeader,
	      RolesDialogGroupItem,
	      RolesDialogGroupListFooter,
	      RolesDialogSearchStub
	    },
	    popupOptions: {
	      className: 'ai_roles-dialog_popup ui-entity-catalog__scope',
	      resizable: false,
	      width: 852,
	      height: 510,
	      animation: true,
	      events: {
	        onPopupShow: () => {
	          babelHelpers.classPrivateFieldLooseBase(this, _subscribeEvents)[_subscribeEvents]();
	        },
	        onPopupClose: () => {
	          this.emit(RolesDialogEvents.HIDE);
	          babelHelpers.classPrivateFieldLooseBase(this, _unsubscribeEvents)[_unsubscribeEvents]();
	          babelHelpers.classPrivateFieldLooseBase(this, _analytic)[_analytic].sendCloseLabel(babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode]);
	        }
	      }
	    },
	    slots: babelHelpers.classPrivateFieldLooseBase(this, _getSlots)[_getSlots](EntityCatalog),
	    groups: babelHelpers.classPrivateFieldLooseBase(this, _getItemGroupsFromIndustries)[_getItemGroupsFromIndustries](),
	    items: babelHelpers.classPrivateFieldLooseBase(this, _getItemsData)[_getItemsData]()
	  });
	}
	function _getSlots2(EntityCatalog) {
	  const slots = {
	    [EntityCatalog.SLOT_MAIN_CONTENT_HEADER]: '<RolesDialogContentHeader />',
	    [EntityCatalog.SLOT_MAIN_CONTENT_ITEM]: '<RolesDialogRoleItem :itemData="itemSlotProps" />',
	    [EntityCatalog.SLOT_GROUP]: '<RolesDialogGroupItem :groupData="groupSlotProps" />',
	    [EntityCatalog.SLOT_GROUP_LIST_HEADER]: '<RolesDialogGroupListHeader />'
	  };
	  if (EntityCatalog.SLOT_MAIN_CONTENT_SEARCH_STUB) {
	    slots[EntityCatalog.SLOT_MAIN_CONTENT_NO_SELECTED_GROUP_STUB] = '<RolesDialogSearchStub />';
	    slots[EntityCatalog.SLOT_MAIN_CONTENT_SEARCH_STUB] = '<RolesDialogSearchStub />';
	  }
	  return slots;
	}
	function _getInfoItemData2() {
	  return {
	    id: 'info-item-data',
	    title: main_core.Loc.getMessage('AI_COPILOT_ROLES_HELP_ITEM_TITLE'),
	    subtitle: main_core.Loc.getMessage('AI_COPILOT_ROLES_HELP_ITEM_DESCRIPTION'),
	    groupIds: babelHelpers.classPrivateFieldLooseBase(this, _getAllIndustryCodes)[_getAllIndustryCodes](),
	    customData: {
	      isInfoItem: true
	    },
	    button: {
	      action: async () => {
	        await main_core.Runtime.loadExtension('ui.feedback.form');
	        const id = Math.round(Math.random() * 1000);
	        BX.UI.Feedback.Form.open({
	          id: `ai.roles-dialog.feedback-form_${id}`,
	          presets: {
	            sender_page: `${babelHelpers.classPrivateFieldLooseBase(this, _moduleId)[_moduleId]}_${babelHelpers.classPrivateFieldLooseBase(this, _contextId)[_contextId]}`
	          },
	          forms: [{
	            zones: ['es'],
	            id: 738,
	            lang: 'es',
	            sec: '77ui4p'
	          }, {
	            zones: ['en'],
	            id: 740,
	            lang: 'en',
	            sec: 'obza3e'
	          }, {
	            zones: ['de'],
	            id: 742,
	            lang: 'de',
	            sec: 'vqqxgr'
	          }, {
	            zones: ['com.br'],
	            id: 744,
	            lang: 'com.br',
	            sec: 'nz3zig'
	          }, {
	            zones: ['ru', 'by', 'kz'],
	            id: 746,
	            lang: 'ru',
	            sec: 'we50kv'
	          }]
	        });
	        babelHelpers.classPrivateFieldLooseBase(this, _analytic)[_analytic].sendFeedBackLabel();
	      }
	    }
	  };
	}
	function _getAllIndustryCodes2() {
	  return babelHelpers.classPrivateFieldLooseBase(this, _industries)[_industries].map(industry => {
	    return industry.code;
	  });
	}
	async function _loadData2() {
	  const result = await babelHelpers.classPrivateFieldLooseBase(this, _engine)[_engine].getRolesDialogData();
	  babelHelpers.classPrivateFieldLooseBase(this, _universalRole)[_universalRole] = result.data.universalRole;
	  babelHelpers.classPrivateFieldLooseBase(this, _defaultRoleCode)[_defaultRoleCode] = babelHelpers.classPrivateFieldLooseBase(this, _universalRole)[_universalRole].code;
	  babelHelpers.classPrivateFieldLooseBase(this, _industries)[_industries] = result.data.items.map(roleIndustry => {
	    const {
	      code,
	      name,
	      isNew
	    } = roleIndustry;
	    return {
	      code,
	      name,
	      isNew
	    };
	  });
	  babelHelpers.classPrivateFieldLooseBase(this, _industries)[_industries].unshift(babelHelpers.classPrivateFieldLooseBase(this, _getRecentRoleIndustry)[_getRecentRoleIndustry](), babelHelpers.classPrivateFieldLooseBase(this, _getRecommendedRoleIndustry)[_getRecommendedRoleIndustry]());
	  babelHelpers.classPrivateFieldLooseBase(this, _roles)[_roles] = result.data.items.reduce((roles, roleIndustry) => {
	    const industryRoles = roleIndustry.roles;
	    return [...roles, ...industryRoles];
	  }, []);
	  babelHelpers.classPrivateFieldLooseBase(this, _recentRoles)[_recentRoles] = result.data.recents;
	  babelHelpers.classPrivateFieldLooseBase(this, _roles)[_roles] = [...babelHelpers.classPrivateFieldLooseBase(this, _roles)[_roles]];
	  babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode] = babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode] || null;
	}
	function _getRecommendedRoleIndustry2() {
	  return {
	    code: RECOMMENDED_GROUP_CODE,
	    name: main_core.Loc.getMessage('AI_COPILOT_ROLES_RECOMMENDED_GROUP')
	  };
	}
	function _getRecentRoleIndustry2() {
	  return {
	    code: RECENT_GROUP_CODE,
	    name: main_core.Loc.getMessage('AI_COPILOT_ROLES_RECENT_GROUP')
	  };
	}
	function _getItemsData2() {
	  let selectedRole = null;
	  const items = babelHelpers.classPrivateFieldLooseBase(this, _roles)[_roles].map(role => {
	    const groupIds = [role.industryCode];
	    if (role.isRecommended) {
	      groupIds.push(RECOMMENDED_GROUP_CODE);
	    }
	    if (babelHelpers.classPrivateFieldLooseBase(this, _recentRoles)[_recentRoles].findIndex(recentRole => recentRole.code === role.code) > -1) {
	      groupIds.push(RECENT_GROUP_CODE);
	    }
	    if (role.code === babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode]) {
	      selectedRole = babelHelpers.classPrivateFieldLooseBase(this, _getItemDataFromRole)[_getItemDataFromRole](role, groupIds);
	      return null;
	    }
	    return babelHelpers.classPrivateFieldLooseBase(this, _getItemDataFromRole)[_getItemDataFromRole](role, groupIds);
	  }).filter(role => role);
	  const itemsSortedByNewness = items.sort(role => {
	    return role.customData.isNew ? -1 : 1;
	  });
	  const universalRoleItem = babelHelpers.classPrivateFieldLooseBase(this, _getUniversalRoleItemData)[_getUniversalRoleItemData]();
	  return [universalRoleItem, selectedRole, ...itemsSortedByNewness, babelHelpers.classPrivateFieldLooseBase(this, _getInfoItemData)[_getInfoItemData]()].filter(role => role);
	}
	function _getUniversalRoleItemData2() {
	  const role = babelHelpers.classPrivateFieldLooseBase(this, _universalRole)[_universalRole];
	  const groupIds = [...babelHelpers.classPrivateFieldLooseBase(this, _getAllIndustryCodes)[_getAllIndustryCodes]()];
	  return babelHelpers.classPrivateFieldLooseBase(this, _getItemDataFromRole)[_getItemDataFromRole](role, groupIds);
	}
	function _getItemGroupsFromIndustries2() {
	  const selectedGroupIndex = babelHelpers.classPrivateFieldLooseBase(this, _getSelectedGroupIndex)[_getSelectedGroupIndex]();
	  const groups = babelHelpers.classPrivateFieldLooseBase(this, _industries)[_industries].map((industry, index) => {
	    if (industry.code === RECENT_GROUP_CODE) {
	      return babelHelpers.classPrivateFieldLooseBase(this, _getRecentItemGroupData)[_getRecentItemGroupData](index === selectedGroupIndex);
	    }
	    return babelHelpers.classPrivateFieldLooseBase(this, _getItemGroupDataFromIndustry)[_getItemGroupDataFromIndustry](industry, index === selectedGroupIndex);
	  });
	  return [[...groups]];
	}
	function _getItemGroupDataFromIndustry2(industry, isSelected = false) {
	  return {
	    id: industry.code,
	    name: industry.name,
	    selected: isSelected,
	    customData: {
	      isNew: industry.isNew
	    }
	  };
	}
	function _getRecentItemGroupData2(isSelected = false) {
	  return {
	    ...babelHelpers.classPrivateFieldLooseBase(this, _getItemGroupDataFromIndustry)[_getItemGroupDataFromIndustry](babelHelpers.classPrivateFieldLooseBase(this, _getRecentRoleIndustry)[_getRecentRoleIndustry](), isSelected),
	    compare: (item1, item2) => {
	      return babelHelpers.classPrivateFieldLooseBase(this, _compareRecentItems)[_compareRecentItems](item1, item2);
	    }
	  };
	}
	function _compareRecentItems2(item1, item2) {
	  const item1Index = babelHelpers.classPrivateFieldLooseBase(this, _recentRoles)[_recentRoles].findIndex(rr => item1.id === rr.code) + 1;
	  const item2Index = babelHelpers.classPrivateFieldLooseBase(this, _recentRoles)[_recentRoles].findIndex(rr => item2.id === rr.code) + 1;
	  if (item1.id === babelHelpers.classPrivateFieldLooseBase(this, _getInfoItemData)[_getInfoItemData]().id) {
	    return 1;
	  }
	  return item1Index - item2Index;
	}
	function _getItemDataFromRole2(role, groupIds = []) {
	  return {
	    groupIds,
	    id: role.code,
	    name: role.name,
	    title: role.name,
	    subtitle: role.description,
	    description: role.description,
	    button: {
	      text: main_core.Loc.getMessage('AI_COPILOT_ROLES_USE_ROLE_BTN'),
	      action: () => {
	        babelHelpers.classPrivateFieldLooseBase(this, _selectRole)[_selectRole](role);
	        babelHelpers.classPrivateFieldLooseBase(this, _entityCatalog)[_entityCatalog].close();
	      }
	    },
	    customData: {
	      selected: role.code === babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode],
	      avatar: role.avatar.medium,
	      isNew: role.isNew
	    }
	  };
	}
	function _getSelectedGroupIndex2() {
	  const selectedGroupIndex = babelHelpers.classPrivateFieldLooseBase(this, _industries)[_industries].findIndex(industry => {
	    return babelHelpers.classPrivateFieldLooseBase(this, _isSelectedIndustry)[_isSelectedIndustry](industry);
	  });
	  return selectedGroupIndex > -1 ? selectedGroupIndex : 0;
	}
	function _isSelectedIndustry2(industry) {
	  const items = babelHelpers.classPrivateFieldLooseBase(this, _getItemsData)[_getItemsData]();
	  const selectedItem = items.find(item => {
	    return item.id === babelHelpers.classPrivateFieldLooseBase(this, _selectedRoleCode)[_selectedRoleCode];
	  });
	  return (selectedItem == null ? void 0 : selectedItem.groupIds.includes(industry.code)) || false;
	}

	exports.RolesDialogEvents = RolesDialogEvents;
	exports.RolesDialog = RolesDialog;

}((this.BX.AI = this.BX.AI || {}),BX.AI,BX.Main,BX.Event,BX.Vue3.Components,BX,BX.Vue3.Pinia,BX.UI,BX.UI.IconSet,BX.UI.IconSet));
//# sourceMappingURL=roles-dialog.bundle.js.map