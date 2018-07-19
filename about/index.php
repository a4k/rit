<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Компания РИТ");
CModule::IncludeModule("iblock");

?>
    <div id="about">
        <!--<section class="about">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="/">Главная</a>
                    /
                    <span>Компания</span>
                </div>

            </div>
        </section>-->
        <section class="infob block_content">
            <div class="container">
                <div class="row between-xs">
                    <div class="infob_photo col-xs-12 col-md-6 last-xs first-md center-xs start-md">
                        <img src="/upload/images/item/about1.jpg">
                    </div>
                    <div class="infob_text row col-xs-12 col-md-6 center-xs start-md middle-md">
                        <div class="text">
                            <div class="title_block_bold">
                                <h2>
                                    О компании
                                </h2>
                            </div>
                            <p>
                                Русские информационные технологии— одновременно продуктовая и сервисная компания. На протяжении 15 лет мы разрабатываем и сопровождаем информационные системы разного уровня.
                            </p>
                            <p>
                                В нашем портфолио успешные истории создания собственных продуктов: «Помощник арбитражного управляющего», F-анализ, HUDWAY, а также десятки сложных заказных веб-сервисов для клиентов со всего мира.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="infob block_content">
            <div class="container">
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
                        ),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => "8",
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
                            0 => "",
                            1 => "",
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
                        "SLIDER_ID" => "screens", // id нашего слайдера
                        "DATA_VIEW" => "3",
                        "CLASS_INNER" => "qslider gallery",
                        "CLASS_WRAPPER" => "gallery_images",
                    ),
                    false
                ); ?>


            </div>
        </section>
        <section class="team block_content">
            <div class="container">
                <div class="title" id="title_team">
                    <h4>Команда</h4>
                </div>
                <div class="s_container">
                    <div class="about_text">
                        <p class="about_text_p">
                            Сегодня в нашей команде 60 профеессионалов: опытные разработчики, тестировщики, проектные менеджеры, менеджеры по продажам и другие специалисты.
                        </p>
                        <p class="about_text_p">
                            Мы ценим каждого сотрудника и строим планы опираясь на людей - на их профессиональные качества, навыки и умения. Политика компании - дать возможность каждому сотруднику развивать свои профессиональные таланты! И мы всегда рады принять хороших специалистов в нашу дружную команду!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="short_info">
            <div class="container">
                <div class="row short_info_list around-xs">
                    <div class="card_body_c" id="card_body_1">
                        <div id="card_body_1_text" class="card_body_texts">
                            <div class="text_big_2">60</div>
                            <p class="card_text">сотрудников</p>
                        </div>
                    </div>
                    <div class="card_body_c" id="card_body_2">
                        <div id="card_body_2_text" class="card_body_texts">
                            <div class="text_big_2">27,3</div>
                            <p class="card_text">средний возраст</p>
                        </div>
                    </div>
                    <div class="card_body_c" id="card_body_3">
                        <div id="card_body_3_text" class="card_body_texts">
                            <div class="text_big_2">98%</div>
                            <p class="card_text">с высшим образованием</p>
                        </div>
                    </div>
                    <div class="card_body_c" id="card_body_4">
                        <div id="card_body_4_text" class="card_body_texts">
                            <div class="text_big_2">4.5</div>
                            <p class="card_text">средний стаж сотрудников</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_content leadership">
            <div class="container">
                <div class="title">
                    <h3>Руководство</h3>
                </div>
                <div class="row liders_list center-xs">
                    <div class="item col-xs-12 center-xs col-sm start-sm">
                        <div class="item_photo">
                            <img src="/upload/images/photo/klabukov.jpg">
                        </div>
                        <div class="item_body">
                            <div class="title_block_bold">
                                <h4>Иван Клабуков</h4>
                            </div>
                            <p>
                                Директор
                            </p>
                        </div>
                    </div>
                    <div class="item col-xs-12 center-xs col-sm start-sm">
                        <div class="item_photo">
                            <img src="/upload/images/photo/konovalov.jpg" alt="">
                        </div>
                        <div class="item_body">
                            <div class="title_block_bold">
                                <h4>Дмитрий Коновалов</h4>
                            </div>
                            <p>Исполнительный директор</p>
                        </div>
                    </div>
                    <div class="item col-xs-12 center-xs col-sm start-sm">
                        <div class="item_photo">
                            <img src="/upload/images/photo/vagin.jpg" alt="">
                        </div>
                        <div class="item_body">
                            <div class="title_block_bold">
                                <h4>Виктор Вагин</h4>
                            </div>
                            <p>Технический директор</p>
                        </div>
                    </div>
                    <div class="item col-xs-12 center-xs col-sm start-sm">
                        <div class="item_photo">
                            <img src="/upload/images/photo/it.jpg" alt="">
                        </div>
                        <div class="item_body">
                            <div class="title_block_bold">
                                <h4>Олег Кравцов</h4>
                            </div>
                            <p>Руководитель отдела веб-разработки</p>
                        </div>
                    </div>
                </div>


                <div class="row liders_list center-xs">
                    <div class="item col-xs-12 center-xs col-sm start-sm">
                        <div class="item_photo">
                            <img src="/upload/images/photo/it.jpg" alt="">
                        </div>
                        <div class="item_body">
                            <div class="title_block_bold">
                                <h4>Олег Кравцов</h4>
                            </div>
                            <p>Руководитель отдела веб-разработки</p>
                        </div>
                    </div>
                    <div class="item col-xs-12 center-xs col-sm start-sm">
                        <div class="item_photo">
                            <img src="/upload/images/photo/frolov.jpg" alt="">
                        </div>
                        <div class="item_body">
                            <div class="title_block_bold">
                                <h4>Кирилл Фролов</h4>
                            </div>
                            <p>Руководитель отдела мобильной разработки</p>
                        </div>
                    </div>
                    <div class="item col-xs-12 center-xs col-sm start-sm">
                        <div class="item_photo">
                            <img src="/upload/images/photo/dk.jpg" alt="">
                        </div>
                        <div class="item_body">
                            <div class="title_block_bold">
                                <h4>Денис Кравцов</h4>
                            </div>
                            <p>Руководитель отдела мобильной разработки</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block_content company bg-gwhite">
            <div class="container">
                <div class="cards link_items ct_2 cts_1 company_info">
                    <div class="card rows m_column news">
                        <div class="title_block">
                            <h3>Новости компании:</h3>
                        </div>
                        <div class="social">
                            <a target="_blank" href="https://www.instagram.com/russian_it" class="social_btn"><span
                                        class="social_btn_icon in"></span></a>
                            <a target="_blank" href="https://www.facebook.com/rusinfotech/?ref=bookmarks" class="social_btn"><span class="social_btn_icon fb"></span></a>
                            <a target="_blank" href="https://vk.com/rit_soft" class="social_btn"><span
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
    </div>
    <!-- Скриншоты модальное окно -->
    <div class="modal newMedia" id="newScreen">
        <div class="modal_shadow" data-name="newScreen">
        </div>
        <div class="close" data-name="newScreen">
        </div>
        <div class="arrows">
            <div class="arrow_left" data-name="newScreen">
                <div class="arrow_info">
                    <span class="arrow"></span>
                    <span class="counter">1/8</span>
                </div>
            </div>
            <div class="arrow_right" data-name="newScreen">
                <div class="arrow_info">
                    <span class="arrow"></span>
                    <span class="counter">1/8</span>
                </div>
            </div>
        </div>
        <div class="modal_dialog">
            <div class="title">
                <h3>Скриншоты</h3></div>
            <div class="modal_content no-padding">
                <div class="modal_header">
                </div>
                <div class="modal_body photo">
                </div>
            </div>
        </div>
    </div>
    <div class="modal newMedia" id="newVideo">
        <div class="modal_shadow" data-name="newVideo">
        </div>
        <div class="close" data-name="newVideo">
        </div>
        <div class="arrows">
            <div class="arrow_left" data-name="newVideo">
                <div class="arrow_info">
                    <span class="arrow"></span>
                    <span class="counter">1/8</span>
                </div>
            </div>
            <div class="arrow_right" data-name="newVideo">
                <div class="arrow_info">
                    <span class="arrow"></span>
                    <span class="counter">1/8</span>
                </div>
            </div>
        </div>
        <div class="modal_dialog">
            <div class="title">
                <h3>Обзор сервиса</h3></div>
            <div class="modal_content no-padding">
                <div class="modal_header">
                </div>
                <div class="modal_body video">
                </div>
            </div>
        </div>
    </div>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>