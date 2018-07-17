<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
use Bitrix\Main\Page\Asset;

IncludeTemplateLangFile(__FILE__);

$index = ($APPLICATION->GetCurPage(false) === '/')
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <? $APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/head.php"
        )
    ); ?>

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
            <? if ($APPLICATION->GetCurPage(false) == SITE_DIR): ?>
            <? else: ?>
                <? if ($APPLICATION->GetProperty("hide_title") !== "Y"): ?>

                    <div class="header header_breadcrumb">
                        <div class="container">
                            <div class="menu row between-xs middle-xs">
                                <div class="logo_area col-xs-12 col-md center-xs start-md">
                                    <a href="/">
                                        <div class="logo">
                                        </div>
                                    </a>
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

                    <div class="title">
                        <h2><? $APPLICATION->ShowTitle(false); ?></h2>
                    </div>
                <? endif ?>
            <? endif ?>






