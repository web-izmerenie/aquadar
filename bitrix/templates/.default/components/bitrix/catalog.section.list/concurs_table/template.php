<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<div id="ofer-winners">
	<h1>Победители других этапов:</h1>
	<?foreach($arResult['SECTIONS'] as $arSection){?>
		<div class="steps">
			<ul>
				<li>
					<p><?=$arSection['NAME']?></p>
					<span>(<?=$arSection['DESCRIPTION']?>)</span>
				</li>
				<?foreach($arSection['CHILD'] as $arSectionInside){?>
					<li><a href="<?=$arSectionInside['SECTION_PAGE_URL'];?>"><?=$arSectionInside['NAME'];?></a></li>
				<?}?>
			</ul>
		</div>
	<?}?>
	<?$last_step = array_pop($arResult['SECTIONS']);
	$last_section = array_pop($last_step['CHILD']);?>
<!--	<a class="button-download" href="#">Победители конкурса</a>-->
	<a class="default-section" href="<?=$last_section['SECTION_PAGE_URL'];?>"></a>
</div>
