<?php

if (!defined('B_PROLOG_INCLUDED') || (B_PROLOG_INCLUDED !== true)) {
    die();
}

if (!$arResult["NavShowAlways"]) {
    if (
       (0 == $arResult["NavRecordCount"])
       ||
       ((1 == $arResult["NavPageCount"]) && (false == $arResult["NavShowAll"]))
    ) {
        return;
    }
}

$navQueryString      = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$navQueryStringFull  = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

?>
<div class="pagination">
	<?php while ($arResult["nStartPage"] <= $arResult["nEndPage"]) { ?>
        <?php if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) { ?>
        	<div class="link_page">
						<p>
							<span><?php echo $arResult["nStartPage"] ?></span>
						</p>
					</div>
        <?php } elseif ((1 == $arResult["nStartPage"]) && (false == $arResult["bSavePage"])) { ?>
            <div class="link_page">
				<p>
					<a href="<?php echo $arResult["sUrlPath"] ?><?php echo $navQueryStringFull ?>"><?php echo $arResult["nStartPage"] ?></a>
				</p>
			</div>
        <?php } else { ?>
            <div class="link_page">
				<p>
					<a href="<?php echo $arResult["sUrlPath"] ?>?<?php echo $navQueryString ?>PAGEN_<?php echo $arResult["NavNum"] ?>=<?php echo $arResult["nStartPage"] ?>"><?php echo $arResult["nStartPage"] ?></a>
				</p>
			</div>
        <?php } ?>
        <? $arResult["nStartPage"]++;?>
    <?php } ?>
</div>
