<?

foreach ( $arResult["ITEMS"] as $arItem ) {
    $arResult["SC"][] = [
        "IBLOCK_ID" => $arItem["IBLOCK_ID"],
        "EDIT_LINK" => $arItem["EDIT_LINK"],
        "ID"        => $arItem["ID"],
        "NAME"      => $arItem["PROPERTIES"]["EX_ANONS_NAME"]["VALUE"],
        "LINK"      => $arItem["DETAIL_PAGE_URL"],
        "IMG"       => $arItem["PREVIEW_PICTURE"]["SRC"],
        "DESC"      => $arItem["PREVIEW_TEXT"],
    ];
}

unset( $arResult["ITEMS"] );