<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$newList = array();

foreach($arResult['SECTIONS'] as $arSection1){
	if($arSection1['DEPTH_LEVEL'] != 1) continue;

	$arSection1['CHILD'] = array();

	foreach($arResult['SECTIONS'] as $arSection2){
		if($arSection2['DEPTH_LEVEL'] != 2 || $arSection2['IBLOCK_SECTION_ID'] != $arSection1['ID']) continue;

		$arSection1['CHILD'][] = $arSection2;
	}

	$newList[] = $arSection1;
}

unset($arResult['SECTIONS']);
$arResult['SECTIONS'] = $newList;
