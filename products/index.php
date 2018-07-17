<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("id", "products");
$APPLICATION->SetTitle("Продукты");
?>


    <section class="products block_content">
        <div class="container">

            <div class="cards product-cards s-color ct_3 ctm_1 cts_1">
                <div class="card slide" data-color="#E96060" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod1.png)"
                         class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>Помошник арбитражного управляющего</a></h5>
                        <p class="card_text">
                            Система автоматизированного анализа финансового состояния предприятия
                        </p>
                    </div>
                    <a href="/products/pau" class="card_link"><span></span></a>
                </div>
                <div class="card slide" data-color="#4690CD" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod2.png)"
                         class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>Hudway</a></h5>
                        <p class="card_text">
                            Линейка продуктов для безопасного вождения в любых условиях.
                        </p>
                    </div>
                </div>
                <div class="card slide" data-color="#8BB593" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod3.png)"
                         class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>F-анализ</a></h5>
                        <p class="card_text">
                            Крупная система анализа финансового состояния предприятия.
                        </p>
                    </div>
                    <a href="/products/fa" class="card_link"><span></span></a>
                </div>

                <div class="card slide" data-color="#fff">
                    <div style="background-image: url(/upload/images/item/prod4.png)"
                         class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>Печать конвертов</a></h5>
                        <p class="card_text">Автоматическая печать конвертов, печать реестров, уведомлений, ведение
                            баз данных контрагентов и проведённых рассылок.</p>
                    </div>
                    <a href="http://mnogopisem.ru/" class="card_link"><span></span></a>
                </div>
                <div class="card slide" data-color="#5D5A57" data-tcolor="#fff">
                    <div style="background-image: url(/upload/images/item/prod5.png)"
                         class="holder_image card_photo"></div>
                    <div class="card_body">
                        <h5 class="card_title"><a>Пробили.ру</a></h5>
                        <p class="card_text">
                            Система автоматизированного анализа финансового состояния предприятия
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <style>
        .cards.product-cards .card[data-item="cardPrint"]:hover .card_photo {
            background-image: url(/upload/images/item/prod4-2.png) !important;
        }
    </style>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>