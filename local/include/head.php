<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
use Bitrix\Main\Page\Asset;

IncludeTemplateLangFile(__FILE__);

$index = ($APPLICATION->GetCurPage(false) === '/')
?>
<title><? $APPLICATION->ShowTitle() ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<base href="/">

<title><? $APPLICATION->ShowTitle() ?></title>


<link rel="apple-touch-icon" sizes="57x57" href="/local/assets/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/local/assets/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/local/assets/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/local/assets/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/local/assets/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/local/assets/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/local/assets/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/local/assets/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/local/assets/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/local/assets/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/local/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/local/assets/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/local/assets/favicon/favicon-16x16.png">


<? Asset::getInstance()->addJs('https://code.jquery.com/jquery-3.3.1.min.js'); ?>
<!-- <? Asset::getInstance()->addJs('/local/assets/js/owl.carousel.js'); ?> -->
<? Asset::getInstance()->addJs('/local/assets/js/mc-validate.js'); ?>
<? Asset::getInstance()->addJs('/local/assets/js/jquery.maskedinput.min.js'); ?>
<!-- <? Asset::getInstance()->addJs('/local/assets/js/app.js'); ?> -->



<? $APPLICATION->ShowHead(); ?>

<link rel="stylesheet" type="text/css" href="/local/assets/common.css"/>
<link rel="stylesheet" type="text/css" href="/local/assets/css/reset.css">
<link rel='stylesheet' href='/local/assets/css/owl.carousel.min.css'/>
<link rel="stylesheet" type="text/css" href="/local/assets/css/flexboxgrid.min.css"/>
<link rel="stylesheet" type="text/css" href="/local/assets/css/app.css"/>


<!--[if lte IE 6]>
<style type="text/css">

    #support-question {
        background-image: none;
        filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/question.png', sizingMethod='crop');
    }

    #support-question {
        left: -9px;
    }

    #banner-overlay {
        background-image: none;
        filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='./images/overlay.png', sizingMethod='crop');
    }

</style>
<![endif]-->