<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult['ITEMS'])){?>
<ul>
	<?foreach($arResult['ITEMS'] as $arItem){?>
		<li>
			<a class="fancybox" rel="gallery1" href="<?=$arItem['DETAIL_PICTURE']['SRC'];?>">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
			</a>
	</li>
	<?}
}?>
</ul>

