<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<?if (!empty($arResult)):?>
		<?foreach($arResult as $arItem):?>
			<? if($arItem['ITEM_INDEX'] == 0) { ?>
				<h4>
					<a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
				</h4>
			<? } else { ?>
				<a href="<?=$arItem["LINK"]?>" class="link"><?=$arItem["TEXT"]?></a>
			<? } ?>
		<?endforeach?>
	<?endif?>
