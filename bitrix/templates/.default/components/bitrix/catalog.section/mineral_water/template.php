<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="preview-text">
	<?=$arResult["DESCRIPTION"];?>
</section>

<section class="items">
	<?foreach ($arResult['ITEMS_BY_GROUP'] as $nameGroup => $arItemsGroup) {?>
		<div class="category">
			<h1><?=$nameGroup;?></h1>
			<?foreach ($arItemsGroup as $key) {
				$arItem = $arResult['ITEMS'][$key]?>
				<pre><?print_r($arItem);?></pre>
			<?}?>
		</div>
	<?}?>
</section>


