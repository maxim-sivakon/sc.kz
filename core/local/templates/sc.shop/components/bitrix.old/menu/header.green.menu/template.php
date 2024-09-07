<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
        <? foreach ($arResult as $arItem): ?>
            <? if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <? if ($arItem["SELECTED"]): ?>
                <a href="<?=$arItem["LINK"]?>" class="px-3 py-2 text-xs text-green-10 hover:text-yellow-300 active:text-orange-500" <?=$arItem["SELECTED"] ? 'disable' : '';?> ><?=$arItem["TEXT"]?></a>
            <? else: ?>
                <a href="<?=$arItem["LINK"]?>" <?=$arItem["TARGET_BLANK"] == 1 ? 'target="_blank"' : '';?> class="px-3 py-2 text-xs text-green-10 hover:text-yellow-300 active:text-orange-500"><?=$arItem["TEXT"]?></a>
            <? endif ?>
        <? endforeach ?>
<? endif ?>