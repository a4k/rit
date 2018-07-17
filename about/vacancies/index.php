<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
?>

	<!--<section class="chire">
		<div class="container">
			<div class="breadcrumbs">
				<a href="/">Главная</a> 
				/
				<a href="/about">Компания</a> 
				/
				<span>Вакансии</span>
			</div>
		</div>
	</section>-->

	<section class="hireb">
		<div class="container">
			<div class="text_center">
				<div class="title_bold">
					<h2>Вакансии</h2>
				</div>
			</div>
			<div class="s_container">
				<div class="about">
					<p>
						Мы всегда рады новым хорошим специалистам в нашей команде! <br/><br/>
Поэтому постоянно находимся в поиске разработчиков, менеджеров и других специалистов разного уровня, как на собственные продукты, так и на заказные проекты!
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="whybest">
		<div class="container">
			<div class="text_center">
				<div class="title">
					<h4>Почему у нас классно работать?</h4>
				</div>
			</div>

			<div class="features">
				<div class="feature_list">
					<div class="feature_row row">
						<div class="item col-xs-12 col-sm-6 col-md-4">
							<div class="icon">
								<object type="image/svg+xml" data="/upload/images/icon/h-icon-1.svg">
								   Your browser does not support SVG
								</object>
							</div>
							<div class="title_block_bold">
								<h4>Достойная зарплата<br>и премии</h4>
							</div>
						</div>
						<div class="item col-xs-12 col-sm-6 col-md-4">
							<div class="icon">
								<object type="image/svg+xml" data="/upload/images/icon/h-icon-2.svg">
								   Your browser does not support SVG
								</object>
							</div>
							<div class="title_block_bold">
								<h4>Оплачиваемый отпуск <br> и больничный</h4>
							</div>
						</div>
						<div class="item col-xs-12 col-sm-6 col-md-4">
							<div class="icon">
								<object type="image/svg+xml" data="/upload/images/icon/h-icon-3.svg">
								   Your browser does not support SVG
								</object>
							</div>
							<div class="title_block_bold">
								<h4>Оплачиваем занятия спортом</h4>
							</div>
						</div>
					</div>
					<div class="feature_row row">
						<div class="item col-xs-12 col-sm-6 col-md-4">
							<div class="icon">
								<object type="image/svg+xml" data="/upload/images/icon/h-icon-4.svg">
								   Your browser does not support SVG
								</object>
							</div>
							<div class="title_block_bold">
								<h4>Чай, кофе, печеньки</h4>
							</div>
						</div>
						<div class="item col-xs-12 col-sm-6 col-md-4">
							<div class="icon">
								<object type="image/svg+xml" data="/upload/images/icon/h-icon-5.svg">
								   Your browser does not support SVG
								</object>
							</div>
							<div class="title_block_bold">
								<h4>Уютный офис</h4>
							</div>
						</div>
						<div class="item col-xs-12 col-sm-6 col-md-4">
							<div class="icon">
								<object type="image/svg+xml" data="/upload/images/icon/h-icon-6.svg">
								   Your browser does not support SVG
								</object>
							</div>
							<div class="title_block_bold">
								<h4>Обучение английскому</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="hire_items bg-gwhite">
		<div class="container">
			<div class="s_container">
				<?$APPLICATION->IncludeComponent("bitrix:furniture.vacancies", ".default", Array(
	"IBLOCK_ID" => "5",	// Список инфоблоков
		"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "main",	// Типы инфоблоков
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	),
	false
);?>
			</div>
			
		</div>
	</section>


	<div class="modal" id="newHire">
		<div class="modal_shadow" data-name="newHire"></div>
		<div class="modal_dialog">
			<div class="modal_content">
				<div class="modal_header">
					<div class="title">
						<h3>Отклик на вакансию <span class="title-info">PHP-программист</span></h3>
					</div>
					<div class="close" data-name="newHire"></div>
				</div>
				<div class="modal_body">
					<div class="vacancy row">
						<div class="col-xs-12 col-md-9 vacancy_form">
							<?$APPLICATION->IncludeComponent("bitrix:form", ".default", Array(
	"AJAX_MODE" => "Y",	// Включить режим AJAX
		"WEB_FORM_ID" => "1",	// ID веб-формы
		"START_PAGE" => "new",	// Начальная страница
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"CACHE_TYPE" => "N",	// Тип кеширования
		"SHOW_ADDITIONAL" => "N",	// Показать дополнительные поля веб-формы
		"SHOW_STATUS" => "Y",	// Показать текущий статус результата
		"EDIT_ADDITIONAL" => "N",	// Выводить на редактирование дополнительные поля
		"EDIT_STATUS" => "N",	// Выводить форму смены статуса
		"SUCCESS_URL" => "/vacancies/success",	// Страница с сообщением об успешной отправке
		"COMPONENT_TEMPLATE" => ".default",
		"SHOW_LIST_PAGE" => "Y",	// Показывать страницу со списком результатов
		"SHOW_EDIT_PAGE" => "N",	// Показывать страницу редактирования результата
		"SHOW_VIEW_PAGE" => "N",	// Показывать страницу просмотра результата
		"RESULT_ID" => $_REQUEST[RESULT_ID],	// ID результата
		"SHOW_ANSWER_VALUE" => "N",	// Показать значение параметра ANSWER_VALUE
		"NOT_SHOW_FILTER" => array(	// Коды полей, которые нельзя показывать в фильтре
			0 => "",
			1 => "",
		),
		"NOT_SHOW_TABLE" => array(	// Коды полей, которые нельзя показывать в таблице
			0 => "",
			1 => "",
		),
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "N",	// Включить подгрузку стилей
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"VARIABLE_ALIASES" => array(
			"action" => "action",
		)
	),
	false
);?>
						</div>
						<div class="col-xs-12 col-md-3 vacancy_manager">
							<div class="manager">
								<p><span class="text_bold">Рябчикова <br>Анна</span></p>
								<p class="small_text manager_info">hr-менеджер<br/></p>
								<img src="/upload/images/" class="manager_photo" alt="">
								<p class="small_text manager_voice">«Свяжусь с вами <br>в течение рабочего <br>дня»</p>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>