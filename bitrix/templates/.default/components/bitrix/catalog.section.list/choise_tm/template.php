<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="trademark-items">
	<ul>
		<?foreach($arResult['SECTIONS'] as $arSection){?>
			<li class="item"><a href="<?=$arSection["SECTION_PAGE_URL"];?>"><img src="<?=$arSection["PICTURE"]["SRC"];?>"><span><?=$arSection["NAME"];?></span></a></li>
		<?}?>
	</ul>
</section>
