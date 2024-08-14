<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle('Выгрузка пользователей');
?>

<?/*$APPLICATION->IncludeComponent(
	"bitrix:calendar.grid",
	"",
	Array(
		"CALENDAR_TYPE" => "company_calendar",
		"ALLOW_SUPERPOSE" => "Y",
		"ALLOW_RES_MEETING" => "Y"
	)
);*/

\Bitrix\Main\UI\Extension::load("ui.tooltip");

?>

<p>Тут будет механика - для выгрузки всех пользователей 3х компаний. </p>
<ol>
    <li>Страница списком всех буферных пользователей. - в себе будет содержать краткую инфо уникальных пользователей. Условие будет обычное - наличие контактных данных и бонусов. Если не будет ФИО либо почты(телефон - попробую сделать как логин) либо бонусов то, пользователь не попадёт в основной список</li>
    <li>Бу</li>
</ol>
<a href="/company/personal/user/1/" bx-tooltip-user-id="1" bx-tooltip-classname="intranet-user-selector-tooltip">Константин Константинопольский</a>

<form action="/company/detail/1/">
    <div>
        Имя <input name="name">

        Фамилия <input name="last_name">
    </div>

    <?$APPLICATION->IncludeComponent('bitrix:ui.button.panel', '', [
        'BUTTONS' => ['save', 'cancel' => '/company/list/']
    ]);?>
</form>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
