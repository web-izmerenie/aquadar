<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<section class="desc-map">
	<h1>Мы поставляем нашу продукцию в регионы:</h1>
	<ul>
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>

		<li>
			<?=$arItem["NAME"];?>
			<ul>
				<?foreach($arItem["PROPERTIES"]["ATT_CITY"]["VALUE"] as $city){?>
					<li><?=$city;?></li>
				<?}?>
			</ul>
		</li>

	<?endforeach;?>
	</ul>
</section>
