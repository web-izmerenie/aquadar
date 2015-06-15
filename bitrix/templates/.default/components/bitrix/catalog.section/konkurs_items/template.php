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
<h1>Победители недели</h1>
<p>(<?=$arResult['SEARCHABLE_CONTENT'];?>)</p>
<?if(!empty($arResult['ITEMS'])){?>
	<ul>
		<?foreach($arResult['ITEMS'] as $arItem){
		$photo = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>1280, 'height'=>1024), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>
			<li>
				<a class="fancybox" rel="gallery" href="<?=$photo['src'];?>">
					<img src="<?=$photo['src'];?>">
				</a>	
				<span class="name"><?=$arItem['NAME'];?></span>
				<span class="city">(<?=$arItem['PREVIEW_TEXT'];?>)</span>
				<span class="win-logo"></span>
			</li>
		<?}?>
	</ul>
<?}?>