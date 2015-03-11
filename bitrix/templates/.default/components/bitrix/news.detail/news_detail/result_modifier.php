<?
$arSort = array(
		$arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"],
		$arParams["SORT_BY2"]=>$arParams["SORT_ORDER2"],
	);

$arSelect = array(
		"ID",
		"NAME",
		"PREVIEW_PICTURE",
		"DETAIL_PAGE_URL"
	);

$arFilter = array (
		"IBLOCK_ID" => $arResult["IBLOCK_ID"],
		//"SECTION_CODE" => $arParams["SECTION_CODE"],
		"ACTIVE" => "Y",
		"CHECK_PERMISSIONS" => "Y",
	);

$arNavParams = array(
		"nPageSize" => 1,
		"nElementID" => $arResult["ID"],
	);


$arItems = Array();
$rsElement = CIBlockElement::GetList($arSort, $arFilter, false, $arNavParams, $arSelect);
$rsElement->SetUrlTemplates($arParams["DETAIL_URL"]);
while($obElement = $rsElement->GetNextElement()){
		$arItems[] = $obElement->GetFields();

}

if(count($arItems)==3):
	$arResult["TORIGHT"] = Array("NAME"=>$arItems[0]["NAME"], "URL"=>$arItems[0]["DETAIL_PAGE_URL"], "PICTURE"=>CFile::GetPath($arItems[0]["PREVIEW_PICTURE"]));
	$arResult["TOLEFT"] = Array("NAME"=>$arItems[2]["NAME"], "URL"=>$arItems[2]["DETAIL_PAGE_URL"], "PICTURE"=>CFile::GetPath($arItems[2]["PREVIEW_PICTURE"]) );
elseif(count($arItems)==2):
	if($arItems[0]["ID"]!=$arResult["ID"])
		$arResult["TORIGHT"] = Array("NAME"=>$arItems[0]["NAME"], "URL"=>$arItems[0]["DETAIL_PAGE_URL"], "PICTURE"=>CFile::GetPath($arItems[0]["PREVIEW_PICTURE"]));
	else
		$arResult["TOLEFT"] = Array("NAME"=>$arItems[1]["NAME"], "URL"=>$arItems[1]["DETAIL_PAGE_URL"], "PICTURE"=>CFile::GetPath($arItems[1]["PREVIEW_PICTURE"]));
endif;

$arResult["MORE_PHOTO"] = array();

if(isset($arResult["PROPERTIES"]["ATT_PHOTO"]["VALUE"]) && is_array($arResult["PROPERTIES"]["ATT_PHOTO"]["VALUE"]))
{

	foreach($arResult["PROPERTIES"]["ATT_PHOTO"]["VALUE"] as $FILE)
	{

		$FILE = CFile::GetFileArray($FILE);

		if(is_array($FILE))
			$arResult["MORE_PHOTO"][]=$FILE;

	}
}
