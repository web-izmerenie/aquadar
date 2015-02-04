<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="main-bottom">
	<div class="content-frame">

		<?foreach($arResult["ITEMS"] as $arItem):?>

			<a href="<?=$arItem["PROPERTIES"]["ATT_LINK"]["~VALUE"];?>" class="main-items">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>">
				<div class="circle-description" id="<?=$arItem["PROPERTIES"]["ATT_COLOR_BACKGROUND"]["VALUE_XML_ID"];?>">
					<div class="circle-content">
						<h1><?=$arItem["NAME"];?></h1>
						<p><?=$arItem["PROPERTIES"]["ATT_CORPORATION"]["VALUE"];?></p>
						<?=$arItem["PREVIEW_TEXT"];?>
					</div>
				</div>
			</a>

		<?endforeach;?>

	</div>
</div>
