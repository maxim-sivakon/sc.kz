<?php
if ( !defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var CBitrixComponentTemplate $this */

$aSCConfigIblock = \SC\Config::getInstance()->getParam( 'IBLOCK' );
$iBlockId = $aSCConfigIblock["SC_MENU"]["ID"];
$iBlockType = "CONTENT";
$siteId = SITE_ID;

foreach ( $arResult as $key => $result ) {
    $sectionlink = $result["LINK"];
    $sectionCode = mb_substr( $result["LINK"], 1 );
    $sectionFields = \SC\Section::getSectionFields(
        [
            'IBLOCK_ID'    => $iBlockId,
            'IBLOCK_TYPE'  => $iBlockType,
            'SECTION_CODE' => $sectionCode,
            'SITE_ID'      => $siteId,
        ]
    );
    $arResult[$key]["HIDE_ON_PC"] = $sectionFields["UF_SC_HIDE_ON_PC"];

    if ( $arResult[$key]["HIDE_ON_PC"] == 0 ) {
        $obEnum = new \CUserFieldEnum; // вкл метод
        $arResult[$key]["TYPE_LINK"] = $obEnum->GetList( [], [ "ID" => $sectionFields['UF_SC_TYPE_LINK'] ] )->Fetch();
        $arResult[$key]["UF_SC_HIDE_ON_MOBILE"] = $obEnum->GetList( [], [ "ID" => $sectionFields['UF_SC_HIDE_ON_MOBILE'] ] )->Fetch();
        $arResult[$key]["TARGET_BLANK"] = $sectionFields["UF_SC_TARGET_BLANK"];
        $arResult[$key]["UF_SC_SUB_LINK"] = $sectionFields["UF_SC_SUB_LINK"];
        switch ( $arResult[$key]["TYPE_LINK"]["XML_ID"] ) {
            case 'SC_LINK_HREF':
                $arResult[$key]["LINK"] = $sectionlink;
                break;
            case 'SC_LINK_PHONE':
                $arResult[$key]["LINK"] = 'tel:' . $sectionlink;
                break;
            case 'SC_LINK_MAIL':
                $arResult[$key]["LINK"] = 'mailto:' . $sectionlink;
                break;
        }
    }

}



