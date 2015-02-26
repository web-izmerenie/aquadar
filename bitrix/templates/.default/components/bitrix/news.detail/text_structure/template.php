<?if(!defined( "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); $this->setFrameMode(true);?>

<div id="prewiev-text">

	<?if(strlen($arResult[ "DETAIL_TEXT"])>0):?>
		<?echo $arResult[ "DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult[ "PREVIEW_TEXT"];?>
	<?endif?>

</div>
