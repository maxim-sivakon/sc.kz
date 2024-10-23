<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<section class="container mx-auto breadcrumb" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';
$strReturn .= '<nav class="flex my-4" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" aria-label="Breadcrumb">';
$strReturn .= '<ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++) {
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1) {
				$strReturn .= '<li>
                    <div class="flex items-center">
                        <a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" class="ms-1 text-sm font-medium text-gray-700 hover:text-green-800 md:ms-2">'.$title.'</a>
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 9 4-4-4-4"/>
                        </svg>
                    </div>
                </li>';
	} else {
		$strReturn .= '<li aria-current="page">
                    <div class="flex items-center">
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">'.$title.'</span>
                    </div>
                </li>';
	}
}

$strReturn .= '</ol>';
$strReturn .= '</nav>';
$strReturn .= '</section>';

return $strReturn;
?>

