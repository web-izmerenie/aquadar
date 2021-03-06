<?define("MINERAL_WATER_ITEMS", "Y");
define("NO_INSIDE_MENU", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Минеральная вода");?><?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"catalog_inside_menu",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "9",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "1",
		"SECTION_FIELDS" => array("",""),
		"SECTION_USER_FIELDS" => array("",""),
		"VIEW_MODE" => "LINE",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "N"
	)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"mineral_water_section",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "9",
		"SECTION_ID" => "",
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(0=>"",1=>"",),
		"SECTION_USER_FIELDS" => array(0=>"UF_DESCRIPTION",1=>"",2=>"",),
		"VIEW_MODE" => "LIST",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "N"
	)
);?>
<?if(!empty($COMPONENT_CATALOG_SECTION['catalog.section.list']['ID_DESC']))
{
	$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"catalog_description",
		Array(
			"IBLOCK_TYPE" => "catalog",
			"IBLOCK_ID" => "18",
			"SECTION_ID" => $COMPONENT_CATALOG_SECTION['catalog.section.list']['ID_DESC'],
			"SECTION_CODE" => "",
			"COUNT_ELEMENTS" => "N",
			"TOP_DEPTH" => "2",
			"SECTION_FIELDS" => array(0=>"",1=>"",),
			"SECTION_USER_FIELDS" => array(0=>"",1=>"",),
			"VIEW_MODE" => "LINE",
			"SHOW_PARENT_NAME" => "Y",
			"SECTION_URL" => "",
			"CACHE_TYPE" => "A",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y",
			"ADD_SECTIONS_CHAIN" => "N"
		)
	);
}?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"feedback_catalog",
	Array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "17",
		"NEWS_COUNT" => "4",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"DETAIL_PICTURE",1=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
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
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/inc/inc_distributor.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
