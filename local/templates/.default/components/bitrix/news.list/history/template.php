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

<?if($arParams["TYPE_PAGE"] == 'pagination'): ?>
   <div class="pagination">
        <?if($arParams["DISPLAY_TOP_PAGER"]):?>
            <?=$arResult["NAV_STRING"]?>
                <br />
                <?endif;?>
                    <? $element = 0;
                    foreach($arResult["ITEMS"] as $arItem):?>
                        <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            $version = $arItem["PROPERTIES"]["version"]["VALUE"]; // Версия
                        ?>
                        <? if($arItem['ID'] == $arParams['CURRENT_VERSION'] or ($arParams['CURRENT_VERSION'] == '0' and $element == 0)): ?>
                            <div class="link_page noactive">
                                <p>
                                    <span><?echo $version;?></span>
                                </p>
                            </div>
                        <? else: ?>
                            <div class="link_page">
                                <p>
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $version?></a>
                                </p>
                            </div>
                        <? endif;?>
                    <?
                        $element++;
                        endforeach;
                    ?>
    </div>
<?endif;?>