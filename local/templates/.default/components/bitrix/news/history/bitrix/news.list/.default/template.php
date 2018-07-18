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
<div class="events_list items flex_column flex_center">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item">
            <div class="item_date">
                <?
                if(isset($arItem['ACTIVE_FROM'])) {
                    $time = $arItem['ACTIVE_FROM'];
                } else {
                    $time = $arItem['TIMESTAMP_X'];
                }
                $site_format = CSite::GetDateFormat(); // DD.MM.YYYY HH:MI:SS

                if ($stmp = MakeTimeStamp($time, $site_format))
                {

                    echo FormatDate("d F Y", $stmp); // 28 January 2005
                }
                ?>
            </div>
            <h4 class="item_title">
                <p>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
                </p>
            </h4>
        </div>
    <?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
    <?=$arResult["NAV_STRING"]?>
<?endif;?>
