<?define('STRUCTURE', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Структура");
$APPLICATION->SetTitle("О компании");?>
<?$APPLICATION->IncludeComponent("bitrix:news.detail", "text_structure", Array(
	"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"IBLOCK_ID" => "15",	// Код информационного блока
		"ELEMENT_ID" => "77",	// ID новости
		"ELEMENT_CODE" => "",	// Код новости
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(	// Свойства
			0 => "ATT_LINK",
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
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "N",	// Выводить название элемента
		"DISPLAY_PICTURE" => "N",	// Выводить детальное изображение
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"PAGER_TITLE" => "Страница",	// Название категорий
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
	),
	false
);?>
	<h2>Холдинг «Аквадар»</h2>
	<ul id="holding">
		<li>
			<div class="img"><img src="/upload/structure-item1.jpg"></div>
			<h3>ООО «Быстра»</h3>
			<div class="text">Производство природной минеральной воды для торговых марок:</div>
			<ul>
				<li>ТМ «Серебряная»</li>
				<li>ТМ «Аквада»</li>
				<li>ТМ «Вода для всех»</li>
			</ul>
		</li>
		<li>
			<div class="img"><img src="/upload/structure-item2.jpg"></div>
			<h3>ООО «Аквадар»</h3>
			<div class="text">Производство лимонада для торговых марок:</div>
			<ul>
				<li>ТМ «Аквадар»</li>
				<li>ТМ «Ситро»</li>
				<li>ТМ «Южный день»</li>
			</ul>
		</li>
		<li><a href="http://легион-фуд.рф/">
				<div class="img"><img src="/upload/structure-item3.jpg"></div>
				<h3>ООО «Легион»</h3>
			</a>
			<div class="text">Прямая доставка продукции ООО «Аквадар»
				и ООО «Быстра» в магазины Ростова-на-Дону,<br> Аксая, Батайска, Новочеркасска и Таганрога.<br>
	Официальный дистрибутор.</div>
		</li>
		<li><a href="http://serebryanaya161.ru/">
				<div class="img"><img src="/upload/structure-item4.jpg"></div>
				<h3>ООО «Акватика»</h3>
			</a>
			<div class="text">Доставка природной минеральной воды<br> «Серебряная» 19 л в офисы и квартиры<br> Ростова-на-Дону.<br>
	Оптовые поставки по Ростовской области. </div>
		</li>
	</ul>
	<div class="advantages">
		<ul>
			<li><img src="/upload/structure-item5.jpg"><p>Большой ассортимент продукции</p></li>
			<li><img src="/upload/structure-item6.jpg"><p>Собственное производство</p></li>
			<li><img src="/upload/structure-item7.jpg"><p>Контроль качества</p></li>
		</ul>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/inc/inc_distributor.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
