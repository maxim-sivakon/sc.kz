<?php
$arUrlRewrite = [
    2 =>
        [
            "CONDITION" => "#^/catalog/#",
            'RULE' => '',
            'ID'        => 'bitrix:catalog',
            'PATH'      => '/catalog/index.php',
            'SORT'      => 100,
        ],
    1 =>
        [
            'CONDITION' => '#^/rest/#',
            'RULE'      => '',
            'ID'        => null,
            'PATH'      => '/bitrix/services/rest/index.php',
            'SORT'      => 100,
        ],
    3 =>
        [
            "CONDITION" => "#^/blog/#",
            'RULE' => '',
            'ID'        => 'bitrix:catalog',
            'PATH'      => '/blog/index.php',
            'SORT'      => 100,
        ],
];
