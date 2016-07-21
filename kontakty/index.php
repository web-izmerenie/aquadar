<?define("CONTACTS", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"contacts",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "22",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"ATT_MAIL",1=>"ATT_ADRESS",2=>"ATT_MAP",3=>"ATT_TELEPHONE",4=>"ATT_FAKS",5=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N"
	)
);?>
<section class="rekvesits">
	<h2>Реквизиты</h2>
	<h3>ООО «Аквадар»</h3>

	<p>Адрес юрид. : 344016 г. Ростов-на-Дону, пер. Элеваторный, 2</br>
	Адрес факт.:  344065, г. Ростов-на-Дону, ул. Орская, 23</p>

	<p>Телефон/факс/E-Mail: (863) 223-35-35,</br>
	<a href="mailto:mail@akvadar.ru">mail@akvadar.ru</a></p>
	<ul>
		<li>Расчетный счет: 40702810500400001850</li>
		<li>Наименование банка: ОАО КБ «Центр – Инвест» г. Ростов-на-Дону</li>
		<li>Корреспондентский счет: 30101810100000000762</li>
		<li>БИК: 046015762</li>
		<li>ИНН 6165091770</li>
		<li>ОГРН: 1026103738209</li>
	</ul>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
