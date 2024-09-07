<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<? if (!empty($arResult)): ?>
    <section class="py-4 overflow-hidden">
        <div class="container mx-auto">
            <ul class="inline-flex flex-wrap items-center">
                <? foreach ($arResult as $arItem): ?>
                   <li class="p-4">
                            <a class="group flex items-center <?=$arItem["SELECTED"] ? 'text-sx' : 'text-sm';?>  font-medium py-1 text-green-850 hover:text-yellow-300 active:text-orange-500" href="<?=$arItem["LINK"]?>">
                                <span><?=$arItem["TEXT"]?></span>
                            </a>
                        </li>
                <? endforeach ?>
            </ul>
        </div>
    </section>
<? endif ?>
