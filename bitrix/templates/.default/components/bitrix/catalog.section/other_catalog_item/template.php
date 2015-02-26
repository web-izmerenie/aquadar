<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if (!empty($arResult['ITEMS']))
{?>

<ul>

	<?foreach($arResult['ITEMS'] as $arItem){?>

	<li>
		<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
		<span><?=$arItem["NAME"];?></span>
		<p><?=$arItem['PROPERTIES']['ATT_WEIGHT']['VALUE'];?> л</p>

		<?if(!empty($arItem['PROPERTIES']['ATT_LINK']['VALUE'])){?>
			<a href="<?=$arItem['PROPERTIES']['ATT_LINK']['VALUE']?>">Заказать доставку</a>
		<?}?>

		<?if(!empty($arItem['PREVIEW_TEXT'])){?>

		<div class="info_bottle">
			<?=$arItem['PREVIEW_TEXT'];?>
			<span></span>
		</div>

		<?}?>
	</li>

	<?}?>

</ul>
<?}?>
