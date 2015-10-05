<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if($_SERVER['HTTP_HOST'] == 'spb.akvadar.ru' || $_SERVER['HTTP_HOST'] == 'akvadar-spb.ru'){

	print $arResult['PROPERTIES']['text_spb']['~VALUE']['TEXT'];

}elseif($_SERVER['HTTP_HOST'] == 'mahachkala.akvadar.ru' || $_SERVER['HTTP_HOST'] == 'akvadar-mahachkala.ru'){

	print $arResult['PROPERTIES']['text_machachkala']['~VALUE']['TEXT'];

}elseif($_SERVER['HTTP_HOST'] == 'tula.akvadar.ru' || $_SERVER['HTTP_HOST'] == 'akvadar-tula.ru'){

	print $arResult['PROPERTIES']['text_tula']['~VALUE']['TEXT'];

}elseif($_SERVER['HTTP_HOST'] == 'stavropol.akvadar.ru' || $_SERVER['HTTP_HOST'] == 'akvadar-stavropol.ru'){

	print $arResult['PROPERTIES']['text_stavrapol']['~VALUE']['TEXT'];

}elseif($_SERVER['HTTP_HOST'] == 'samara.akvadar.ru' || $_SERVER['HTTP_HOST'] == 'akvadar-samara.ru'){
	print $arResult['PROPERTIES']['text_samara']['~VALUE']['TEXT'];

}else{

	print $arResult['DETAIL_TEXT'];

}?>
