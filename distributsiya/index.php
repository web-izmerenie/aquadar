<?define("DISTRIBUTION", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Дистрибуция");
?><section class="desc_text"> <b>Цель работы дистрибьютора — поддерживать и развивать в своем регионе стабильную сбытовую сеть, постоянно и активно распространяющую ассортимент продукции ООО «Аквадар».</b>
<p>
	Условия сотрудничества для наших дистрибьюторов следующие:
</p>
<ol>
	<li>Наличие желания работать и зарабатывать, стабильно развиваясь совместно с партнером-производителем.</li>
	<li>Наличие офиса (торговой площадки), оборудованного телефонной связью и компьютерами с доступом в интернет.</li>
	<li>Наличие торговых представителей и менеджеров (торговый отдел).</li>
	<li>Наличие складских помещений с возможностью хранения продукции, в том числе в зимний период времени.</li>
	<li>Наличие автопарка, осуществляющего прямую доставку в торговые точки вашего региона.</li>
	<li>Наличие стабильной сбытовой сети, покрывающей ваш регион.</li>
</ol>
 <b>Для улучшения результатов нашей совместной работы мы рады представить Вам нашу концепцию работы с партнерами, в основу которой легли наиболее эффективные маркетинговые мероприятия, методы и технологии.</b> </section> <section class="cooperation"> <b>Используя обратную связь с Вами, мы выявили основные направления для совместного сотрудничества:</b>
<ol>
	<li>Информационная поддержка
	<div class="text">
		Ваша информированность о деятельности нашей компании — часть успеха Ваших продаж. С помощью нашего сайта и прямой почтовой рассылки мы будем регулярно информировать Вас о новостях нашей компании и успехах наших партнеров, новых проектах, рекламных и специальных акциях.
	</div>
 </li>
	<li>Рекламная поддержка
	<div class="text">
		В рамках сотрудничества наши партнеры могут рассчитывать на рекламную поддержку в виде печатных рекламных материалов о продукции компании.
	</div>
 </li>
	<li>Специальные проекты и совместные акции
	<div class="text">
		Мы предполагаем с нашими партнерами проведение совместных маркетинговых проектов и специальных акций.<br>
		 Компания «Аквадар» всегда открыта для общения и готова обсуждать совместные акции, которые с точки зрения партнера приведут к продвижению продукта на региональном рынке.
	</div>
 </li>
	<li>Поддержка продаж на местах
	<div class="text">
		В случае, если Вы реализуете клиенту крупный проект, который может состояться только при дополнительных скидках, а Ваша скидка еще не позволяет сделать ожидаемого предложения, мы готовы рассматривать компромиссный вариант по ценообразованию по данному проекту.<br>
		 В случае, когда из Вашего региона мы получили обращение по приобретению нашей продукции, это обращение мы с радостью переадресуем Вам.
	</div>
 </li>
	<li>Транспортно-логистические услуги
	<div class="text">
		В случае, если у Вас нет собственного многотоннажного автопарка, наш логистический отдел поможет Вам найти оптимальные решения в поиске транспорта для перевозки нашей продукции от склада производителя до склада дистрибьютора.
	</div>
 </li>
</ol>
 </section>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"distribution_logo",
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "21",
		"NEWS_COUNT" => "100",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "ID",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
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
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<section class="map"><img src="/upload/map.png"></section>
<?require($_SERVER["DOCUMENT_ROOT"]."/inc/inc_distributor.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
