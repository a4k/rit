<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
CModule::IncludeModule("iblock");
?>
<?
$id = 0;
// Получаем id события
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
} else if (isset($_REQUEST['ID'])) {
    $id = $_REQUEST['ID'];
}
// Получаем название события
$res = CIBlockElement::GetByID($id);
if ($ar_res = $res->GetNext())
    $title = $ar_res['NAME'];
$short_title = TruncateText($title, 35);
$APPLICATION->SetTitle($title);
?>

    <div id="event" class="pau">
    <div class="header header_breadcrumb">
        <div class="container">
            <div class="menu row between-xs middle-xs">
                <div class="logo_area col-xs-12 col-md center-xs start-md">
                    <a href="/">
                        <div class="logo"
                             style="background: url(/upload/images/item/prod1.png) no-repeat left center;background-size: contain">
                            <!-- <img src="images/logo.png" class="holder_image"> -->
                        </div>
                    </a>
                </div>
                <div class="breadcrumbs col-xs-12 col-md-10 center-xs">
                    <a href="/">Главная</a>
                    /
                    <a href="/products/pau">Помощник арбитражного управляющего</a>
                    /
                    <a href="/products/pau/events">События</a>
                    /
                    <span class="title_breadcrumb">
						<?
                        echo $short_title;
                        ?>
					</span>
                </div>

                <div class="col-xs"></div>
            </div>
        </div>
    </div>

    <section class="event">
    <div class="container">
    <div class="s_container">
<? if (isset($id)) { ?>
<? } ?>
<?
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "event",
    array(
        "IBLOCK_TYPE" => "pau",
        "IBLOCK_ID" => "7",
        "ELEMENT_ID" => "",
        "SET_TITLE" => "Y",
        "SET_CANONICAL_URL" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "BROWSER_TITLE" => "-",
        "COMPONENT_TEMPLATE" => "event",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600",
        "ELEMENT_CODE" => "",
        "CHECK_DATES" => "Y",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "IBLOCK_URL" => "",
        "DETAIL_URL" => "",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "CACHE_GROUPS" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "META_KEYWORDS" => "-",
        "SET_META_DESCRIPTION" => "Y",
        "META_DESCRIPTION" => "-",
        "SET_LAST_MODIFIED" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "USE_PERMISSIONS" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "USE_SHARE" => "N",
        "PAGER_TEMPLATE" => ".default",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Страница",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "SET_STATUS_404" => "N",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "FILE_404" => ""
    ),
    false
); ?>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>