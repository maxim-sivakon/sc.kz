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
<section class="mx-auto container">
    <?
    $GLOBALS['arrFilterBoutUs'] = [];

    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "about_us_item_list",
        [
            "ACTIVE_DATE_FORMAT"              => "",
            "ADD_SECTIONS_CHAIN"              => "N",
            "AJAX_MODE"                       => "N",
            "AJAX_OPTION_ADDITIONAL"          => "",
            "AJAX_OPTION_HISTORY"             => "N",
            "AJAX_OPTION_JUMP"                => "N",
            "AJAX_OPTION_STYLE"               => "Y",
            "CACHE_FILTER"                    => "N",
            "CACHE_GROUPS"                    => "N",
            "CACHE_TIME"                      => "36000000",
            "CACHE_TYPE"                      => "A",
            "CHECK_DATES"                     => "Y",
            "DETAIL_URL"                      => "",
            "DISPLAY_BOTTOM_PAGER"            => "N",
            "DISPLAY_DATE"                    => "Y",
            "DISPLAY_NAME"                    => "Y",
            "DISPLAY_PICTURE"                 => "Y",
            "DISPLAY_PREVIEW_TEXT"            => "Y",
            "DISPLAY_TOP_PAGER"               => "N",
            "FIELD_CODE"                      => [ "", "" ],
            "FILTER_NAME"                     => "arrFilterBoutUs",
            "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
            "IBLOCK_ID"                       => "37",
            "IBLOCK_TYPE"                     => "ABOUTUS",
            "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
            "INCLUDE_SUBSECTIONS"             => "N",
            "MESSAGE_404"                     => "",
            "NEWS_COUNT"                      => "2",
            "PAGER_BASE_LINK_ENABLE"          => "N",
            "PAGER_DESC_NUMBERING"            => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_SHOW_ALL"                  => "N",
            "PAGER_SHOW_ALWAYS"               => "N",
            "PAGER_TEMPLATE"                  => ".default",
            "PAGER_TITLE"                     => "Новости",
            "PARENT_SECTION"                  => "",
            "PARENT_SECTION_CODE"             => "",
            "PREVIEW_TRUNCATE_LEN"            => "",
            "PROPERTY_CODE"                   => [
                "SC_SEE_ON_MAIN_PAGE",
                "SC_STYLE_SEE",
                "SC_NEWLINE",
            ],
            "SET_BROWSER_TITLE"               => "N",
            "SET_LAST_MODIFIED"               => "N",
            "SET_META_DESCRIPTION"            => "N",
            "SET_META_KEYWORDS"               => "N",
            "SET_STATUS_404"                  => "N",
            "SET_TITLE"                       => "N",
            "SHOW_404"                        => "N",
            "SORT_BY1"                        => "ACTIVE_FROM",
            "SORT_BY2"                        => "SORT",
            "SORT_ORDER1"                     => "DESC",
            "SORT_ORDER2"                     => "ASC",
            "STRICT_SECTION_CHECK"            => "N"
        ]
    ); ?>

    <div class="flex justify-between justify-items-center w-5/6 m-auto mt-16">
        <div class="font-black text-7xl text-green-850 uppercase w-24">КТО мы?</div>
        <div class="w-[820px]">
            <div class="font-black text-2xl text-green-850 uppercase text-justify leading-6">Команда профессионалов своего дела, которые живут кофе. Мы считаем что все работает, только если это по любви.</div>
            <div class="grid gap-3 grid-cols-3 space-3 mt-4">
                <div class="text-justify">В нашем ассортименте более ???? уникальных сортов кофе со всего мира, которые выбираем лично для каждого нашего партнера.</div>
                <div class="text-justify">Вот уже 10 лет мы стабильно обжариваем кофе и отправляем партнерам по Казахстану и СНГ, а также производим кофе под брендом заказчиков.</div>
                <div class="text-justify">Мы следим за качеством кофе от фермы до чашки: сами ищем кофе в странах произрастания, обжариваем на лучших ростерах в мире, проводим каппинги с участием Q-грейдеров, проверяем каждую партию по 7 контрольным точкам.</div>
            </div>
        </div>
    </div>

    <div class="w-4/5 m-auto my-20">
        <div class="grid gap-3 grid-cols-3 space-3 mb-8">
            <div></div>
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
            <div></div>
        </div>
        <div class="grid gap-3 grid-cols-3 space-3 mb-8">
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
        </div>
        <div class="grid gap-4 grid-cols-4 space-4 mb-8">
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
        </div>
        <div class="grid gap-4 grid-cols-4 space-4 mb-8">
            <div></div>
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
            <div class="text-center">
                <img src="https://detki24.ru/image/cache/no_image-700x700.png" alt="photo" class="">
                <div class="text-green-850 text-base font-medium">name</div>
                <div class="text-green-850 text-sm font-medium">city</div>
                <div class="">description</div>
            </div>
            <div></div>
        </div>
    </div>

    <div class="font-black text-4xl text-black uppercase">хотите стать частью<br>нашей команды? <a href="" class="font-medium text-lg text-black uppercase ml-8 w-max hover:text-yellow-300 active:text-orange-500">work.love.coffee@SC.kz</a></div>

</section>
