<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<section class="publishing-view">
	<ul>

		<?foreach($arResult["ITEMS"] as $arItem):?>

		<li>
			<a href="<?=$arItem['DETAIL_PAGE_URL'];?>">
				<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>">
				<span><?=$arItem['NAME'];?></span>
			</a>
			<div class="text"><?=$arItem['PREVIEW_TEXT'];?></div>
		</li>

		<?endforeach;?>

	</ul>
</section>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>



