<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav id="main-menu">
	<ul>

		<?foreach($arResult['SECTIONS'] as $arSection){?>

		<li>
			<a <?if($_GET['SECTION_CODE'] == $arSection['CODE']){?>
			   class="active"
			   <?}?>
			   href="<?=$arSection['SECTION_PAGE_URL'];?>">
				<?=$arSection['NAME'];?></a>
		</li>

		<?}?>

	</ul>
</nav>

<section class="preview-text">

	<?foreach($arResult['SECTIONS'] as $arSection){?>
		<?if($_GET['SECTION_CODE'] == $arSection['CODE']){ print $arSection['DESCRIPTION'];}?>
	<?}?>

</section>
