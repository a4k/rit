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
<div class="events_list">
    <?if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?><br />
    <?endif;?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="item row">
            <div class="col-xs-12 col-md-3 center-xs start-md date">
                <p>
                    <?
                    if(isset($arItem['ACTIVE_FROM'])) {
                        $time = $arItem['ACTIVE_FROM'];
                    } else {
                        $time = $arItem['TIMESTAMP_X'];
                    }
                    $site_format = CSite::GetDateFormat(); // DD.MM.YYYY HH:MI:SS
                    // РїСЂРµРѕР±СЂР°Р·СѓРµРј РґР°С‚Сѓ РІ Unix С„РѕСЂРјР°С‚
                    if ($stmp = MakeTimeStamp($time, $site_format))
                    {
                        // РІС‹РІРµРґРµРј РґР°С‚Сѓ Р°РєС‚РёРІРЅРѕСЃС‚Рё РІС‹Р±СЂР°РЅРЅРѕРіРѕ СЌР»РµРјРµРЅС‚Р° РІ РїСЂРѕРёР·РІРѕР»СЊРЅРѕРј РІРёРґРµ
                        echo FormatDate("d F Y", $stmp); // 28 January 2005
                    }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 col-md-8 title center-xs start-md">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="link"><?echo $arItem["NAME"]?></a>
            </div>
        </div>
    <?endforeach;?>
</div>
