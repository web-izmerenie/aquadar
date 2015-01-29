<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аквадар");
?><?$APPLICATION->IncludeComponent("bitrix:news.detail", "main_page_top", Array(
	"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
	"IBLOCK_ID" => "7",	// Код информационного блока
	"ELEMENT_ID" => "45",	// ID новости
	"ELEMENT_CODE" => "",	// Код новости
	"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	"FIELD_CODE" => array(	// Поля
		0 => "",
		1 => "",
	),
	"PROPERTY_CODE" => array(	// Свойства
		0 => "",
		1 => "",
	),
	"IBLOCK_URL" => "",	// URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
	"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
	"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
	"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
	"SET_TITLE" => "N",	// Устанавливать заголовок страницы
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
	"ACTIVE_DATE_FORMAT" => "",	// Формат показа даты
	"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
	"DISPLAY_DATE" => "N",	// Выводить дату элемента
	"DISPLAY_NAME" => "N",	// Выводить название элемента
	"DISPLAY_PICTURE" => "Y",	// Выводить детальное изображение
	"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
	"USE_SHARE" => "N",	// Отображать панель соц. закладок
	"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
	"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
	"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
	"PAGER_TITLE" => "Страница",	// Название категорий
	"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	),
	false
);?>
<div id="main-bottom">
		<div class="content-frame">
			<a href="/mineral_water.php" class="main-items">
				<img src="/upload/main-item1.png">
				<div class="circle-description" id="mineral-water">
					<div class="circle-content">
						<h1>Минеральная вода</h1>
						<p>ООО «Быстра»</p>
						<ul>
							<li>ТМ «Серебряная»</li>
							<li>ТМ «Аквада»</li>
							<li>ТМ «Вода для всех»</li>
						</ul>
					</div>
				</div>
			</a>
			<a href="/limonade.php" class="main-items">
				<img src="/upload/main-item2.png">
				<div class="circle-description" id="limonad">
					<div class="circle-content">
						<h1>Лимонады</h1>
						<p>ООО «Аквадар»</p>
						<ul>
							<li>ТМ «Аквадар»</li>
							<li>ТМ «Ситро»</li>
						</ul>
					</div>
				</div>
			</a>
			<a href="/juice.php" class="main-items">
				<img src="/upload/main-item3.png">
				<div class="circle-description" id="juice">
					<div class="circle-content">
						<h1>Сокосодержащие напитки</h1>
						<p>ООО «Аквадар»</p>
						<ul>
							<li>ТМ «Южный день»</li>
						</ul>
					</div>
				</div>
			</a>
		</div>
	</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>