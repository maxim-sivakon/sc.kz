<?
if ( !defined( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true ) {
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
$this->setFrameMode( true );
?>
<section class="mx-auto container">
    <div class="flex justify-between justify-items-center items-center my-4">
        <div></div>
        <a href="/news/" class="lowercase text-lg hover:cursor-pointer hover:text-orange-500">Посмотреть все статьи</a>
    </div>
    <div class="grid gap-4 grid-cols-2 space-4 m:grid-cols-1 2xl:!grid-cols-2">
        <?
        $GLOBALS['arrFilterBoutUs'] = [
            "=PROPERTY_SC_SEE_ON_MAIN_PAGE_VALUE" => "Y",
        ];

        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "about_us_item",
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

        <?
        $GLOBALS['arrFilterBoutUs'] = [];

        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "blog_item",
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
                "FILTER_NAME"                     => "arrFilterBlog",
                "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                "IBLOCK_ID"                       => "21",
                "IBLOCK_TYPE"                     => "SC_BLOG",
                "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
                "INCLUDE_SUBSECTIONS"             => "N",
                "MESSAGE_404"                     => "",
                "NEWS_COUNT"                      => "1",
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
                    "EX_ANONS_NAME",
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
    </div>
</section>
