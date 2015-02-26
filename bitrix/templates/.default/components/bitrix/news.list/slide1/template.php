<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?foreach($arResult["ITEMS"] as $num => $arItem):?>

<div class="block_info" id="block_<?=$num;?>">
	<h2><?=$arItem["NAME"];?></h2>
	<?=$arItem["DETAIL_TEXT"];?>
</div>

<?endforeach;?>

