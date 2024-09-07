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
<div class="grid grid-cols-12 lg:gap-6">
    <? if(count($arResult["PROPERTIES"]["FILES"]["VALUE"]) > 0 || count($arResult["PROPERTIES"]["VIDEO_YOUTUBE"]["VALUE"]) > 0){?>
    <div class="col-span-12 pt-6 lg:col-span-8 lg:pb-6">
        <?}?>
        <a href="<?= $arResult["SECTION_URL"] ?>" class="btn bg-slate-150 font-medium w-100 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"
           x-tooltip.cursor.x="'Вернутся в раздел: <?= $arResult["SECTION"]["PATH"][0]["NAME"] ?>'">
            Вернутся назад
        </a>
        <div class="card mt-5 p-4 lg:p-6">
            <div class="mt-6 font-inter text-base text-slate-600 dark:text-navy-200">
                <h1 class="text-xl font-medium text-slate-900 dark:text-navy-50 lg:text-2xl">
                    <?= $arResult["NAME"] ?>
                </h1>
                <?= $arResult["DETAIL_TEXT"] ?>
            </div>
        </div>
        <? if(count($arResult["PROPERTIES"]["FILES"]["VALUE"]) > 0 || count($arResult["PROPERTIES"]["VIDEO_YOUTUBE"]["VALUE"]) > 0){?>
    </div>

    <div class="col-span-12 py-6 lg:sticky lg:bottom-0 lg:col-span-4 lg:self-end">
        <? if(count($arResult["PROPERTIES"]["FILES"]["VALUE"]) > 0){?>
            <div class="mt-5">
                <p class="border-b border-slate-200 pb-2 text-base text-slate-800 dark:border-navy-600 dark:text-navy-100">
                    Дополнительные файлы
                </p>
                <div class="mt-3 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-1">
                        <? foreach ($arResult["PROPERTIES"]["FILES"]["VALUE"] as $idFile){
                            $fileInfo = CFile::GetFileArray($idFile);?>
                            <div class="flex justify-between space-x-2">
                                <div class="flex flex-1 flex-col justify-between">
                                    <div>
                                        <div class="mt-1 text-slate-800 line-clamp-3 dark:text-navy-100">
                                            <a target="_blank" href="<?= $fileInfo['SRC'] ?>" class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"><?= $fileInfo['FILE_NAME'] ?> [скачать]</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?}?>
                </div>
            </div>
        <?}?>
        <? if(count($arResult["PROPERTIES"]["VIDEO_YOUTUBE"]["VALUE"]) > 0){?>
            <div class="mt-5">
                <p class="border-b border-slate-200 pb-2 text-base text-slate-800 dark:border-navy-600 dark:text-navy-100">
                    Видео материалы с YouTube
                </p>
                <div class="mt-3 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-1">
                    <? foreach ($arResult["PROPERTIES"]["VIDEO_YOUTUBE"]["VALUE"] as $key => $video){?>
                        <div class="flex justify-between space-x-2">
                            <div class="flex flex-1 flex-col justify-between">
                                <div>
                                    <div class="mt-1 text-slate-800 line-clamp-3 dark:text-navy-100">
                                        <a href="<?= $video ?>" target="_blank" class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"><?= $arResult["PROPERTIES"]["VIDEO_YOUTUBE"]["DESCRIPTION"][$key] ?> [смотреть]</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?}?>
                </div>
            </div>
        <?}?>
    </div>
<?}?>
</div>
