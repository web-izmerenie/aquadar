<?define("HONORS", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"honors_section",
	array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "16",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"COUNT_ELEMENTS" => "N",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"VIEW_MODE" => "LIST",
		"SHOW_PARENT_NAME" => "Y",
		"SECTION_URL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"ADD_SECTIONS_CHAIN" => "N"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
