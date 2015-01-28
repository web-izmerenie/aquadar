<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="news-detail">
	<h1><?=$arResult['NAME'];?></h1>
	<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" id="prewiev-img">
	<div class="prewiev-text"><?=$arResult['PREVIEW_TEXT'];?></div>
	<div class="text"><?=$arResult['DETAIL_TEXT'];?></div>
</section>

