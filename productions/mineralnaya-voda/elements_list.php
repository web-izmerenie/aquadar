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

<?$APPLICATION->IncludeComponent(
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
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
