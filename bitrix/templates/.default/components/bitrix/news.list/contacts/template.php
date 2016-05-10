<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<nav id="main-menu">
	<ul class="cities-list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<li><a href="#map_<?=$arItem['ID']?>"><?=$arItem['NAME']?></a></li>
		<?endforeach;?>
	</ul>
</nav>
<?$APPLICATION->IncludeFile("/include/contacts_block.php", Array(), Array("MODE" => "html"));?>
<ul>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<li id="map_<?=$arItem['ID']?>">
			<h3><?=$arItem["NAME"];?></h3>
			<div class="map">
				<?=$arItem["PROPERTIES"]["ATT_MAP"]["~VALUE"]["TEXT"];?>
				<div class="info-map">
					<div class="text">
						<?=$arItem["PROPERTIES"]["ATT_ADRESS"]["~VALUE"]["TEXT"];?>
						<p>
							 Телефоны:<br>
							 <?foreach ($arItem["PROPERTIES"]["ATT_TELEPHONE"]["VALUE"] as $telephone){
								echo $telephone;
								echo "<br>";
							}?>
						</p>
						<p>
							<?if($arItem["PROPERTIES"]["ATT_FAKS"]["VALUE"]){?>
								 Факс:<br>
								 <?foreach ($arItem["PROPERTIES"]["ATT_FAKS"]["VALUE"] as $faks){
									echo $faks;
									echo "<br>";
								}?>
							<?}?>
						</p>
						<?foreach ($arItem["PROPERTIES"]["ATT_MAIL"]["VALUE"] as $mail){?>
							<a href="mailto:<?=$mail;?>"><?=$mail?></a>
						<?}?>
					</div>
				</div>
			</div>
		</li>
	<?endforeach;?>
</ul>
