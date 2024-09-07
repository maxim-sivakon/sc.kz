<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
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
$this->setFrameMode(true);
$filter = [
    "IBLOCK_ID" => $arParams[ "IBLOCK_ID" ],
    "ACTIVE"    => "Y",
];
if (!$arParams[ "PARENT_SECTION" ]) {
    $filter += [
        "DEPTH_LEVEL" => 1
    ];
} else {
    $filter += [
        "=SECTION_ID" => $arParams[ "PARENT_SECTION" ],
        "DEPTH_LEVEL" => 2
    ];
}
$color = [
    3280 => 'bg-info/15',
    3281 => 'bg-secondary/15',
    3282 => 'bg-success/15',
    3283 => 'bg-error/15',
    3284 => 'bg-primary/15',
    3285 => 'bg-warning/15',
];
$rsSections = CIBlockSection::GetList(['SORT' => 'ASC'], $filter);
while ($arSection = $rsSections->GetNext()) {
    $arResult[ 'SECTIONS' ][] = [
        'SECTION' => $arSection,
        'COLOR' => $GLOBALS["USER_FIELD_MANAGER"]->GetUserFields("IBLOCK_" . $arParams[ "IBLOCK_ID" ] . "_SECTION",$arSection['ID'],"UF_COLOR")['UF_COLOR']['VALUE'],
    ];
}

if ($arResult[ 'SECTIONS' ]) {
    ?>
    <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
        <? foreach ($arResult[ 'SECTIONS' ] as $arSection) { ?>
            <div class="card shadow-none">
                <div class="flex flex-1 flex-col justify-between rounded-lg <?= $color[ $arSection[ "COLOR" ]] ?> p-4 dark:bg-transparent sm:p-5">
                    <div>
                        <div class="flex items-start justify-between">
                            <img class="h-12 w-12 rounded-lg object-cover object-center"
                                 src="<?= CFile::GetPath($arSection["SECTION"][ "PICTURE" ]); ?>" alt="image"/>
                        </div>
                        <a href="<?= $arSection["SECTION"][ "SECTION_PAGE_URL" ]; ?>"
                           class="mt-3 font-medium text-slate-700 line-clamp-2 dark:text-navy-100">
                            <?= $arSection["SECTION"][ "NAME" ]; ?>
                        </a>
                        <?php if ($arSection["SECTION"][ "DESCRIPTION" ]): ?>
                            <p class="text-xs+"><?= $arSection["SECTION"][ "DESCRIPTION" ] ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } ?>
<? if(count($arResult[ 'ITEMS' ]) > 0){?>
    <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-5 lg:grid-cols-3 lg:gap-6 xl:grid-cols-4">
        <?php foreach ($arResult[ 'ITEMS' ] as $item) { ?>
            <div class="card">
                <div class="flex grow flex-col p-4">
                    <div class="pt-2 line-clamp-2">
                        <a href="<?= $item[ "DETAIL_PAGE_URL" ] ?>"
                           class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"><?= $item[ "NAME" ] ?></a>
                    </div>

                    <p class="grow pt-2">
                        <?= $item[ "PREVIEW_TEXT" ] ?>
                    </p>

                    <div class="mt-3 text-right">
                        <button class="btn h-8 space-x-1.5 rounded-full bg-slate-150 px-3 text-xs+ font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"/>
                            </svg>
                            <span> 32 </span>
                        </button>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
    <? if ($arParams[ "DISPLAY_BOTTOM_PAGER" ]): ?>
        <br/><?= $arResult[ "NAV_STRING" ] ?>
    <? endif; ?>
<? } else { ?>

    <div class="mt-8 alert flex overflow-hidden rounded-lg bg-warning/10 text-warning dark:bg-warning/15">
        <div class="flex flex-1 items-center space-x-3 p-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
            <div class="flex-1">Раздел пуст, руководитель сервиса обязательно в скором времени заполнит раздел полезной информацией.</div>
        </div>
        <div class="w-1.5 bg-warning"></div>
    </div>

<? } ?>