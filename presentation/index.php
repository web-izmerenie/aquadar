<?define("PRESENT", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Как мы добываем минеральную воду");?>
<section id="slide1">
	<img src="/upload/present/city.jpg">
	<div class="text">
		 <?$APPLICATION->IncludeComponent(
		"bitrix:news.detail",
		"slide_text",
		Array(
			"IBLOCK_TYPE" => "content",
			"IBLOCK_ID" => "14",
			"ELEMENT_ID" => "68",
			"ELEMENT_CODE" => "",
			"CHECK_DATES" => "Y",
			"FIELD_CODE" => array(0=>"",1=>"",),
			"PROPERTY_CODE" => array(0=>"",1=>"",),
			"IBLOCK_URL" => "",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y",
			"SET_TITLE" => "N",
			"SET_BROWSER_TITLE" => "N",
			"BROWSER_TITLE" => "-",
			"SET_META_KEYWORDS" => "N",
			"META_KEYWORDS" => "-",
			"SET_META_DESCRIPTION" => "N",
			"META_DESCRIPTION" => "-",
			"SET_STATUS_404" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"ADD_ELEMENT_CHAIN" => "N",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"USE_PERMISSIONS" => "N",
			"DISPLAY_DATE" => "N",
			"DISPLAY_NAME" => "N",
			"DISPLAY_PICTURE" => "N",
			"DISPLAY_PREVIEW_TEXT" => "N",
			"USE_SHARE" => "N",
			"PAGER_TEMPLATE" => ".default",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Страница",
			"PAGER_SHOW_ALL" => "N"
		)
	);?>
	</div>
	 <section class="slide-bottom">
		 <img src="/upload/present/slide1.png">
		 <?$APPLICATION->IncludeComponent("bitrix:news.list", "slide1", Array(
			"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
				"IBLOCK_ID" => "14",	// Код информационного блока
				"NEWS_COUNT" => "4",	// Количество новостей на странице
				"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
				"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
				"SORT_BY2" => "ID",	// Поле для второй сортировки новостей
				"SORT_ORDER2" => "DESC",	// Направление для второй сортировки новостей
				"FILTER_NAME" => "",	// Фильтр
				"FIELD_CODE" => array(	// Поля
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(	// Свойства
					0 => "",
					1 => "",
				),
				"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
				"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
				"AJAX_MODE" => "N",	// Включить режим AJAX
				"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
				"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
				"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
				"CACHE_TYPE" => "A",	// Тип кеширования
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
				"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
				"SET_TITLE" => "N",	// Устанавливать заголовок страницы
				"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
				"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
				"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
				"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
				"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
				"PARENT_SECTION" => "11",	// ID раздела
				"PARENT_SECTION_CODE" => "",	// Код раздела
				"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
				"DISPLAY_DATE" => "N",	// Выводить дату элемента
				"DISPLAY_NAME" => "Y",	// Выводить название элемента
				"DISPLAY_PICTURE" => "N",	// Выводить изображение для анонса
				"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
				"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
				"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
				"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
				"PAGER_TITLE" => "Новости",	// Название категорий
				"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
				"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
				"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			),
			false
		);?>
	</section>
</section>
<section class="bottom-navigation">
<ul>
	<li id="left">← <a href="/"><span>Наша продукция</span></a></li>
	<li id="right"><a href="/presentation/slide2.php"><span>Как мы очищаем минеральную воду</span></a> →</li>
</ul>
 </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
