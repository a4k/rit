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
?>

<?
// Классы для работы с слайдером
$INNER = $arParams['CLASS_INNER'];
$WRAPPER = $arParams['CLASS_WRAPPER']; 
$ITEM = $arParams['CLASS_ITEM']; // класс элемента
$SLIDER_ID = $arParams['SLIDER_ID']; // id слайдера
$DATA_VIEW = $arParams['DATA_VIEW']; // количество элементов на экране
if(!isset($ITEM)) {
    $ITEM = 'item';
}
?>
<div class="sinner <?echo $INNER?>" id="<?echo $SLIDER_ID?>" data-view="<?echo $DATA_VIEW?>">
    <div class="swrapper owl-carousel <?echo $WRAPPER?>">
        <?if($arParams["DISPLAY_TOP_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?><br />
        <?endif;?>
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <?
                // Поля для работы с слайдом
                $button_title = $arItem['PROPERTIES']['button_title']['VALUE']; // Название на кнопке
                $link = $arItem['PROPERTIES']['link']['VALUE']; // Ссылка в слайде
                $code = $arItem['PROPERTIES']['code']['VALUE']; // Код слайда
                $description = $arItem['PREVIEW_TEXT']['SRC']; // Описание в слайде
                $title = $arItem['NAME']; // Название слайда
                $picture_preview = $arItem['PREVIEW_PICTURE']['SRC']; // Маленькая картинка
                $picture_detail = $arItem['DETAIL_PICTURE']['SRC']; // Большая картинка

            ?>

            <?if($SLIDER_ID == 'main_screens'):?>
                <li class="slide">
                    <?if(isset($code)): ?>
                        <?echo $code?>
                    <?else:?>
                        <div class="slide_photo">
                            <div class="slide_photo_img" style="background-image: url(<?echo $picture_detail?>)"></div>
                        </div>
                        <div class="container slide_info">
                            <div class="slide_title">
                                <h2><?echo $title?></h2>
                            </div>
                            <div class="slide_about">
                                <p>
                                    <?echo $description?>
                                </p>
                                <a href="<?echo $link?>" class="btn btn-outline2"><?echo $button_title?></a>
                            </div>
                        </div>
                    
                    <?endif?>
                </li>

            <?else:?>
                <div class="<?echo $ITEM?>">
                    <div id="openNewScreen" data-title="<?echo $title?>" data-link="<?echo $picture_detail?>">
                        <img src="<?echo $picture_preview?>" alt="">
                    </div>
                </div>
            <?endif?>
        <?endforeach;?>
    </div>
</div>
