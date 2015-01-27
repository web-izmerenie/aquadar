<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="last-news">
	<ul>
		<?foreach(array_slice ($arResult["ITEMS"], 0, 3) as $arItem)
		{?>
			<li>
				<a href="<?=$arItem["DETAIL_PAGE_URL"];?>">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>">
					<span><?=$arItem["NAME"];?></span>
				</a>
				<div class="prewiev-text"><?=$arItem["PREVIEW_TEXT"];?></div>
			</li>
		<?}?>
	</ul>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

