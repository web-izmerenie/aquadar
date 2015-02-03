<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['ITEMS'] as $key => $arItem) {
    $arSectionList = array();
    $rsSections = CIBlockElement::GetElementGroups($arItem['ID']);
    while ($arSection = $rsSections->Fetch())
    {
        $arSectionList[] = array(
                'ID' => $arSection['ID'],
                'NAME' => $arSection['NAME'],
            );
        $arResult['ITEMS_BY_GROUP'][$arSection['NAME']][] = $key;
    }
    $arItem['SECTION_NAME'] = $arSectionList;
    $arResult['ITEMS'][$key] = $arItem;

}
?>
