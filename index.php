<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Русские Информационные Технологии");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Главная страница");

CModule::IncludeModule("iblock");


?>
    <div id="index">
        <!-- Слайдер -->
        <section class="slider">
            <? $APPLICATION->IncludeComponent(
                "bitrix:news.list", 
                "screens", 
                array(
                    "ACTIVE_DATE_FORMAT" => "j F Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "3600",
                    "CACHE_TYPE" => "N",
                    "CHECK_DATES" => "Y",
                    "COMPONENT_TEMPLATE" => "screens",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array(
                        "DETAIL_PICTURE",
                        "PREVIEW_PICTURE",
                        "DETAIL_TEXT",
                    ),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "10",
                    "IBLOCK_TYPE" => "main",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "30",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array(
                        "button_title",
                        "link",
                        "show_code",
                        "code",
                    ),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "TIMESTAMP_X",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N",
                    "SLIDER_ID" => "main_screens", // id нашего слайдера
                    "DATA_VIEW" => "1",
                    "CLASS_INNER" => "slider_inner",
                    "CLASS_WRAPPER" => "slider_wrapper items",
                    "CLASS_ITEM" => "slide",
                    "ARROWS_SHOW" => "Y", // Показывать переключатели
                ),
                false
            ); ?>
            
        </section>
        <!-- Продукты -->
        <section id="main_products" class="block_content products">
            <div class="container">
                <div class="title">
                    <h3><a href="/products">Продукты</a></h3>
                </div>
                <div class="items_inner">
                    <div class="cards product-cards s-color ct_3 ctm_1 cts_1">
                        <div class="card slide" data-product="pau" data-color="#5D5A57" data-tcolor="#fff">
                            <div style="background-image: url(/upload/images/item/prod-pau.svg)" class="holder_image card_photo"></div>
                            <div class="card_body">
                                <h5 class="card_title"><a>Помощник арбитражного управляющего</a></h5>
                                <p class="card_text">
                                    Комплексно-правовая система для автоматизации полного цикла работ по сопровождению процедур банкротства
                                </p>
                            </div>
                            <a href="/products/pau" class="card_link"><span></span></a>
                        </div>
                        <div class="card slide" data-product="hudway" data-color="#5D5A57" data-tcolor="#fff">
                            <div style="background-image: url(/upload/images/item/prod-hudway.svg);background-size: auto 54px;background-position: left center;" class="holder_image card_photo"></div>
                            <div class="card_body">
                                <h5 class="card_title"><a>HUDWAY</a></h5>
                                <p class="card_text">
                                    Линейка продуктов для безопасного вождения в любых условиях.
                                </p>
                            </div>
                            <a href="https://hudwayapp.com/ru" target="_blank" class="card_link"><span></span></a>
                        </div>
                        <div class="card slide" data-product="fa" data-color="#5D5A57" data-tcolor="#fff">
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
                            <div style="background-image: url(/upload/images/item/prod-pechat.png)" class="holder_image card_photo"></div>
                            <div class="card_body">
                                <h5 class="card_title"><a>Печать конвертов</a></h5>
                                <p class="card_text">Автоматическая печать конвертов, печать реестров, уведомлений, ведение баз данных контрагентов и проведённых рассылок.</p>
                            </div>
                            <a href="http://mnogopisem.ru/" target="_blank" class="card_link"><span></span></a>
                        </div>
                        <div class="card slide" data-product="probili" data-color="#5D5A57" data-tcolor="#fff">
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
            </div>
        </section>
        <!-- Услуги -->
        <section class="block_content services">
            <div class="container">
                <div class="title">
                    <h3><a href="#">Услуги</a></h3>
                </div>
                <div class="s_container services_about">
                    <p>
                        Мы предлагаем полный комплекс услуг для проектов любого уровня и любой стадии готовности — от начальной, когда есть лишь идея, нуждающаяся в разработке, создании инструментов и продвижении, до заключительной, когда ресурсу необходима только поддержка.
                    </p>
                </div>
                <div class="cards ct_3 ctm_1 cts_1">
                    <div class="card">
                        <div class="card_body">
                            <h5 class="card_title"><a>Сайты и<br/> веб-сервисы</a></h5>
                            <p class="card_text">
                                - Корпоративные сайты
                                <br/> - Интернет-магазины
                                <br/> - Промо
                                <br/> - Лэндинги
                                <br/> - CRM, интеграция
                            </p>
                        </div>
                        <div class="card_icon"></div>
                    </div>
                    <div class="card">
                        <div class="card_body">
                            <h5 class="card_title"><a>Мобильные приложения</a></h5>
                            <p class="card_text">
                                - iOS
                                <br/> - Android
                                <br/>
                            </p>
                        </div>
                        <div class="card_icon"></div>
                    </div>
                    <div class="card">
                        <div class="card_body">
                            <h5 class="card_title"><a>Разработка программного обеспечения</a></h5>
                            <p class="card_text">
                                - Бизнес-анализ и консалтинг
                                <br/> - Разработка заказных ERP и CRM
                                <br/> - Внедрение, развертывание, <span class="lindent"></span>интеграция и настройка
                                <br/>
                            </p>
                        </div>
                        <div class="card_icon"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Компания -->
        <section class="block_content company">
            <div class="container">
                <div class="title">
                    <h3><a href="/about">Компания</a></h3>
                </div>
                <div class="s_container company_about">
                    <p>Русские информационные технологии— одновременно продуктовая и сервисная компания. На протяжении 15 лет мы разрабатываем и сопровождаем информационные системы разного уровня.
                        <br> В нашем портфолио успешные истории создания собственных продуктов: «Помощник арбитражного управляющего», F-анализ, HUDWAY, а также десятки сложных заказных веб-сервисов для клиентов со всего мира.</p>
                </div>
                <div class="cards about_items ct_3 ctm_1">
                    <div class="card">
                        <div class="card_icon"></div>
                        <div class="card_body">
                            <p class="card_text">
                            </p>
                            <h2 class="title_big">2004</h2>
                            <p class="card_text">
                                Год основания компании
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_icon"></div>
                        <div class="card_body">
                            <p class="card_text">
                                Более
                            </p>
                            <h2 class="title_big">40</h2>
                            <p class="card_text">
                                заказных проектов
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card_icon"></div>
                        <div class="card_body">
                            <p class="card_text">
                                Более
                            </p>
                            <h2 class="title_big">60</h2>
                            <p class="card_text">
                                сотрудников
                            </p>
                        </div>
                    </div>
                </div>
                <div class="cards link_items ct_2 cts_1 company_info">
                    <div class="card rows m_column news">
                        <div class="title_block">
                            <h3>Новости компании:</h3>
                        </div>
                        <div class="social">
                            <a href="https://www.instagram.com/russian_it/" target="_blank" class="social_btn"><span
                                        class="social_btn_icon in"></span></a>
                            <a href="https://www.facebook.com/rusinfotech/?ref=bookmarks" target="_blank" class="social_btn"><span class="social_btn_icon fb"></span></a>
                            <a href="https://vk.com/rit_soft" target="_blank" class="social_btn"><span
                                        class="social_btn_icon vk"></span></a>
                        </div>
                    </div>
                    <?
                    $vacancies = 0;
                    // Количество вакансий
                    $res = CIBlockElement::GetList(Array("SORT" => "ASC", "timestamp_x" => "DESC"), Array("IBLOCK_ID" => "5"), false, Array());
                    while ($obj = $res->GetNext()) {
                        $vacancies++;
                    }
                    ?>
                        <div class="card rows m_column vacancy">
                            <div class="title_block">
                                <h3>Вакансии</h3>
                            </div>
                            <div class="vacancy_info">
                                <p>Сейчас открыто
                                    <? echo $vacancies . ' ' . declension_words($vacancies, Array('вакансия', 'вакансии', 'вакансий')); ?>
                                        .</p>
                            </div>
                            <a href="/about/vacancies" class="btn btn-outline">Подробнее</a>
                        </div>
                </div>
            </div>
        </section>
        <!-- Клиенты -->
        <section class="block_content clients bg-gwhite">
            <div class="container">
                <div class="title">
                    <h3>
                        Более <a href="#">10 000 клиентов</a> используют наши продукты
                    </h3>
                </div>
                <div class="partners">
                    <div class="cards ct_4">
                        <div class="card"><img src="upload/images/partner/partner1.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner2.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner3.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner4.png" alt=""></div>
                    </div>
                    <div class="cards ct_3">
                        <div class="card"><img src="upload/images/partner/partner5.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner6.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner7.png" alt=""></div>
                    </div>
                    <div class="cards ct_4">
                        <div class="card"><img src="upload/images/partner/partner8.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner9.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner10.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner11.png" alt=""></div>
                    </div>
                    <div class="cards ct_3">
                        <div class="card"><img src="upload/images/partner/partner12.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner13.png" alt=""></div>
                        <div class="card"><img src="upload/images/partner/partner14.png" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <style>
    #launcher {
        display: none
    }

    /* Продукты */
    .cards.product-cards .card[data-product="pau"]:hover .card_photo {
        background-image: url(/upload/images/item/prod-pau-h.svg)!important;
    }

    .cards.product-cards .card[data-product="hudway"]:hover .card_photo {
        background-image: url(/upload/images/item/prod-hudway-h.svg)!important;
    }

    .cards.product-cards .card[data-product="fa"]:hover .card_photo {
        background-image: url(/upload/images/item/prod-fa-h.svg)!important;
    }

    .cards.product-cards .card[data-product="pechat"]:hover .card_photo {
        background-image: url(/upload/images/item/prod-pechat-h.png)!important;
    }

    .cards.product-cards .card[data-product="probili"]:hover .card_photo {
        background-image: url(/upload/images/item/prod-probili-h.svg)!important;
    }
    </style>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>