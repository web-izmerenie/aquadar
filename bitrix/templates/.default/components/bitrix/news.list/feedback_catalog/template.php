<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<section class="feedback-catalog">
	<a class="title" href="/about/reviews.php">Отзывы</a>
	<ul>

		<?foreach($arResult["ITEMS"] as $arItem):?>

		<li>
			<a class="fancybox" rel="gallery1" href="<?=$arItem['DETAIL_PICTURE']['SRC'];?>">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
				<span><?=$arItem['NAME'];?></span>
			</a>
		</li>

		<?endforeach;?>

	</ul>
</section>
