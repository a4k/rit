<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
IncludeTemplateLangFile(__FILE__);
?>

<div class="text_center">
	<div class="event_date">
		<?
			if(isset($arResult['ACTIVE_FROM'])) {
				$time = $arResult['ACTIVE_FROM'];
			} else {
				$time = $arResult['TIMESTAMP_X'];
			}
		    $site_format = CSite::GetDateFormat(); // DD.MM.YYYY HH:MI:SS
			// преобразуем дату в Unix формат
		    if ($stmp = MakeTimeStamp($time, $site_format))
		    {
		        // выведем дату активности выбранного элемента в произвольном виде
		        echo FormatDate("d F Y", $stmp); // 28 January 2005
		    }
		?>
	</div>
</div>
<div class="text">
	<?echo $arResult["DETAIL_TEXT"];?>
</div>
<div class="hr"></div>
<div class="text event_social">
	<p><span class="text_bold"><?echo GetMessage('T_EVENT_SOCIAL_TITLE')?></span>
		<a href="https://vk.com/share.php?url=<?echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];?>" target="_blank"><?echo GetMessage('T_EVENT_SOCIAL_VK')?></a>
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];?>" target="_blank"><?echo GetMessage('T_EVENT_SOCIAL_FB')?></a>
		<a href="http://twitter.com/share?text=Link&url=<?echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];?>" target="_blank"><?echo GetMessage('T_EVENT_SOCIAL_TW')?></a>
	</p>
</div>