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

foreach($arResult["SC"] as $arItem){
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => "DELETE"));

    switch ($arItem["SETTINGS"]["STYLE"]){

        case "default":
            ?><div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="mt-8 h-[300px] before:z-10 before:bg-cover before:bg-center backgroundAboutUsOne block bg-green-850 relative rounded-2xl before:w-full before:h-[300px] overflow-hidden">
            <div class="uppercase text-green-900 font-black text-2xl mt-6 ml-10">О нас</div>
            <div class="font-black text-5xl text-white uppercase w-1/2 mt-2 ml-28"><?= $arItem["NAME"]?></div>
            <div class="text-lg text-white w-1/2 mt-4 ml-28"><?= $arItem["DESC"];?></div>
            <img class="absolute top-0 right-0 h-[300px]" src="<?=$arItem["IMG"]?>" alt="<?= $arItem["NAME"]?>">
            <a href="<?=$arItem["LINK"]?>" class="relative z-20 w-max block italic text-sm mt-4 ml-28 text-white hover:text-yellow-300 active:text-orange-500">подробнее</a>
            </div><?
            break;

        case "color_1":
            ?><div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="mt-8 after:z-20 after:bg-cover after:bg-center after:bg-no-repeat backgroundAboutUsTwo block bg-green-850 relative rounded-2xl w-full h-[300px] overflow-hidden">
            <div class="uppercase text-green-900 font-black text-2xl mt-6 ml-10">О нас</div>
            <div class="font-black text-5xl text-white uppercase w-1/2 mt-2 ml-28"><?= $arItem["NAME"]?></div>
            <div class="text-lg text-white w-1/2 mt-4 ml-28 z-10"><?= $arItem["DESC"];?></div>
            <a href="<?=$arItem["IMG"]?>" class="relative z-20 w-max block italic text-sm mt-4 ml-28 text-white hover:text-yellow-300 active:text-orange-500">подробнее</a>
            </div><?
            break;

    }
}
?>
