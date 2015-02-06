<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)die();

if (method_exists($this, 'setFrameMode')) {
    $this->setFrameMode(true);
}

$arResult['FORM_SUBMIT_VALUE'] = (strlen($arParams['FORM_SUBMIT_VALUE']) > 0) ? $arParams['FORM_SUBMIT_VALUE'] : GetMessage("MFT_SUBMIT");

if($arParams['TITLE_DISPLAY'] != 'N')
	$arResult['FORM_TITLE'] = '<h' . $arParams['FORM_TITLE_LEVEL'] . ' style="' . $arParams['FORM_STYLE_TITLE'] . '">' . $arParams['FORM_TITLE'] . '</h' . $arParams['FORM_TITLE_LEVEL'] . '>';

$tpl_class_name = 'tpl_default';?>

<div class="form-call">
	<?= $arResult['FORM_TITLE'] ?>
	<a href="#close" class="close">×</a>

	<?if(!empty($arResult["ERROR_MESSAGE"]))
	{?>
		<div class="ts-alert ts-alert-danger">
			<?= implode('<br>', $arResult["ERROR_MESSAGE"]); ?>
		</div>
	<?}

	if(!empty($arResult["OK_MESSAGE"]))
	{?>
		<div class="ts-alert ts-alert-success">
			<p><?= $arResult["OK_MESSAGE"] ?></p>
		</div>
	<?}?>

	<form action="<?=POST_FORM_ACTION_URI;?>" method="POST" enctype="multipart/form-data" name="api_feedback_form">
		<?= bitrix_sessid_post() ?>
		<input type="hidden" name="UNIQUE_FORM_ID" value="<?= $arParams['UNIQUE_FORM_ID']; ?>" />

		<? if($arParams['USE_HIDDEN_PROTECTION']): ?>
			<input type="text" name="ANTIBOT[NAME]" value="<?=$arResult['ANTIBOT']['NAME'];?>" style="display:none;">
		<? endif; ?>

		<?if(!empty($arParams['CUSTOM_FIELDS'])):?>
			<?foreach($arParams['CUSTOM_FIELDS'] as $fk => $FIELD){

				$arFields = explode('@', $FIELD);
				$bShowTime = ($arFields[2]=="datetime") ? true : false;
				$optgroup = false; //Have groups in <select>
				$arGroup  = array();

				switch($arFields[1])
				{
					case "input":?>
						<input type="<?=$arFields[2]=='email' ? 'text' : $arFields[2];?>"
						name="CUSTOM_FIELDS[<?=$fk?>][]"
						value="<?=$arResult["CUSTOM_FIELD_".$fk]?>"
						id="input_id<?=$fk?>"
						<?if($arParams['INCLUDE_PLACEHOLDER']):?> placeholder="<?= $arFields[0] ?>" <?endif?>
						<? if(in_array("required", $arFields)): ?> class="required"<? endif ?>>
					<?break;
				}

			}
			?>
		<? endif; ?>
		<p>Все поля обязательны для заполне
		<input type="submit" name="submit" value="<?=$arResult['FORM_SUBMIT_VALUE'];?>">
		<span>Мы свяжемся с вами в течение 15 минут</span>
	</form>
</div>
