<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="news-detail">
	<h1><?=$arResult['NAME'];?></h1>
	<img src="<?=$arResult['DETAIL_PICTURE']['SRC'];?>" id="prewiev-img">
	<div class="prewiev-text"><?=$arResult['PREVIEW_TEXT'];?></div>
	<div class="text"><?=$arResult['DETAIL_TEXT'];?></div>
</section>
<section class="photogalery">
		<ul>
			<?foreach($arResult['MORE_PHOTO'] as $photo){
				$smallPhoto = CFile::ResizeImageGet($photo,
													array('width'=>200, 'height'=>130),
													BX_RESIZE_IMAGE_EXACT, true);
				$bigPhoto = CFile::ResizeImageGet($photo,
													array('width'=>1024, 'height'=>768),
													BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

				<li><a class="fancybox" rel="gallery1" href="<?=$bigPhoto['src'];?>"><img width="<?=$smallPhoto['width'];?>"
													   height="<?=$smallPhoto['height'];?>"
													   src="<?=$smallPhoto['src'];?>"></a></li>
			<?}?>
		</ul>
	</section>
<section class="next-news">
	<ul>
		<?if(is_array($arResult["TOLEFT"])):?>
			<li><a href="<?=$arResult["TOLEFT"]["URL"]?>"><img src="<?=$arResult["TOLEFT"]["PICTURE"]?>"><p><?=$arResult["TOLEFT"]["NAME"]?></p></a><span>&#8592;</span></li>
		<?endif?>

		<?if(is_array($arResult["TORIGHT"])):?>
			<li><a href="<?=$arResult["TORIGHT"]["URL"]?>"><img src="<?=$arResult["TORIGHT"]["PICTURE"]?>"><p><?=$arResult["TORIGHT"]["NAME"]?></p></a><span>&#8594;</span></li>
		<?endif?>

	</ul>
</section>
