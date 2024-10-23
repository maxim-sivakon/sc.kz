<?

IncludeModuleLangFile(__FILE__);

class star_comingsoon extends CModule {
	var $MODULE_ID = 'star.comingsoon'; 
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;

	function __construct() {
		$arModuleVersion = array();
		include(dirname(__FILE__)."/version.php");
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = GetMessage("STAR_COMINGSOON_MODULE_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("STAR_COMINGSOON_MODULE_DESC");
		$this->PARTNER_NAME = GetMessage("STAR_COMINGSOON_PARTNER_NAME");
		$this->PARTNER_URI = GetMessage("STAR_COMINGSOON_PARTNER_URI");
	}

	function InstallFiles($arParams = array()) {
		CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/themes/", $_SERVER["DOCUMENT_ROOT"]."/bitrix/themes/.default/{$this->MODULE_ID}/", true, true);
 		return true;
	}

	function UnInstallFiles() {
		DeleteDirFilesEx("/bitrix/themes/.default/{$this->MODULE_ID}");
		return true;
	}

	function DoInstall() {
		global $APPLICATION;
		$this->InstallFiles();
		RegisterModule($this->MODULE_ID);
		RegisterModuleDependences("main", "OnBeforeProlog", $this->MODULE_ID);
	}

	function DoUninstall() {
		global $APPLICATION;
		COption::RemoveOption($this->MODULE_ID);
		UnRegisterModuleDependences("main", "OnBeforeProlog", $this->MODULE_ID);
		UnRegisterModule($this->MODULE_ID);
		$this->UnInstallFiles();
	}
}
?>
