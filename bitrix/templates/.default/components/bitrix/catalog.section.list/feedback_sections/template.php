<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

foreach ($arResult['SECTIONS'] as $arSection)
{?>
	<div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"rewiews",
			Array(
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => "17",
				"NEWS_COUNT" => "100",
				"SORT_BY1" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "ID",
				"SORT_ORDER2" => "DESC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array("DETAIL_PICTURE", ""),
				"PROPERTY_CODE" => array("", ""),
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
				"PARENT_SECTION" => $arSection['ID'],
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
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
	</div>
<?}?>
