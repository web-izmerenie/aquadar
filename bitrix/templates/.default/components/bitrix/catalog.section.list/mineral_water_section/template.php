<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult['SECTIONS'])){?>

<section class="items" id="<?=$_GET['SECTION_CODE'];?>">

	<?foreach($arResult['SECTIONS'] as $arSections){?>

		<div class="category">
			<h1><?=$arSections['NAME'];?></h1>

			<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "mineral_water_item", Array(
				"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
					"IBLOCK_ID" => "9",	// Инфоблок
					"SECTION_ID" => $arSections['ID'],	// ID раздела
					"SECTION_CODE" => "",	// Код раздела
					"SECTION_USER_FIELDS" => array(	// Свойства раздела
						0 => "",
						1 => "",
					),
					"ELEMENT_SORT_FIELD" => "sort",	// По какому полю сортируем элементы
					"ELEMENT_SORT_ORDER" => "asc",	// Порядок сортировки элементов
					"ELEMENT_SORT_FIELD2" => "id",	// Поле для второй сортировки элементов
					"ELEMENT_SORT_ORDER2" => "desc",	// Порядок второй сортировки элементов
					"FILTER_NAME" => "arrFilter",	// Имя массива со значениями фильтра для фильтрации элементов
					"INCLUDE_SUBSECTIONS" => "A",	// Показывать элементы подразделов раздела
					"SHOW_ALL_WO_SECTION" => "N",	// Показывать все элементы, если не указан раздел
					"PAGE_ELEMENT_COUNT" => "30",	// Количество элементов на странице
					"LINE_ELEMENT_COUNT" => "3",	// Количество элементов выводимых в одной строке таблицы
					"PROPERTY_CODE" => array(	// Свойства
						0 => "ATT_WEIGHT",
						1 => "ATT_LINK",
					),
					"OFFERS_LIMIT" => "5",	// Максимальное количество предложений для показа (0 - все)
					"TEMPLATE_THEME" => "blue",	// Цветовая тема
					"MESS_BTN_BUY" => "Купить",	// Текст кнопки "Купить"
					"MESS_BTN_ADD_TO_BASKET" => "В корзину",	// Текст кнопки "Добавить в корзину"
					"MESS_BTN_SUBSCRIBE" => "Подписаться",	// Текст кнопки "Уведомить о поступлении"
					"MESS_BTN_DETAIL" => "Подробнее",	// Текст кнопки "Подробнее"
					"MESS_NOT_AVAILABLE" => "Нет в наличии",	// Сообщение об отсутствии товара
					"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
					"DETAIL_URL" => "",	// URL, ведущий на страницу с содержимым элемента раздела
					"SECTION_ID_VARIABLE" => "SECTION_CODE",	// Название переменной, в которой передается код группы
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
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
					"SET_STATUS_404" => "N",	// Устанавливать статус 404, если не найдены элемент или раздел
					"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
					"ACTION_VARIABLE" => "action",	// Название переменной, в которой передается действие
					"PRODUCT_ID_VARIABLE" => "id",	// Название переменной, в которой передается код товара для покупки
					"PRICE_CODE" => "",	// Тип цены
					"USE_PRICE_COUNT" => "N",	// Использовать вывод цен с диапазонами
					"SHOW_PRICE_COUNT" => "1",	// Выводить цены для количества
					"PRICE_VAT_INCLUDE" => "N",	// Включать НДС в цену
					"BASKET_URL" => "/personal/basket.php",	// URL, ведущий на страницу с корзиной покупателя
					"USE_PRODUCT_QUANTITY" => "N",	// Разрешить указание количества товара
					"ADD_PROPERTIES_TO_BASKET" => "Y",	// Добавлять в корзину свойства товаров и предложений
					"PRODUCT_PROPS_VARIABLE" => "prop",	// Название переменной, в которой передаются характеристики товара
					"PARTIAL_PRODUCT_PROPERTIES" => "N",	// Разрешить добавлять в корзину товары, у которых заполнены не все характеристики
					"PRODUCT_PROPERTIES" => "",	// Характеристики товара
					"DISPLAY_COMPARE" => "N",	// Разрешить сравнение товаров
					"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
					"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
					"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
					"PAGER_TITLE" => "Товары",	// Название категорий
					"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
					"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
					"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
					"ADD_PICT_PROP" => "-",	// Дополнительная картинка основного товара
					"LABEL_PROP" => "-",	// Свойство меток товара
					"MESS_BTN_COMPARE" => "Сравнить",	// Текст кнопки "Сравнить"
				),
				false
			);?>
	</div>

	<?}?>

</section>

<?}?>

