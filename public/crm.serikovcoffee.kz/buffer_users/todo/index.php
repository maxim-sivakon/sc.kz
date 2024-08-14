<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/about/calendar.php");
$APPLICATION->SetTitle("Действия");
global $USER;

if(!in_array(20, $USER->GetUserGroupArray())){
    $APPLICATION->SetTitle("Внимание! У вас нет прав для работы в текущем разделе!");
    ?>
    <div class="ui-alert ui-alert-danger">
        <span class="ui-alert-message"><strong>Внимание!</strong> У вас нет прав для работы в текущем разделе!</span>
    </div>
<?}
?>
<script>
    BX.UI.Dialogs.MessageBox.show(
        {
            message: `
      <label class="ui-ctl ui-ctl-checkbox">
         <input type="checkbox" class="ui-ctl-element">
            <div class="ui-ctl-label-text">удалить настройки и данные приложения</div>
      </label>
   `,
            title: "Вы уверены, что хотите удалить приложение?",
            buttons: [
                new BX.UI.Button(
                    {
                        color: BX.UI.Button.Color.DANGER,
                        text: "Удалить",
                        onclick: function(button, event) {
                            button.context.close();
                        }
                    }
                ),
                new BX.UI.CancelButton()
            ],
        }
    );
</script>
<script>
    BX.UI.Dialogs.MessageBox.show({
        message: "Текст, поясняющий назначение данного попапа, находится здесь.",
        buttons: BX.UI.Dialogs.MessageBoxButtons.OK_CANCEL,
        popupOptions: {
            bindElement: BX("yesnocancel"),
            offsetLeft: 20,
            closeIcon: true,
            events: {
                onPopupClose: function() {
                    BX.UI.Dialogs.MessageBox.alert("Попап закрыт.");
                }
            }
        }
    });
</script>
<? var_dump($_GET);?>
<form action="/buffer_users/todo/">
    <div>
        Имя <input name="name">

        Фамилия <input name="last_name">
    </div>

    <?$APPLICATION->IncludeComponent('bitrix:ui.button.panel', '', [
        'BUTTONS' => ['save', 'cancel' => '/company/list/']
    ]);?>
</form>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
