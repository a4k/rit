<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История версий");
CModule::IncludeModule("iblock");
?>
<?
$id = 0;
// Получаем id события
if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
} else if(isset($_REQUEST['ID'])) {
	$id = $_REQUEST['ID'];
}
// Получаем название события
if(isset($id) or $id == 0) {
	// $arFilter = Array("IBLOCK"=>"8"); 
	// $rs = CIBlockElement::GetList (
	//    Array("RAND" => "ASC"),
	//    Array("IBLOCK_ID" => "8"),
	//    false,
	//    Array ("nTopCount" => 1)
	// );
	$res = CIBlockElement::GetList(Array("SORT" => "ASC", "timestamp_x" => "DESC"), Array("IBLOCK_ID"=>"8"), false, Array());
	if($obj = $res->GetNext()) {
		// Последний элемент
		$id = $obj['ID'];
	}
} else {
	$res = CIBlockElement::GetByID($id); 
	if($ar_res = $res->GetNext())
	$title = $ar_res['NAME']; 
	$short_title = TruncateText($title, 35); 
}
?>
<div id="history" class="pau">
	<div class="header header_breadcrumb">
		<div class="container">
			<div class="menu row between-xs middle-xs">
				<div class="logo_area col-xs-12 col-md center-xs start-md">
					<a href="/">
						<div class="logo" style="background: url(/upload/images/item/prod1.png) no-repeat left center;background-size: contain">
							<!-- <img src="images/logo.png" class="holder_image"> -->
						</div>
					</a>
				</div>
				<div class="breadcrumbs col-xs-12 col-md-10 center-xs">
					<a href="/">Главная</a> 
					/
					<a href="/products/pau">Помощник арбитражного управляющего</a>
					/
					<span>История версий</span>
				</div>
				
				<div class="col-xs"></div>
			</div>
		</div>
	</div>
	
	<section class="history">
		<div class="container">
			<div class="s_container">
				<?echo $id; ?>
				<?if($id != 0) { ?>
<?$APPLICATION->IncludeComponent(
						"bitrix:news.list", 
						"template1", 
						array(
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"IBLOCK_TYPE" => "news",
							"IBLOCK_ID" => "8",
							"NEWS_COUNT" => "1",
							"DETAIL_URL" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"ACTIVE_DATE_FORMAT" => "j F Y",
							"CACHE_TYPE" => "N",
							"CACHE_TIME" => "3600",
							"COMPONENT_TEMPLATE" => "template1",
							"SORT_BY1" => "TIMESTAMP_X",
							"SORT_ORDER1" => "DESC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => array(
								0 => "",
								1 => "",
							),
							"PROPERTY_CODE" => array(
								0 => "",
								1 => "",
							),
							"CHECK_DATES" => "Y",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"SET_TITLE" => "Y",
							"SET_BROWSER_TITLE" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_META_DESCRIPTION" => "Y",
							"SET_LAST_MODIFIED" => "N",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "Y",
							"STRICT_SECTION_CHECK" => "N",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"PAGER_TEMPLATE" => ".default",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"SET_STATUS_404" => "N",
							"SHOW_404" => "N",
							"MESSAGE_404" => ""
						),
						false
					);?>
<? } ?>
			</div>
		</div>
	</section>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>