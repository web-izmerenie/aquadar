<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
<div class="desc-item">
	<div class="text">
		<h3><?=$arItem['NAME'];?></h3>
		<?=$arItem['PREVIEW_TEXT'];?>
	</div>
 	<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
</div>

<?endforeach;?>
