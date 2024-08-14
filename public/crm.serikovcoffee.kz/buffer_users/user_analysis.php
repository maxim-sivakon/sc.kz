<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Анализ ");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:calendar.grid",
    "",
    Array(
        "CALENDAR_TYPE" => "location"
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
