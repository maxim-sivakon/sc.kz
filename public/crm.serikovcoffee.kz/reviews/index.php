<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/about/calendar.php");
$APPLICATION->SetTitle("Отзывы с интернет-магазина");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:calendar.grid",
    "",
    Array(
        "CALENDAR_TYPE" => "location"
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
