<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div id="main-top">
	<div class="content-frame">

		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>

			<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"/>

		<?endif?>

		<p><?echo $arResult["DETAIL_TEXT"];?></p>
	</div>
</div>
