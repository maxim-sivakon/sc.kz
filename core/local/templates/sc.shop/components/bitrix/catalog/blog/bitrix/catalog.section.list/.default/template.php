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

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
?>

<section data-code="desc-blog" data-margin="true">
    <div class="container mx-auto">
        <div id="blog-header-items">
            <div class="blog-header-item">
                <h1>
                    <?
                    echo (
                    isset($arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]) && $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != ""
                        ? $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]
                        : $arResult['SECTION']['NAME']
                    );
                    ?>
                </h1>
            </div>
            <div class="blog-header-item">
                <select id="blog-sections-list" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-800 focus:border-green-800 block w-full p-2.5">
                    <option selected>Не выбрано</option>
                    <?php foreach ($arResult['SECTIONS'] as &$arSection) {?>
                        <option value="<?= $arSection['SECTION_PAGE_URL']; ?>"><?= $arSection['NAME']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</section>
