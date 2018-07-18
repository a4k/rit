<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "контакты");
$APPLICATION->SetPageProperty("description", "Контакты");
$APPLICATION->SetTitle("Контакты");
?>

	<section class="infob">
		<div class="container">
			<div class="text_center">
				<div class="title_bold">
					<h2>Контакты</h2>
				</div>
			</div>
			<div class="row contact_list center-xs around-sm">
				<div class="item col-xs-12 col-sm-3">
					<p class="text_bold">
						426035, Россия, Ижевск<br/>ул. В. Сивкова, 279, эт. 2
					</p>
				</div>
				<div class="item col-xs-12 col-sm-3">
					<div class="text">
						<p>
							По общим вопросам:<br/>
							<span class="text_bold">+7 (3412) 27-16-17</span>
						</p>
						<p>
							Поддержка, отдел продаж:<br/>
							<span class="text_bold">+7 (499) 673-03-37</span><br/>
							<span class="text_bold">+7 (3412) 43-57-88</span>
						</p>
						
					</div>
				</div>
				<div class="item col-xs-12 col-sm-3">
					<div class="email_list">
						<p>
							<a href="mailto:info@russianit.ru">info@russianit.ru</a><br/>
							<a href="mailto:support@russianit.ru">support@russianit.ru</a>
							
						</p>
					</div>
					<div class="social_list">
						<div class="social_item in">
							<a href="https://www.instagram.com/russian_it/" target="_blank">
								<div class="icon"></div>
							</a>
						</div>
						<div class="social_item fb">
							<a href="https://www.facebook.com/rusinfotech/?ref=bookmarks" target="_blank">
								<div class="icon"></div>
							</a>
						</div>
						<div class="social_item vk">
							<a href="https://vk.com/rit_soft" target="_blank">
								<div class="icon"></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="map">
		<div class="container">
			<div class="map_area">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8de1d1d26f1a546d8607dc2e23857f9543a62d3d49f754bd6e097bcfbd12f179&amp;width=100%&amp;height=480&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
		</div>
	</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>