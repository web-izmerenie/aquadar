<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="pointer" style="left:<?=$arItem["PROPERTIES"]["ATT_WEIGHT"]["VALUE"];?>%; top:<?=$arItem["PROPERTIES"]["ATT_TOP"]["VALUE"];?>%;"></div>
<?endforeach;?>
