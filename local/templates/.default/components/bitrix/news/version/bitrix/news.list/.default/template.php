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
<?if($arParams["TYPE_PAGE"] == 'detail'): ?>
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <div class="title small_margin">
                <h3><?=$arItem["NAME"]?></h3>
            </div>
        <div class="text_center">
            <div class="history_date">
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
            </div>
        </div>
        <div class="text">
            <?echo $arItem["DETAIL_TEXT"];?>
            <p class="indent"></p>
        </div>


    <?endforeach;?>
<?endif;?>

