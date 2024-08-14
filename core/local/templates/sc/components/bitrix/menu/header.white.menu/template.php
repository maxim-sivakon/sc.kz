<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <? foreach ($arResult as $arItem): ?>
        <? if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
        ?>
        <? if ($arItem["SELECTED"]): ?>
            <a href="<?=$arItem["LINK"]?>" <?=$arItem["SELECTED"] ? 'disable' : '';?> class="mx-2 font-black px-6 text-lg uppercase text-gray-950 rounded-lg hover:text-yellow-300 active:text-orange-500"><?=$arItem["TEXT"]?></a>
        <? else: ?>
            <a href="<?=$arItem["LINK"]?>" <?=$arItem["TARGET_BLANK"] == 1 ? 'target="_blank"' : '';?> class="mx-2 font-black px-6 text-lg uppercase text-gray-950 rounded-lg hover:text-yellow-300 active:text-orange-500"><?=$arItem["TEXT"]?></a>
        <? endif ?>
    <? endforeach ?>
<? endif ?>
