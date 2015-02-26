<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<h2>Холдинг «Аквадар»</h2>
<ul id="holding">
<?foreach($arResult["ITEMS"] as $arItem):?>

	<?if(!empty($arItem['PROPERTIES']['ATT_LINK']['VALUE'])){?>
		<a href="<?=$arItem['PROPERTIES']['ATT_LINK']['VALUE'];?>">
	 <?}?>

	<li>
		<div class="img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>"></div>
		<h3><?=$arItem["NAME"];?></h3>

		<?if(!empty($arItem['PROPERTIES']['ATT_LINK']['VALUE'])){?>
			</a>
		<?}?>

		<?=$arItem["DETAIL_TEXT"];?>
	</li>

<?endforeach;?>
</ul>
