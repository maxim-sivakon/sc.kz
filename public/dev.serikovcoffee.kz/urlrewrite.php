<?php
$arUrlRewrite = [
    1 =>
        [
            'CONDITION' => '#^/rest/#',
            'RULE'      => '',
            'ID'        => null,
            'PATH'      => '/bitrix/services/rest/index.php',
            'SORT'      => 100,
        ],
    2 =>
        [
            'CONDITION' => '#^/catalog/#',
            'RULE'      => '',
            'ID'        => 'bitrix:catalog',
            'PATH'      => '/catalog/index.php',
            'SORT'      => 100,
        ],
];
