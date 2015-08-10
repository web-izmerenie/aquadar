<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="partners">
	<b>С нами успешно сотрудничают:</b>
	<ul>

		<?foreach($arResult["ITEMS"] as $arItem):?>

			<li><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>"></li>

		<?endforeach;?>

	</ul>
</section>

