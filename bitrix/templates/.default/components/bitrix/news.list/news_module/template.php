<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="bottom-block">
	<section class="inside-content">
		<div class="last-news">
			<h1>Последние события</h1>
			<ul>

				<?foreach($arResult["ITEMS"] as $arItem):?>

					<li>
						<a href="<?=$arItem["DETAIL_PAGE_URL"];?>">
							<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>">
							<span><?=$arItem["NAME"];?></span>
						</a>
						<div class="prewiev-text"><?=$arItem["PREVIEW_TEXT"];?></div>
					</li>

				<?endforeach;?>

			</ul>
		</div>
	</section>
</section>
