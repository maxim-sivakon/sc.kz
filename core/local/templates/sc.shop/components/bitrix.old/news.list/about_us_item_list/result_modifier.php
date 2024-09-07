<?

foreach ( $arResult["ITEMS"] as $arItem ) {
    $arResult["SC"][] = [
        "IBLOCK_ID" => $arItem["IBLOCK_ID"],
        "EDIT_LINK" => $arItem["EDIT_LINK"],
        "ID"        => $arItem["ID"],
        "NAME"      => $arItem["NAME"],
        "LINK"      => $arItem["DETAIL_PAGE_URL"],
        "IMG"       => $arItem["PREVIEW_PICTURE"]["SRC"],
        "DESC"      => $arItem["PREVIEW_TEXT"],
        "SETTINGS"  => [
            "NEW_LINE" => $arItem["PROPERTIES"]["SC_NEWLINE"]["VALUE"],
            "STYLE"    => $arItem["PROPERTIES"]["SC_STYLE_SEE"]["VALUE"],
        ],
    ];
}

unset( $arResult["ITEMS"] );