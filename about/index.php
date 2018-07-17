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
                                Русские информационные технологии— одновременно продуктовая и сервисная компания.
                                На протяжении 15 лет мы разрабатываем и сопровождаем информационные системы разного уровня.
                            </p>
                            <p>
                                В нашем портфолио успешные истории создания собственных продуктов: «Помощник арбитражного
                                управляющего», F-анализ, HUDWAY, а также десятки сложных заказных веб-сервисов для клиентов
                                со всего мира.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="infob block_content">
            <div class="container">
                <div class="qslider gallery sinner" id="screens" data-view="3">
                    <div class="swrapper gallery_images owl-carousel">
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about2.jpg">
                                <img src="/upload/images/item/about2.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about3.jpg">
                                <img src="/upload/images/item/about3.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about4.jpg">
                                <img src="/upload/images/item/about4.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about13.jpg">
                                <img src="/upload/images/item/about13.jpg" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about5.jpg"><img
                                        src="/upload/images/item/about5.jpg" alt=""></div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about6.jpg"><img
                                        src="/upload/images/item/about6.jpg" alt=""></div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about7.jpg"><img
                                        src="/upload/images/item/about7.jpg" alt=""></div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about8.jpg"><img
                                        src="/upload/images/item/about8.jpg" alt=""></div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about9.jpg"><img
                                        src="/upload/images/item/about9.jpg" alt=""></div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about10.jpg"><img
                                        src="/upload/images/item/about10.jpg" alt=""></div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about11.JPG"><img
                                        src="/upload/images/item/about11.JPG" alt=""></div>
                        </div>
                        <div class="item">
                            <div id="openNewScreen" data-title="фото" data-link="/upload/images/item/about12.jpg"><img
                                        src="/upload/images/item/about12.jpg" alt=""></div>
                        </div>

                    </div>
                </div>
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
                            Сегодня в нашей команде 60 профеессионалов: опытные разработчики, тестировщики, проектные
                            менеджеры, менеджеры по продажам и другие специалисты.
                        </p>
                        <p class="about_text_p">
                            Мы ценим каждого сотрудника и строим планы опираясь на людей - на их профессиональные качества,
                            навыки и умения. Политика компании - дать возможность каждому сотруднику развивать свои
                            профессиональные таланты!
                            И мы всегда рады принять хороших специалистов в нашу дружную команду!
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
                <div class="row liders_list around-xs">
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
                            <img src="/upload/images/photo/kravcov.jpg" alt="">
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
                            <a target="_blank" href="https://www.facebook.com/rusinfotech/?ref=bookmarks"
                               class="social_btn"><span class="social_btn_icon fb"></span></a>
                            <a target="_blank" href="https://vk.com/rit_soft" class="social_btn"><span
                                        class="social_btn_icon vk"></span></a>
                        </div>

                    </div>
                    <?
                    $vacancies = 0;
                    // Количество вакансий
                    $res = CIBlockElement::GetList(Array("SORT" => "ASC", "timestamp_x" => "DESC"), Array("IBLOCK_ID" => "2"), false, Array());
                    while ($obj = $res->GetNext()) {
                        $vacancies++;
                    }
                    ?>
                    <div class="card rows m_column vacancy">
                        <div class="title_block">
                            <h3>Вакансии</h3>
                        </div>
                        <div class="vacancy_info">
                            <p>Сейчас
                                открыто <? echo $vacancies . ' ' . declension_words($vacancies, Array('вакансия', 'вакансии', 'вакансий')); ?>
                                .</p>
                        </div>
                        <a href="/vacancies" class="btn btn-outline">Подробнее</a>

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
            <div class="title"><h3>Скриншоты</h3></div>
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
            <div class="title"><h3>Обзор сервиса</h3></div>
            <div class="modal_content no-padding">
                <div class="modal_header">
                </div>
                <div class="modal_body video">
                </div>
            </div>
        </div>
    </div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>