<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

	<nav id="top-menu">
		<ul>
			<?foreach($arResult as $arItem):?>

				<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>

				<?if (!empty($arItem["CHILDREN"])):?>

					<ul class="inside-menu">

						<?foreach($arItem["CHILDREN"] as $arItemChild):?>

							<li><a href="<?=$arItemChild["LINK"]?>"><?=$arItemChild["TEXT"]?></a></li>

						<?endforeach?>

					</ul>

				<?endif?>

			<?endforeach?>

		</ul>
	</nav>

<?endif?>
