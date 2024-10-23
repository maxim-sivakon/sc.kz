<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>

<section data-margin="true" data-code="last-news">
    <div class="container mx-auto">
        <div id="last-news-items">
            <?php foreach ($arResult[ "ITEMS" ] as $arItem) {
                $this->AddEditAction($arItem[ 'ID' ], $arItem[ 'EDIT_LINK' ],
                    CIBlock::GetArrayByID($arItem[ "IBLOCK_ID" ], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem[ 'ID' ], $arItem[ 'DELETE_LINK' ],
                    CIBlock::GetArrayByID($arItem[ "IBLOCK_ID" ], "ELEMENT_DELETE"), ["CONFIRM" => "DELETE"]);
                ?>
                <a id="<?= $this->GetEditAreaId($arItem[ 'ID' ]); ?>"
                   href="<?= $arItem[ "PROPERTIES" ][ "LINK_TO" ][ "VALUE" ] ?>" class="last-news-item">
                    <div class="container-news-item">
                        <div class="news-item-section"><?= $arItem[ "PROPERTIES" ][ "TITLE_H2" ][ "VALUE" ] ?></div>
                        <div class="news-item-title"><?= $arItem[ "NAME" ] ?></div>
                        <div class="news-item-description"><?= $arItem[ "PROPERTIES" ][ "DESCRIPTION" ][ "VALUE" ] ?></div>
                    </div>
                    <img src="<?= $arItem[ "PREVIEW_PICTURE" ][ "SRC" ] ?>" alt="<?= $arItem[ "NAME" ] ?>">
                </a>
            <?php } ?>
        </div>
    </div>
</section>
