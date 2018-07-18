<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><div class="toggles">
	<?$i=0?>
	<?foreach ($arResult['ITEMS'] as $key=>$val):?>
		<?$i++;?>
		<div class="toggle">
			<div class="toggle_head">
				<div class="title">
					<h4><?=$val['NAME']?></h4>
				</div>
				<div class="toggle_btn"></div>
			</div>
			<div class="toggle_body">
				<div class="toggle_body_text text">
					<?=$val['PREVIEW_TEXT']?>
					<?=$val['DETAIL_TEXT']?>
					<button class="btn btn-blue" data-title="<?=$val['NAME']?>"
						 id="openNewHire"><?=GetMessage('VCN_BTN')?></button>
					<p class="text_info_btn">
						<?=GetMessage('VCN_TO_EMAIL')?> 
						<a href="#">hr@russianit.ru</a>
					</p>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>