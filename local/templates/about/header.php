<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
use Bitrix\Main\Page\Asset;

IncludeTemplateLangFile(__FILE__);

$index = ($APPLICATION->GetCurPage(false) === '/')
?>
<!DOCTYPE html>
<html lang="ru">
<head>

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
    <? Asset::getInstance()->addJs('/local/assets/js/owl.carousel.js'); ?>
    <? Asset::getInstance()->addJs('/local/assets/js/mc-validate.js'); ?>
    <? Asset::getInstance()->addJs('/local/assets/js/app.js'); ?>



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


</head>
<body>
<div id="page" class="<?= $index ? 'index' : 'inner' ?> <? $APPLICATION->ShowProperty("css") ?>">

    <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
    <div class="main_container" id="<? $APPLICATION->ShowProperty("id") ?>">
        <div class="header-fantom header_main"></div>
        <header class="header header_main h-top">
            <div class="container">
                <div class="menu row between-xs middle-xs">
                    <div class="logo_area col-xs">
                        <a href="/">
                            <div class="logo">
                                <!-- <img src="images/logo.png" class="holder_image"> -->
                            </div>
                        </a>
                    </div>
                    <a href="#" class="menu_mobile"><span class="icon_line"></span><span class="icon_line"></span><span
                                class="icon_line"></span></a>
                    <nav class="menu_top col-xs end-xs">
                        <div class="hidden-bm close"></div>
                        <? $APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        ); ?>
                    </nav>
                </div>
            </div>
        </header>

        <div id="content">

                    <div class="header header_breadcrumb">
                        <div class="container">
                            <div class="menu row between-xs middle-xs">
                                <div class="col-xs-12 col-md center-xs start-md">

                                </div>
                                <div class="breadcrumbs col-xs-12 col-md-12 center-xs"
                                     itemprop="http://schema.org/breadcrumb" itemscope
                                     itemtype="http://schema.org/BreadcrumbList">
                                    <? $APPLICATION->IncludeComponent(
	"bitrix:breadcrumb", 
	".default", 
	array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "s1",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
); ?>
                                </div>
                                <div class="col-xs"></div>
                            </div>
                        </div>
                    </div>

                    <section class="menu_b">
                        <nav class="menu_top">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "about", Array(
                                "ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
                                "MENU_CACHE_TYPE" => "Y",	// Тип кеширования
                                "MENU_CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                "COMPONENT_TEMPLATE" => "anchor",
                                "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            ),
                                false
                            );?>


                        </nav>

                    </section>







