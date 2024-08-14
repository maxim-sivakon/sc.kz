<?php
use \Bitrix\Main\Loader,
    \Bitrix\Main\UI\PageNavigation;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История");

Loader::includeModule('crm');

$gridOptions = new Bitrix\Main\Grid\Options(55 . '_grid');
$sort = $gridOptions->GetSorting(['sort' => ['CREATED' => 'DESC'], 'vars' => ['by' => 'by', 'order' => 'order']]);
$nav_params = $gridOptions->GetNavParams();
$nav = new PageNavigation(55 . '_nav');
$nav->setPageSize(20)
    ->initFromUri();

$users = 1;
$filterSettings = 1;
$filterTimeline = 1;

$rows = [];
$columns = [
    ['id' => 'CREATED', 'name' => 'Дата контакта', 'sort' => 'CREATED', 'default' => true],
    ['id' => 'COMPANY_NAME', 'name' => 'Компания', 'sort' => 'COMPANY_NAME', 'default' => true],
    ['id' => 'COMPANY_ID', 'name' => 'ID Компании', 'sort' => 'COMPANY_ID', 'default' => true],
    ['id' => 'UF_CRM_1635934318396', 'name' => 'Код GAI', 'sort' => false, 'default' => true],
    ['id' => 'UF_CRM_1632047349', 'name' => 'Город', 'sort' => false, 'default' => true],
    ['id' => 'ASSIGNED_BY_ID', 'name' => 'Ответственный', 'sort' => false, 'default' => true],
    ['id' => 'CONTACTS', 'name' => 'Контакт', 'sort' => 'CONTACTS', 'default' => true],
    ['id' => 'DEAL', 'name' => 'Сделка', 'sort' => 'DEAL', 'default' => true],
    ['id' => 'TYPE', 'name' => 'Тип контакта', 'sort' => 'TYPE', 'default' => true],
    ['id' => 'COMMENT', 'name' => 'Описание', 'sort' => 'COMMENT', 'default' => true],
    ['id' => 'AUTHOR_ID', 'name' => 'Менеджер', 'sort' => 'AUTHOR_ID', 'default' => true],
];

//$rows = History::getList($filterTimeline, $nav, $users);
?>
<style>
    .main-ui-filter-theme-default{
        border: 1px solid lightgray;
        margin-left: 10px;
    }
</style>
<div id="uiToolbarContainer" class="ui-toolbar">
    <div class="ui-toolbar-filter-box">
        <?$APPLICATION->IncludeComponent('bitrix:main.ui.filter', '', [
            'FILTER_ID' => 66 . '_filter',
            'GRID_ID' => 66 . '_grid',
            'FILTER' => $filterSettings,
            'ENABLE_LIVE_SEARCH' => true,
            'ENABLE_LABEL' => true
        ]);?>
    </div>
</div>

<?$APPLICATION->IncludeComponent(
    'bitrix:main.ui.grid',
    '',
    [
        'GRID_ID' => 66 . '_grid',
        'COLUMNS' => $columns,
        'ROWS' => $rows,
        'SHOW_ROW_CHECKBOXES' => false,
        'NAV_OBJECT' => $nav,
        'AJAX_MODE' => 'Y',
        'AJAX_ID' => \CAjax::getComponentID('bitrix:main.ui.grid', '.default', ''),
        'PAGE_SIZES' => [
            ['NAME' => '20', 'VALUE' => '20'],
            ['NAME' => '50', 'VALUE' => '50'],
            ['NAME' => '100', 'VALUE' => '100'],
            ['NAME' => '200', 'VALUE' => '200']
        ],
        'AJAX_OPTION_JUMP'          => 'N',
        'SHOW_CHECK_ALL_CHECKBOXES' => true,
        'SHOW_ROW_ACTIONS_MENU'     => true,
        'SHOW_GRID_SETTINGS_MENU'   => true,
        'SHOW_NAVIGATION_PANEL'     => true,
        'SHOW_PAGINATION'           => true,
        'SHOW_SELECTED_COUNTER'     => true,
        'SHOW_TOTAL_COUNTER'        => true,
        'SHOW_PAGESIZE'             => true,
        'SHOW_ACTION_PANEL'         => true,
        'ACTION_PANEL'              => true,
        'ALLOW_COLUMNS_SORT'        => true,
        'ALLOW_COLUMNS_RESIZE'      => true,
        'ALLOW_HORIZONTAL_SCROLL'   => true,
        'ALLOW_SORT'                => true,
        'ALLOW_PIN_HEADER'          => true,
        'AJAX_OPTION_HISTORY'       => 'N',
        //'ENABLE_NEXT_PAGE' => true,
    ]
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
