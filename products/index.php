<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("id", "products");
$APPLICATION->SetTitle("Продукты");
?>
    <section class="products block_content">
        <div class="container">
            <div class="cards product-cards s-color ct_3 ctm_1 cts_1">
                <div class="card slide" data-color="#E96060" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod-pau.svg)" class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>Помощник арбитражного управляющего</a></h5>
                        <p class="card_text">
                            Комплексно-правовая система для автоматизации полного цикла работ по сопровождению процедур банкротства
                        </p>
                    </div>
                    <a href="/products/pau" class="card_link"><span></span></a>
                </div>
                <div class="card slide" data-product="hudway" data-color="#4690CD" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod-hudway.svg);background-size: auto 54px;background-position: left center;" class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>HUDWAY</a></h5>
                        <p class="card_text">
                            Линейка продуктов для безопасного вождения в любых условиях.
                        </p>
                    </div>
                    <a href="https://hudwayapp.com/ru" target="_blank" class="card_link"><span></span></a>
                </div>
                <div class="card slide" data-color="#8BB593" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod-fa.svg)" class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>F-анализ</a></h5>
                        <p class="card_text">
                            Система автоматизированного анализа финансового состояния предприятия
                        </p>
                    </div>
                    <a href="/products/fa" class="card_link"><span></span></a>
                </div>
                <div class="card slide" data-product="pechat" data-color="#5D5A57" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod-pechat.svg)" class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>Печать конвертов</a></h5>
                        <p class="card_text">Автоматическая печать конвертов, печать реестров, уведомлений, ведение баз данных контрагентов и проведённых рассылок.</p>
                    </div>
                    <a href="http://mnogopisem.ru/" target="_blank" class="card_link"><span></span></a>
                </div>
                <div class="card slide" data-product="probili" data-color="#CD4550" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod-probili.svg)" class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>Пробили.Ру</a></h5>
                        <p class="card_text">
                            Система автоматизированного анализа финансового состояния предприятия
                        </p>
                    </div>
                    <a href="https://probili.ru/" target="_blank" class="card_link"><span></span></a>
                </div>
            </div>
        </div>
    </section>
    <style>
    .cards.product-cards .card[data-item="cardPrint"]:hover .card_photo {
        background-image: url(/upload/images/item/prod4-2.png) !important;
    }
.cards.product-cards .card[data-product="hudway"]:hover .card_photo {background-image: url(/upload/images/item/prod-hudway-h.svg)!important;}
.cards.product-cards .card[data-product="pechat"]:hover .card_photo {background-image: url(/upload/images/item/prod-pechat-h.svg)!important;}
.cards.product-cards .card[data-product="probili"]:hover .card_photo {background-image: url(/upload/images/item/prod-probili-h.svg)!important;}
    </style>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>