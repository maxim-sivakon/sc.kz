<?php

use Bitrix\Main\EventManager;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class IntranetMobile extends CModule
{
	public $MODULE_ID = 'intranetmobile';
	public $MODULE_VERSION;
	public $MODULE_VERSION_DATE;
	public $MODULE_NAME;
	public $MODULE_DESCRIPTION;

	private $workspaceClass = \Bitrix\IntranetMobile\Workspace::class;

	public function __construct()
	{
		$arModuleVersion = [];
		include(__DIR__ . '/version.php');

		if (is_array($arModuleVersion) && $arModuleVersion['VERSION'] && $arModuleVersion['VERSION_DATE'])
		{
			$this->MODULE_VERSION = $arModuleVersion['VERSION'];
			$this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
		}

		$this->MODULE_NAME = Loc::getMessage('INTRANETMOBILE_MODULE_NAME');
		$this->MODULE_DESCRIPTION = Loc::getMessage('INTRANETMOBILE_MODULE_DESCRIPTION');
	}

	public function installDB(): bool
	{
		ModuleManager::registerModule($this->MODULE_ID);

		$eventManager = EventManager::getInstance();

		$eventManager->registerEventHandler(
			'mobileapp',
			'onJNComponentWorkspaceGet',
			$this->MODULE_ID,
			$this->workspaceClass,
			'getPath'
		);

		$eventManager->registerEventHandler(
			'main',
			'OnUserInitialize',
			$this->MODULE_ID,
			'\Bitrix\IntranetMobile\Integration\Main\Event',
			'onUserInitialize'
		);

		return true;
	}

	public function uninstallDB($arParams = []): void
	{
		$eventManager = EventManager::getInstance();

		$eventManager->unRegisterEventHandler(
			'mobileapp',
			'onJNComponentWorkspaceGet',
			$this->MODULE_ID,
			$this->workspaceClass,
			'getPath'
		);

		$eventManager->unRegisterEventHandler(
			'main',
			'OnUserInitialize',
			$this->MODULE_ID,
			'\Bitrix\IntranetMobile\Integration\Main\Event',
			'onUserInitialize'
		);

		ModuleManager::unRegisterModule($this->MODULE_ID);
	}

	public function installFiles(): bool
	{
		CopyDirFiles(
			$_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/intranetmobile/install/mobileapp/',
			$_SERVER['DOCUMENT_ROOT'] . '/bitrix/mobileapp/',
			true,
			true
		);

		return true;
	}

	public function uninstallFiles(): void
	{
		DeleteDirFilesEx('/bitrix/mobileapp/' . $this->MODULE_ID);
	}

	public function installEvents(): void
	{
	}

	public function uninstallEvents(): void
	{
	}

	private function installDependencies(): void
	{
		$pathToMobileApp = $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/mobileapp/install/index.php';

		if (!ModuleManager::isModuleInstalled('mobile') && file_exists($pathToMobileApp))
		{
			include_once($pathToMobileApp);

			$mobile = new mobile();
			$mobile->InstallFiles();
			$mobile->InstallDB();
		}
	}

	public function doInstall(): void
	{
		global $USER, $APPLICATION;

		if (!$USER->isAdmin())
		{
			return;
		}

		if (!ModuleManager::isModuleInstalled('intranet'))
		{
			$APPLICATION->throwException(Loc::getMessage('INTRANETMOBILE_MODULE_INSTALL_ERROR_INTRANET'));
			$this->showInstallStep(1);
		}
		else
		{
			$this->installDB();
			$this->installFiles();
			$this->installEvents();
			$this->installDependencies();

			$this->showInstallStep(2);
		}
	}

	protected function showInstallStep(int $step): void
	{
		global $APPLICATION;

		$APPLICATION->IncludeAdminFile(
			Loc::getMessage('INTRANETMOBILE_INSTALL_TITLE'),
			$_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . $this->MODULE_ID . '/install/step' . $step . '.php'
		);
	}

	public function doUninstall(): void
	{
		global $USER, $APPLICATION, $step;

		if (!$USER->isAdmin())
		{
			return;
		}

		$step = (int)$step;
		if($step < 2)
		{
			$APPLICATION->IncludeAdminFile(
				Loc::getMessage('INTRANETMOBILE_UNINSTALL_TITLE'),
				$_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . $this->MODULE_ID . '/install/unstep1.php'
			);
		}
		elseif($step === 2)
		{
			$this->uninstallDB();
			$this->uninstallFiles();
			$this->uninstallEvents();

			$APPLICATION->IncludeAdminFile(
				Loc::getMessage('INTRANETMOBILE_UNINSTALL_TITLE'),
				$_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/' . $this->MODULE_ID . '/install/unstep2.php'
			);
		}
	}
}