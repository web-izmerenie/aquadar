<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="reviews-view">

	<?foreach($arResult["ITEMS"] as $arItem):?>

		<li><a class="fancybox" rel="gallery1" href="<?=$arItem['DETAIL_PICTURE']['SRC'];?>">
			<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
			<?=$arItem['NAME'];?></a>
		</li>

	<?endforeach;?>

</ul>
