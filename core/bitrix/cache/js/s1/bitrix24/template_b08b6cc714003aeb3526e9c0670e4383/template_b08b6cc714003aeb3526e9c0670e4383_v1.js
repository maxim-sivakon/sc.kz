
; /* Start:"a:4:{s:4:"full";s:82:"/bitrix/components/bitrix/app.placement/templates/menu/script.min.js?1728733182580";s:6:"source";s:64:"/bitrix/components/bitrix/app.placement/templates/menu/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
(function(){BX.namespace("BX.rest");if(!!BX.rest.PlacementMenu){return}BX.rest.PlacementMenu=function(e){BX.rest.PlacementMenu.superclass.constructor.apply(this,arguments)};BX.extend(BX.rest.PlacementMenu,BX.rest.Placement);BX.rest.PlacementMenu.prototype.load=function(e,t,n,a){this.initializeInterface(a);BX.rest.AppLayout.openApplication(t,n,{PLACEMENT_ID:e,PLACEMENT:this.param.placement})};BX.rest.PlacementMenu.prototype.initializeInterface=function(e){var t=top.BX.rest.AppLayout.initializePlacement(this.param.placement);t.prototype.reloadData=function(t,n){e();n()}}})();
/* End */
;; /* /bitrix/components/bitrix/app.placement/templates/menu/script.min.js?1728733182580*/
