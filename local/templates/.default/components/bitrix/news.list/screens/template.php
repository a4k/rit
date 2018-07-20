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
$ARROWS_SHOW = $arParams['ARROWS_SHOW']; // показывать переключатели
if(!isset($ITEM)) {
    $ITEM = 'item';
}

$item_i = 0;
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
                $show_code = $arItem['PROPERTIES']['show_code']['VALUE_XML_ID']; // Показывать код слайда
                $code = $arItem['PROPERTIES']['code']['VALUE']['TEXT']; // Код слайда
                $description = $arItem['DETAIL_TEXT']; // Описание в слайде
                $title = $arItem['NAME']; // Название слайда
                $picture_preview = $arItem['PREVIEW_PICTURE']['SRC']; // Маленькая картинка
                $picture_detail = $arItem['DETAIL_PICTURE']['SRC']; // Большая картинка
                $item_i++;
            ?>

            <?if($SLIDER_ID == 'main_screens'):?>
                <div class="<?echo $ITEM?>" data-item="<?echo $item_i;?>">
                    <!-- <?print_r($arItem['PROPERTIES']['code'])?> -->
                    <?if($show_code == '111'): ?>
                        <?echo $code?>
                    <?else:?>
                        <div class="slide_photo">
                            <div class="slide_photo_img" style="background-image: url(<?echo $picture_detail?>)"></div>
                        </div>
                        <div class="container slide_info">
                            <div class="slide_title">
                                <h1><?echo $title?></h1>
                            </div>
                            <div class="slide_about">
                                <p>
                                    <?echo $description?>
                                </p>
                                <a href="<?echo $link?>" class="btn btn-outline2"><?echo $button_title?></a>
                            </div>
                        </div>
                    
                    <?endif?>
                </div>

            <?else:?>
                <div class="<?echo $ITEM?>">
                    <a class="item_screen" data-fancybox="gallery" href="<?echo $picture_detail?>">
                        <img src="<?echo $picture_preview?>" alt="">
                    </a>
                </div>
            <?endif?>
        <?endforeach;?>
    </div>
    <?if($ARROWS_SHOW == 'Y'): ?>
        <div class="arrow_left"></div>
        <div class="arrow_right"></div>
        <div class="arrows">
            <div class="sel"></div>
            <div class="sel active"></div>
            <div class="sel"></div>
            <div class="sel"></div>
        </div>
    <?endif?>
</div>
