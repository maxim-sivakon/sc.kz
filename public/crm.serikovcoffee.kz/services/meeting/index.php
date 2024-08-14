<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Планерки и собрания");?>
<?
$APPLICATION->IncludeComponent("bitrix:meetings", ".default", array(
	"RESERVE_MEETING_IBLOCK_TYPE" => "events",
	"RESERVE_MEETING_IBLOCK_ID" => "0",
	"RESERVE_VMEETING_IBLOCK_TYPE" => "events",
	"RESERVE_VMEETING_IBLOCK_ID" => "0",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/services/meeting/",
	"SEF_URL_TEMPLATES" => array(
		"list" => "",
		"meeting" => "meeting/#MEETING_ID#/",
		"meeting_edit" => "meeting/#MEETING_ID#/edit/",
		"meeting_copy" => "meeting/#MEETING_ID#/copy/",
		"item" => "item/#ITEM_ID#/",
	)
	),
	false
);

?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>