<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/calendar/.left.menu_ext.php");

$userId = $USER->getId();

$aMenuLinks = array(
    array(
        "Главная",
        SITE_DIR."buffer_users/",
        array(),
        array(
            "menu_item_id" => "buffer_users"
        ),
        "CBXFeatures::IsFeatureEnabled('Users')"
    ),
	array(
		"Файлы",
		SITE_DIR."buffer_users/files/",
		array(),
		array(
			"menu_item_id" => "menu_files"
		),
        "CBXFeatures::IsFeatureEnabled('menu_files')"
	),

);