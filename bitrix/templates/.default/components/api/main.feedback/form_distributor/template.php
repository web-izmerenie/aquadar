<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();

$arResult['FORM_SUBMIT_VALUE'] = (strlen($arParams['FORM_SUBMIT_VALUE']) > 0) ? $arParams['FORM_SUBMIT_VALUE'] : GetMessage("MFT_SUBMIT");

if($arParams['TITLE_DISPLAY'] != 'N')
	$arResult['FORM_TITLE'] = '<h' . $arParams['FORM_TITLE_LEVEL'] . ' style="' . $arParams['FORM_STYLE_TITLE'] . '">' . $arParams['FORM_TITLE'] . '</h' . $arParams['FORM_TITLE_LEVEL'] . '>';
?>

<div class="distributor-form">
	<?=$arResult['FORM_TITLE'] ?>
	<a href="#close" class="close">×</a>

	<?if(!empty($arResult["ERROR_MESSAGE"])){?>
		<div class="ts-alert ts-alert-danger">
			<?=implode('<br>', $arResult["ERROR_MESSAGE"]);?>
		</div>
	<?}

	if(!empty($arResult["OK_MESSAGE"])){?>
		<div class="ts-alert ts-alert-success">
			<p><?=$arResult["OK_MESSAGE"] ?></p>
		</div>
	<?}?>

	<form action="<?=POST_FORM_ACTION_URI;?>" method="POST" enctype="multipart/form-data" name="api_feedback_form">
		<?=bitrix_sessid_post()?>

		<input type="hidden" name="UNIQUE_FORM_ID" value="<?= $arParams['UNIQUE_FORM_ID'];?>" />

		<?if($arParams['USE_HIDDEN_PROTECTION']):?>
			<input type="text" name="ANTIBOT[NAME]" value="<?=$arResult['ANTIBOT']['NAME'];?>" style="display:none;">
		<?endif;?>

		<?if(!empty($arParams['CUSTOM_FIELDS'])):?>

			<?foreach($arParams['CUSTOM_FIELDS'] as $fk => $FIELD){
				$arFields = explode('@', $FIELD);
				$bShowTime = ($arFields[2]=="datetime") ? true : false;
				$arGroup  = array();

				switch($arFields[1]){
					case "input":?>

						<input type="<?=$arFields[2]=='email' ? 'text' : $arFields[2];?>"
						name="CUSTOM_FIELDS[<?=$fk?>][]"
						value="<?=$arResult["CUSTOM_FIELD_".$fk]?>"
						<?if($arParams['INCLUDE_PLACEHOLDER']):?> placeholder="<?= $arFields[0] ?><? if(in_array('required', $arFields)): ?>*<? endif ?>" <?endif?>>

					<?break;

					case "textarea":?>

					<textarea name="CUSTOM_FIELDS[<?=$fk?>][]"
					<?if($arParams['INCLUDE_PLACEHOLDER']):?> placeholder="<?= $arFields[0] ?>" <?endif?>

					<? if(in_array("required", $arFields)): ?> class="required"<? endif ?>><?=$arResult["CUSTOM_FIELD_".$fk]?></textarea>

					<?break;
				}
			}?>

		<?endif;?>
		<p>Поля, отмеченные знаком * — обязательны для заполнения</p>
		<input type="submit" name="submit" value="<?=$arResult['FORM_SUBMIT_VALUE'];?>">
		<span>Наш менеджер, свяжется с вами в течение 24 часов</span>
	</form>
</div>
