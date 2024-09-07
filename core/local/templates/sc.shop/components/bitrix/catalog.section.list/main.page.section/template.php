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

$idSectionLevelOne = 0;
$resSection = [];
foreach ($arResult[ 'SECTIONS' ] as &$arSection) {


    if ($arSection[ 'DEPTH_LEVEL' ] == 1) {
        $idSectionLevelOne = $arSection[ 'ID' ];
        $resSection[ $arSection[ 'ID' ] ][ 'ID' ] = $arSection[ 'ID' ];
        $resSection[ $arSection[ 'ID' ] ][ 'NAME' ] = $arSection[ 'NAME' ];
        $resSection[ $arSection[ 'ID' ] ][ 'URL' ] = $arSection[ 'SECTION_PAGE_URL' ];
        $resSection[ $arSection[ 'ID' ] ][ 'SECTIONS' ] = [];
    }

    if ($arSection[ 'DEPTH_LEVEL' ] == 2) {
        $resSection[ $idSectionLevelOne ][ 'SECTIONS' ][] = [
            'ID'   => $arSection[ 'ID' ],
            'NAME' => $arSection[ 'NAME' ],
            'URL'  => $arSection[ 'SECTION_PAGE_URL' ],
        ];
    }
}

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>

<section data-margin="true" data-code="category">
    <div class="container mx-auto">
        <h3>Категории товаров</h3>
        <div class="swiper category-slide">
            <div class="swiper-wrapper">
                <?php foreach ($resSection as $section){
                    $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                    $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                    ?>
                        <?php if(count($section['SECTIONS']) >= 1){?>
                            <a class="swiper-slide">
                                <div id="<?= $this->GetEditAreaId($section['ID']); ?>" class="category-slide-item" data-id="<?= $section['ID'] ?>"><?= $section['NAME'] ?></div>
                            </a>
                        <?php }else{?>
                            <a href="<?= $section['URL'] ?>" class="swiper-slide">
                                <div id="<?= $this->GetEditAreaId($section['ID']); ?>" class="category-slide-item" data-id="<?= $section['ID'] ?>"><?= $section['NAME'] ?></div>
                            </a>
                        <?php }?>
                <?php }?>
            </div>
        </div>
        <script>
            var swiper_randNumCategory = new Swiper(".category-slide", {
                navigation: false,
                pagination: false,
                mousewheel: true,
                rewind: true,
                freeMode: true,
                slidesPerView: 'auto',
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 40
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    }
                }
            });
        </script>

        <div id="main-category-two-level">
            <?php foreach ($resSection as $section){?>

                    <ul class="category-slide-item-menu" data-id="<?= $section['ID'] ?>">
                        <?php foreach ($section['SECTIONS'] as $sectionTwo){
                            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams); ?>
                            <li><a id="<?= $this->GetEditAreaId($sectionTwo['ID']); ?>" href="<?= $sectionTwo['URL']?>"><?= $sectionTwo['NAME']?></a></li>
                        <?php }?>
                    </ul>

            <?php }?>
        </div>
    </div>
</section>
