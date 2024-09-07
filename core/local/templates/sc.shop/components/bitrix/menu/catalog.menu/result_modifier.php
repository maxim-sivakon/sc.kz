<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

global $APPLICATION;
$aSCConfigIblock = \SC\Config::getInstance()->getParam( 'IBLOCK' );
$arResults = $APPLICATION->IncludeComponent( "bitrix:menu.sections", "", [
    "IS_SEF"           => "Y",
    "SEF_BASE_URL"     => "/catalog/",
    "SECTION_PAGE_URL" => "#SECTION_CODE#/",
    "DETAIL_PAGE_URL"  => "#SECTION_CODE#/#ELEMENT_ID#/",
    "IBLOCK_TYPE"      => "CRM_PRODUCT_CATALOG",
    "IBLOCK_ID"        => $aSCConfigIblock["GENERAL_CATALOG"]["ID"],
    "DEPTH_LEVEL"      => "1",
    "CACHE_TYPE"       => "A",
    "CACHE_TIME"       => "36000000"
],
false
);

foreach ( $arResults as $arItem ){
    $arResult[] = [
        "TEXT" => $arItem[0],
        "LINK" => $arItem[1]
    ];
}

