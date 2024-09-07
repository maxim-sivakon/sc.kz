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
$random["PC"] = random_bytes(6);
$random["MOBILE"] = random_bytes(6);
?>

<section data-code="banner">
    <div data-info="computer" class="container mx-auto relative">
        <div class="swiper main-banner-pc-<?= $random["PC"] ?>">
            <div class="swiper-wrapper">
                <?php foreach($arResult["ITEMS"] as $arItem){
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => "DELETE"));
                    ?>
                    <a id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem["LINK"]?>" class="swiper-slide">
                        <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?= $arItem["NAME"]?>">
                    </a>
                <?php } ?>
            </div>
            <div class="swiper-pagination-<?= $random["PC"] ?>"></div>
        </div>
        <div class="btn-swp-next-rand-<?= $random["PC"] ?> swiper-button-next">
            <svg width="26" height="28" viewBox="0 0 26 28" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.86981 28C1.14702 27.7088 0.505509 27.2473 7.42218e-07 26.6551C1.51023 24.0466 17.792 15.0054 19.82 12.6075C17.2663 11.4605 14.7889 10.1512 12.4031 8.68755C11.1901 7.82602 10.4182 7.33304 9.52646 6.11734C8.76894 5.12659 5.54712 3.56255 4.58824 2.27027L4.58824 -9.35938e-07C7.70939 0.588707 10.2744 4.02096 12.9305 5.06436C13.2133 5.72965 13.9661 6.06469 14.4167 6.71562C17.9454 9.03694 23.459 9.62086 26 12.8181C25.463 14.1678 23.9144 15.1442 22.5864 16.1684C20.6686 17.5947 6.44367 26.5833 3.88826 27.6841C3.01568 27.7655 2.1383 27.7942 1.86981 28Z"/>
            </svg>
        </div>
        <div class="btn-swp-prev-rand-<?= $random["PC"] ?> swiper-button-prev">
            <svg width="26" height="28" viewBox="0 0 26 28" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.1302 8.52601e-07C24.853 0.291222 25.4945 0.752652 26 1.34493C24.4898 3.95343 8.208 12.9946 6.17997 15.3925C8.73371 16.5395 11.2111 17.8488 13.5969 19.3125C14.8099 20.174 15.5818 20.667 16.4735 21.8827C17.2311 22.8734 20.4529 24.4374 21.4118 25.7297L21.4118 28C18.2906 27.4113 15.7256 23.979 13.0695 22.9356C12.7867 22.2703 12.0339 21.9353 11.5833 21.2844C8.05458 18.9631 2.54103 18.3791 -5.60304e-07 15.1819C0.536971 13.8322 2.08557 12.8558 3.41361 11.8316C5.33137 10.4053 19.5563 1.41673 22.1117 0.315894C22.9843 0.234528 23.8617 0.205808 24.1302 8.52601e-07Z"/>
            </svg>
        </div>
        <script>
            var swiper_randNum = new Swiper(".main-banner-pc-<?= $random["PC"] ?>", {
                autoplay: {
                    delay: 5000,
                },
                navigation: {
                    nextEl: ".btn-swp-next-rand-<?= $random["PC"] ?>",
                    prevEl: ".btn-swp-prev-rand-<?= $random["PC"] ?>",
                },
                pagination: {
                    el: ".swiper-pagination-<?= $random["PC"] ?>",
                    clickable: true,
                },
                mousewheel: false,
                rewind: true,
            });
        </script>
    </div>
    <div data-info="mobile" class="container mx-auto relative">
        <div class="swiper main-banner-mb-<?= $random["MOBILE"] ?>">
            <div class="swiper-wrapper">
                <?php foreach($arResult["ITEMS"] as $arItem){
                    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => "DELETE"));
                    ?>
                    <a id="<?=$this->GetEditAreaId($arItem['ID']);?>" href="<?=$arItem["LINK"]?>" class="swiper-slide">
                        <img src="<?= $arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?= $arItem["NAME"]?>">
                    </a>
                <?php } ?>
            </div>
            <div class="swiper-pagination-<?= $random["MOBILE"] ?>"></div>
        </div>
        <div class="swiper-button-next-<?= $random["MOBILE"] ?>">
            <svg width="26" height="28" viewBox="0 0 26 28" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.86981 28C1.14702 27.7088 0.505509 27.2473 7.42218e-07 26.6551C1.51023 24.0466 17.792 15.0054 19.82 12.6075C17.2663 11.4605 14.7889 10.1512 12.4031 8.68755C11.1901 7.82602 10.4182 7.33304 9.52646 6.11734C8.76894 5.12659 5.54712 3.56255 4.58824 2.27027L4.58824 -9.35938e-07C7.70939 0.588707 10.2744 4.02096 12.9305 5.06436C13.2133 5.72965 13.9661 6.06469 14.4167 6.71562C17.9454 9.03694 23.459 9.62086 26 12.8181C25.463 14.1678 23.9144 15.1442 22.5864 16.1684C20.6686 17.5947 6.44367 26.5833 3.88826 27.6841C3.01568 27.7655 2.1383 27.7942 1.86981 28Z"/>
            </svg>
        </div>
        <div class="swiper-button-prev-<?= $random["MOBILE"] ?>">
            <svg width="26" height="28" viewBox="0 0 26 28" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.1302 8.52601e-07C24.853 0.291222 25.4945 0.752652 26 1.34493C24.4898 3.95343 8.208 12.9946 6.17997 15.3925C8.73371 16.5395 11.2111 17.8488 13.5969 19.3125C14.8099 20.174 15.5818 20.667 16.4735 21.8827C17.2311 22.8734 20.4529 24.4374 21.4118 25.7297L21.4118 28C18.2906 27.4113 15.7256 23.979 13.0695 22.9356C12.7867 22.2703 12.0339 21.9353 11.5833 21.2844C8.05458 18.9631 2.54103 18.3791 -5.60304e-07 15.1819C0.536971 13.8322 2.08557 12.8558 3.41361 11.8316C5.33137 10.4053 19.5563 1.41673 22.1117 0.315894C22.9843 0.234528 23.8617 0.205808 24.1302 8.52601e-07Z"/>
            </svg>
        </div>
        <script>
            var swiper_randNumT = new Swiper(".main-banner-mb-<?= $random["MOBILE"] ?>", {
                autoplay: {
                    delay: 5000,
                },
                navigation: {
                    nextEl: ".swiper-button-next-<?= $random["MOBILE"] ?>",
                    prevEl: ".swiper-button-prev-<?= $random["MOBILE"] ?>",
                },
                pagination: {
                    el: ".swiper-pagination-<?= $random["MOBILE"] ?>",
                    clickable: true,
                },
                mousewheel: false,
                rewind: true,
            });
        </script>
    </div>
</section>

