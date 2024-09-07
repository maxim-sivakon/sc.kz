<?php
/** @global CMain $APPLICATION */
/** @global CUser $USER */

use Bitrix\Main\Config\Option;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;
use Bitrix\Main\Page\AssetLocation;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
    die();
}

$asset = \Bitrix\Main\Page\Asset::getInstance();
$assetUser = CUser::GetList(($by="ID"), ($order="ID"), ["ID" => $USER->GetID()])->Fetch();
$assetUser['PHOTO'] = CFile::GetPath($USER->GetParam('PERSONAL_PHOTO'));

global $APPLICATION;

?><!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <title><?= $APPLICATION->ShowTitle() ?></title><?php

    /* Meta tags */
    $APPLICATION->AddHeadString('<meta charset="UTF-8" />');
    $APPLICATION->AddHeadString('<meta http-equiv="X-UA-Compatible" content="IE=edge" />', false, AssetLocation::BEFORE_CSS);
    $APPLICATION->AddHeadString('<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>', false, AssetLocation::BEFORE_CSS);
    $APPLICATION->AddHeadString('<link rel="icon" type="image/png" href="'.SITE_TEMPLATE_PATH.'/src-template/dist/images/favicon.png" />', false, AssetLocation::BEFORE_CSS);
    $APPLICATION->ShowHead(false);

    /* CSS Assets */
    $asset->addCss(SITE_TEMPLATE_PATH . "/src-template/dist/css/app.css");

    /* Javascript Assets */
    $APPLICATION->AddHeadString('<script src="' . SITE_TEMPLATE_PATH . '/src-template/dist/js/app.js" defer data-skip-moving="true"></script>');

    /* Fonts */
    $APPLICATION->AddHeadString('<link rel="preconnect" href="https://fonts.googleapis.com" />');
    $APPLICATION->AddHeadString('<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />');
    $APPLICATION->AddHeadString('<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"/>');

    /* Additional scripts */
    $APPLICATION->AddHeadString('<script data-skip-moving="true">
            localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
        </script>');
    ?>
</head>
<body x-data x-bind="$store.global.documentBody" class="is-sidebar-open is-header-blur navigation:sideblock">
<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
    <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
</div>
<div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>

    <?if (defined('ERROR_404') && ERROR_404 == 'Y'):?>
    <main :style="$store.global.isDarkModeEnabled ? {backgroundImage : `url('.<?= SITE_TEMPLATE_PATH ?>/src-template/dist/images/illustrations/ufo-bg-dark.svg')`} :{backgroundImage : `url('.<?= SITE_TEMPLATE_PATH ?>/src-template/dist/images/illustrations/ufo-bg.svg')`}"
          class="grid w-full grow grid-cols-1 place-items-center bg-center">
        <?php elseif($USER->IsAuthorized()):?>
        <div class="sidebar sidebar-panel print:hidden">
            <div class="flex h-full grow flex-col border-r border-slate-150 bg-white dark:border-navy-700 dark:bg-navy-750">
                <div class="flex items-center justify-between px-3 pt-4">
                    <!-- Application Logo -->
                    <div class="flex">
                        <a href="/">
                            <img class="h-11 w-11 transition-transform duration-500 ease-in-out hover:rotate-[360deg]" src="<?= SITE_TEMPLATE_PATH ?>/src-template/dist/images/app-logo.svg" alt="logo"/>
                        </a>
                    </div>
                    <button @click="$store.global.isSidebarExpanded = false" class="btn h-7 w-7 rounded-full p-0 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 xl:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                </div>
                <!-- Left menu -->
                <div x-data="{expandedItem:'menu-item-3'}" class="mt-5 h-[calc(100%-4.5rem)] overflow-x-hidden pb-6" x-init="$el._x_simplebar = new SimpleBar($el);">

                    <ul class="flex flex-1 flex-col px-4 font-inter">
                        <?
                        $count = 1;
                        $codeIblock = [
                                '3277' => ['ID' => 32, 'CODE' => 'UPDATES'],
                                '3278' => ['ID' => 31, 'CODE' => 'KANBAN_INFO'],
                                '3279' => ['ID' => 17, 'CODE' => 'REGULATION']
                        ];
                        $rsSections = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => 30, "ACTIVE" => "Y"], false, ["UF_*"], []);
                        while ($arSection = $rsSections->GetNextElement()) {
                            $arFields = $arSection->GetFields();

                            if($arFields['UF_IBLOCK']){
                                $rsSectionsLevelTwo = CIBlockSection::GetList(['SORT' => 'ASC'], ['IBLOCK_ID' => $codeIblock[$arFields['UF_IBLOCK']]['ID'], "ACTIVE" => "Y", "DEPTH_LEVEL" => 1], false, ["UF_*"], []);
                                ?>
                                <li x-data="accordionItem('menu-item-<?=$count++?>')">
                                    <a :class="expanded && 'text-slate-800 font-semibold dark:text-navy-50'" @click="expanded = !expanded" class="flex items-center justify-between py-2 text-xs+ tracking-wide text-slate-500 outline-none transition-[color,padding-left] duration-300 ease-in-out hover:text-slate-800 dark:text-navy-200 dark:hover:text-navy-50" href="javascript:void(0);">
                                        <span><?= $arFields['NAME']?></span>
                                        <svg :class="expanded && 'rotate-90'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 transition-transform ease-in-out" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                        </svg>
                                    </a>
                                    <ul x-collapse x-show="expanded">
                                        <? while ($arSectionsLevelTwo = $rsSectionsLevelTwo->GetNextElement()) {
                                            $arFieldsLevelTwo = $arSectionsLevelTwo->GetFields(); ?>
                                            <li>
                                                <a x-data="navLink" href="<?= $arFieldsLevelTwo['SECTION_PAGE_URL']?>" :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'" class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4">
                                                    <div class="flex items-center space-x-2">
                                                        <div class="h-1.5 w-1.5 rounded-full border border-current opacity-40"></div>
                                                        <span><?= $arFieldsLevelTwo['NAME']?></span>
                                                    </div>
                                                </a>
                                            </li>
                                        <?}?>
                                    </ul>
                                </li>
                                <?
                            }else{
                                ?>
                                <li>
                                    <a x-data="navLink" href="<?= $arFields['CODE']?>" :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'" class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50">
                                        <?= $arFields['NAME']?>
                                    </a>
                                </li>
                                <?
                            }
                            ?>

                        <?}?>

                    </ul>

                    <div class="my-3 mx-4 h-px bg-slate-200 dark:bg-navy-500"></div>

                </div>
            </div>
        </div>
        <nav class="header print:hidden">
            <!-- App Header  -->
            <div class="header-container relative flex w-full bg-white dark:bg-navy-700 print:hidden">
                <!-- Header Items -->
                <div class="flex w-full items-center justify-between">
                    <!-- Left: Sidebar Toggle Button -->
                    <div class="h-7 w-7">
                        <button class="menu-toggle ml-0.5 flex h-7 w-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80" :class="$store.global.isSidebarExpanded && 'active'" @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                    <!-- Right: Header buttons -->
                    <div class="-mr-1.5 flex items-center space-x-2">
                        <!-- Mobile Search Toggle -->
                        <button @click="$store.global.isSearchbarActive = !$store.global.isSearchbarActive" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5.5 w-5.5 text-slate-500 dark:text-navy-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>

                        <?php if($USER->IsAdmin()){?>
                            <a href="/bitrix/" target="_blank" class="btn bg-primary/10 font-medium text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-accent-light/10 dark:text-accent-light dark:hover:bg-accent-light/20 dark:focus:bg-accent-light/20 dark:active:bg-accent-light/25">
                                Администрирование
                            </a>
                        <?php }?>

                        <a href="https://crm.serikovcoffee.kz/" target="_blank" class="btn bg-info/10 font-medium text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                            CRM
                        </a>
                        <!-- Main Searchbar -->
                        <template x-if="$store.breakpoints.smAndUp">
                            <div class="flex" x-data="usePopper({placement:'bottom-end',offset:12})" @click.outside="isShowPopper && (isShowPopper = false)">
                                <div class="relative mr-4 flex h-8">
                                    <input placeholder="Search here...!" class="form-input peer h-full rounded-full bg-slate-150 px-4 pl-9 text-xs+ text-slate-800 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:text-navy-100 dark:placeholder-navy-300 dark:ring-accent/50 dark:hover:bg-navy-900 dark:focus:bg-navy-900" :class="isShowPopper ? 'w-80' : 'w-60'" @focus="isShowPopper= true" type="text" x-ref="popperRef"/>
                                    <div class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <!-- Dark Mode Toggle -->
                        <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
                                class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg x-show="$store.global.isDarkModeEnabled"
                                 x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                                 x-transition:enter-start="scale-75"
                                 x-transition:enter-end="scale-100 static"
                                 class="h-6 w-6 text-amber-400"
                                 fill="currentColor"
                                 viewBox="0 0 24 24">
                                <path d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 x-show="!$store.global.isDarkModeEnabled"
                                 x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                                 x-transition:enter-start="scale-75"
                                 x-transition:enter-end="scale-100 static"
                                 class="h-6 w-6 text-amber-400"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                        <!-- Monochrome Mode Toggle -->
                        <button @click="$store.global.isMonochromeModeEnabled = !$store.global.isMonochromeModeEnabled" class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <i class="fa-solid fa-palette bg-gradient-to-r from-sky-400 to-blue-600 bg-clip-text text-lg font-semibold text-transparent"></i>
                        </button>
                        <!-- Profile -->
                        <div x-data="usePopper({placement:'right-end',offset:12})" @click.outside="isShowPopper && (isShowPopper = false)" class="flex">
                            <button @click="isShowPopper = !isShowPopper" x-ref="popperRef" class="avatar h-12 w-12">
                                <img class="rounded-full" src="<?= $assetUser['PHOTO'] ?>" alt="avatar"/>
                            </button>

                            <div :class="isShowPopper && 'show'" class="popper-root fixed" x-ref="popperRoot">
                                <div class="popper-box w-64 rounded-lg border border-slate-150 bg-white shadow-soft dark:border-navy-600 dark:bg-navy-700">
                                    <div class="flex items-center space-x-4 rounded-t-lg bg-slate-100 py-5 px-4 dark:bg-navy-800">
                                        <div class="avatar h-14 w-14">
                                            <img class="rounded-full" src="<?= $assetUser['PHOTO'] ?>" alt="avatar"/>
                                        </div>
                                        <div>
                                            <a href="/users/" class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                                <?= $USER->GetFormattedName() ?>
                                            </a>
                                            <p class="text-xs text-slate-400 dark:text-navy-300">
                                                <?= $assetUser['WORK_POSITION'] ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="flex flex-col pt-2 pb-5">
                                        <a href="/profile/" class="group flex items-center space-x-3 py-2 px-4 tracking-wide outline-none transition-all hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                            <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-warning text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                                </svg>
                                            </div>

                                            <div>
                                                <h2 class="font-medium text-slate-700 transition-colors group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                                    Профиль
                                                </h2>
                                                <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                                    Личный кабинет пользователя
                                                </div>
                                            </div>
                                        </a>
                                        <div class="mt-3 px-4">
                                            <a href="" class="btn h-9 w-full space-x-2 bg-primary text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                                </svg>
                                                <span>Выйти</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div x-show="$store.breakpoints.isXs && $store.global.isSearchbarActive" x-transition:enter="easy-out transition-all" x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="easy-in transition-all" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="fixed inset-0 z-[100] flex flex-col bg-white dark:bg-navy-700 sm:hidden">
            <div class="flex items-center space-x-2 bg-slate-100 px-3 pt-2 dark:bg-navy-800">
                <button class="btn -ml-1.5 h-7 w-7 shrink-0 rounded-full p-0 text-slate-600 hover:bg-slate-300/20 active:bg-slate-300/25 dark:text-navy-100 dark:hover:bg-navy-300/20 dark:active:bg-navy-300/25" @click="$store.global.isSearchbarActive = false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <input x-effect="$store.global.isSearchbarActive && $nextTick(() => $el.focus() );" class="form-input h-8 w-full bg-transparent placeholder-slate-400 dark:placeholder-navy-300" type="text" placeholder="Search here...111"/>
            </div>
        </div>
        <main class="main-content w-full px-[var(--margin-x)] pb-8">
            <?$APPLICATION->ShowPanel();?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "companyBook",
                array(
                    "PATH" => "",
                    "SITE_ID" => SITE_ID,
                    "START_FROM" => "0",
                    "COMPONENT_TEMPLATE" => "companyBook"
                ),
                false
            );?>
            <?php elseif(!$USER->IsAuthorized()): ?>
            <main class="grid w-full grow grid-cols-1 place-items-center">
                <?if($APPLICATION->GetCurPage(false) != "/auth/"){
                    LocalRedirect('/auth/');
                }?>
                <?php endif; ?>


