<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Этой страницы нету");
?>
    <div id="page404">
        <section class="main">
            <div class="container">
                <div class="row main_info middle-xs center-xs">
                    <div class="item col-xs-12">
                        <div class="title">
                            <h1>404</h1>
                        </div>
                    </div>
                    <div class="item col-xs-12">
                        <p>Страница не найдена. Попробуйте почитать о <a href="/about" class="link">нашей компании</a>
                            <br/> или посмотреть <a href="/about/vacancies" class="link">наши вакансии</a>.</p>
                    </div>
                </div>
                <div class="hedgehog"></div>
            </div>
        </section>
    </div>
    <style>
    #content {
        position: relative;
        min-height: 60vh
    }
    </style>
    <?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>