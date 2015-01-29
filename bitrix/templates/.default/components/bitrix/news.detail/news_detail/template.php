<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="news-detail">
	<h1><?=$arResult['NAME'];?></h1>
	<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" id="prewiev-img">
	<div class="prewiev-text"><?=$arResult['PREVIEW_TEXT'];?></div>
	<div class="text"><?=$arResult['DETAIL_TEXT'];?></div>
</section>
<section class="next-news">
	<ul>
		<?if(is_array($arResult["TOLEFT"])):?>
			<li><a href="<?=$arResult["TOLEFT"]["URL"]?>"><img src="<?=$arResult["TOLEFT"]["PICTURE"]?>"><span><?=$arResult["TOLEFT"]["NAME"]?></span></a></li>
		<?endif?>

		<?if(is_array($arResult["TORIGHT"])):?>
			<li><a href="<?=$arResult["TORIGHT"]["URL"]?>"><img src="<?=$arResult["TORIGHT"]["PICTURE"]?>"><span><?=$arResult["TORIGHT"]["NAME"]?></span></a></li>
		<?endif?>

	</ul>
</section>


