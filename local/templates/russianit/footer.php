<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>

<footer class="footer">
    <div class="container">
        <section class="footer_nav">
            <div class="cards ct_2 ctm_1 empty_b">
                <div class="cards empty_b">
                    <div class="card hidden-s w_2_3">
                        <div class="logo"><a href="/"><img src="/upload/images/icon/logo.svg" alt=""></a></div>
                    </div>
                    <div class="card w_1_3 columns">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                            "ROOT_MENU_TYPE" => "products",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>
                    </div>
                </div>
                <div class="cards empty_b ct_3">
                    <div class="card columns">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                            "ROOT_MENU_TYPE" => "services",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>
                    </div>
                    <div class="card columns">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                            "ROOT_MENU_TYPE" => "support",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>
                    </div>
                    <div class="card columns">

                        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array(
                            "ROOT_MENU_TYPE" => "company",
                            "MENU_CACHE_TYPE" => "Y",
                            "MENU_CACHE_TIME" => "36000000",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N",
                            "ALLOW_MULTI_SELECT" => "N"
                        ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer_o">
            <div class="cards ct_3 ctm_1 empty_b">
                <div class="card">
                    <p>
                        <?=GetMessage('FTR_COPYRIGHT')?>
                        <br/>
                        <a href="#" class="link"><?=GetMessage('FTR_POLITIC')?></a>
                    </p>
                </div>
                <div class="card rows">
                    <div class="f_social">
                        <a href="https://www.instagram.com/russian_it/" class="f_social_btn"><span class="f_social_btn_icon in"></span></a>
                        <a href="https://www.facebook.com/rusinfotech/?ref=bookmarks" class="f_social_btn"><span class="f_social_btn_icon fb"></span></a>
                        <a href="https://vk.com/rit_soft" class="f_social_btn"><span class="f_social_btn_icon vk"></span></a>
                    </div>
                </div>
                <div class="card">
                    <a href="#" class="link"><?=GetMessage('FTR_PRESENTATION')?></a>
                </div>
            </div>
        </section>
    </div>

</footer>

</div>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49642051 = new Ya.Metrika2({
                    id:49642051,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49642051" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script src="/local/assets/js/owl.carousel.js"></script>
<script src="/local/assets/js/app.js"></script>
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=854d6283-ef41-4a98-86da-b053e3cc9069"> </script>
</body>
</html>