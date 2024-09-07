<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="mt-5">

    <?foreach($arResult["ITEMS"] as $arItem){?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <div class="mt-3 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-1 lg:gap-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="card lg:flex-row">
            <div class="flex w-full grow flex-col px-4 py-3 sm:px-5">
                <div>
                    <b class="text-lg font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"><?= $arItem["NAME"]?></b>
                </div>
                <p class="mt-1"><?= $arItem["DETAIL_TEXT"];?></p>
                <div class="grow">
                    <div class="mt-2 flex items-center text-xs">
                        <span class="shrink-0 text-slate-400 dark:text-navy-300"><?= $arItem['PROPERTIES']['DATE_UPDATE']['VALUE'] ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? } ?>

</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
