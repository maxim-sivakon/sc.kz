<?php
/**
 * @global $APPLICATION
 * @global $USER
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\{Page\Asset, Context, Application};
?>

<!doctype html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php
    $APPLICATION->ShowHead();

    $APPLICATION->AddHeadString('<meta name="robots" content="noindex"/>');
    $APPLICATION->AddHeadString('<meta charset="UTF-8">');
    $APPLICATION->AddHeadString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');
    $APPLICATION->AddHeadString('<meta http-equiv="X-UA-Compatible" content="ie=edge">');

    $APPLICATION->SetPageProperty("TITLE", $APPLICATION->GetPageProperty("title"));
    $APPLICATION->SetPageProperty("keywords", $APPLICATION->GetPageProperty("keywords"));
    $APPLICATION->SetPageProperty("description", $APPLICATION->GetPageProperty("description"));

    /* CSS */
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/app.css");

    /* JS */
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/assets/js/app.js");

    ?>

</head>
<?php $APPLICATION->ShowPanel() ?>
