<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="dropdown relative mx-2">
    <a href="/catalog/" class="font-black px-6 text-lg uppercase text-gray-950 rounded-lg hover:text-yellow-300 active:text-orange-500">
        Каталог
        <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block  w-2.5">
            <path d="M4.41455 6L0.0844244 0.75L8.74468 0.75L4.41455 6Z" fill="#8B2628"/>
        </svg>
    </a>
    <div class="dropdown-content absolute border-solid border-2 border-green-850 bg-white hidden rounded-lg p-6 text-center">
        <? if (!empty($arResult)): ?>
            <? foreach ($arResult as $arItem): ?>
                <a href="<?=$arItem["LINK"]?>" <?=$arItem["TARGET_BLANK"] == 1 ? 'target="_blank"' : '';?> class="block font-black py-2 text-base uppercase text-green-850 hover:text-yellow-300 active:text-orange-500"><?=$arItem["TEXT"]?></a>
            <? endforeach ?>
        <? endif ?>
    </div>
</div>
