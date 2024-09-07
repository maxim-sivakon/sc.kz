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
            ?><a id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem["LINK"]?>" class="bg-green-850 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">О нас</div>
                <div class="font-black text-4xl text-white uppercase w-64 mt-2 ml-10"><?= $arItem["NAME"]?></div>
                <div class="text-white w-64 mt-2 ml-10"><?= $arItem["DESC"];?></div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?=$arItem["IMG"]?>" alt="<?= $arItem["NAME"]?>">
            </a><?
            break;

        case "color_1":
            ?><a id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem["LINK"]?>" class="bg-green-850 relative rounded-2xl w-full h-[300px] overflow-hidden">
                <div class="uppercase text-green-900 font-black text-3xl mt-6 ml-10">О нас</div>
                <div class="font-black text-4xl text-white uppercase w-64 mt-2 ml-10"><?= $arItem["NAME"]?></div>
                <div class="text-white w-64 mt-2 ml-10"><?= $arItem["DESC"];?></div>
                <img class="absolute top-0 right-0 h-[300px]" src="<?=$arItem["IMG"]?>" alt="<?= $arItem["NAME"]?>">
            </a><?
            break;

    }
}

