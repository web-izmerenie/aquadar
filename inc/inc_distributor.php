<?
global $APPLICATION;
$dir = $APPLICATION->GetCurPage();
$arrayDir = explode('/', $dir);
?>

<section class="distributor">
	<a href="#distributor"
	<?if($arrayDir[1] === "productions"){?>
		onclick="yaCounter29125650.reachGoal('PRODUCT_DISTRIBUT'); return true;"
	<?}elseif($arrayDir[2] === "struktura.php"){?>
		onclick="yaCounter29125650.reachGoal('STRUKTURA_DISTRIBUT'); return true;"
	<?}elseif($arrayDir[2] === "geografiya-postavok.php"){?>
		onclick="yaCounter29125650.reachGoal('GEOGRAPTHY_DISTRIBUT'); return true;"
	<?}?>>
		Стать дистрибьютором
	</a>
	<div id="text">
		<p>Узнайте ваши условия
	сотрудничества.</p>
		<p>Мы ответим на заявку
	в течении 24 часов.</p>
	</div>
	<span id="arrow"></span>
</section>

<?$APPLICATION->IncludeComponent(
	"api:main.feedback",
	"form_distributor",
	array(
		"IBLOCK_TYPE" => "result_form",
		"IBLOCK_ID" => "13",
		"INSTALL_IBLOCK" => "N",
		"DISABLE_SEND_MAIL" => "N",
		"REPLACE_FIELD_FROM" => "N",
		"UNIQUE_FORM_ID" => "54d4c86c1b192",
		"OK_TEXT" => "Спасибо, ваша заявка принята!",
		"EMAIL_TO" => "mail@akvadar.ru, kudinova@akvadar.ru, tyurin@akvadar.ru, opt_manager@akvadar.ru",
		"DISPLAY_FIELDS" => array(
		),
		"REQUIRED_FIELDS" => array(
		),
		"CUSTOM_FIELDS" => array(
			0 => "Фамилия@input@text@required",
			1 => "Имя@input@text@required",
			2 => "Отчество@input@text@required",
			3 => "Ваш e-mail@input@email@required",
			4 => "Оставить сообщения@textarea",
			5 => "",
		),
		"ADMIN_EVENT_MESSAGE_ID" => array(
			0 => "8",
		),
		"USER_EVENT_MESSAGE_ID" => array(
		),
		"HIDE_FIELD_NAME" => "Y",
		"TITLE_DISPLAY" => "Y",
		"FORM_TITLE" => "Стать дистрибьютором",
		"FORM_TITLE_LEVEL" => "3",
		"FORM_STYLE_TITLE" => "",
		"FORM_STYLE" => "",
		"FORM_STYLE_DIV" => "",
		"FORM_STYLE_LABEL" => "",
		"FORM_STYLE_TEXTAREA" => "",
		"FORM_STYLE_INPUT" => "",
		"FORM_STYLE_SELECT" => "",
		"FORM_STYLE_SUBMIT" => "",
		"FORM_SUBMIT_CLASS" => "",
		"FORM_SUBMIT_ID" => "",
		"FORM_SUBMIT_VALUE" => "Отправить",
		"USE_CAPTCHA" => "N",
		"USE_HIDDEN_PROTECTION" => "Y",
		"USE_PHP_ANTISPAM" => "N",
		"PHP_ANTISPAM_LEVEL" => "1",
		"INCLUDE_JQUERY" => "Y",
		"VALIDTE_REQUIRED_FIELDS" => "Y",
		"INCLUDE_PLACEHOLDER" => "Y",
		"INCLUDE_PRETTY_COMMENTS" => "N",
		"INCLUDE_FORM_STYLER" => "N",
		"HIDE_FORM_AFTER_SEND" => "N",
		"SCROLL_TO_FORM_IF_MESSAGES" => "N",
		"SCROLL_TO_FORM_SPEED" => "1000",
		"BRANCH_ACTIVE" => "N",
		"SHOW_FILES" => "N",
		"UUID_LENGTH" => "10",
		"UUID_PREFIX" => "",
		"USER_AUTHOR_FIO" => "",
		"USER_AUTHOR_NAME" => "",
		"USER_AUTHOR_LAST_NAME" => "",
		"USER_AUTHOR_SECOND_NAME" => "",
		"USER_AUTHOR_EMAIL" => "",
		"USER_AUTHOR_PERSONAL_MOBILE" => "",
		"USER_AUTHOR_WORK_COMPANY" => "",
		"USER_AUTHOR_POSITION" => "",
		"USER_AUTHOR_PROFESSION" => "",
		"USER_AUTHOR_STATE" => "",
		"USER_AUTHOR_CITY" => "",
		"USER_AUTHOR_WORK_CITY" => "",
		"USER_AUTHOR_STREET" => "",
		"USER_AUTHOR_ADRESS" => "",
		"USER_AUTHOR_PERSONAL_PHONE" => "",
		"USER_AUTHOR_WORK_PHONE" => "",
		"USER_AUTHOR_FAX" => "",
		"USER_AUTHOR_MAILBOX" => "",
		"USER_AUTHOR_WORK_MAILBOX" => "",
		"USER_AUTHOR_SKYPE" => "",
		"USER_AUTHOR_ICQ" => "",
		"USER_AUTHOR_WWW" => "",
		"USER_AUTHOR_WORK_WWW" => "",
		"USER_AUTHOR_MESSAGE_THEME" => "",
		"USER_AUTHOR_MESSAGE" => "",
		"USER_AUTHOR_NOTES" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"SHOW_CSS_MODAL_AFTER_SEND" => "N",
		"CSS_MODAL_HEADER" => "",
		"CSS_MODAL_FOOTER" => "",
		"CSS_MODAL_CONTENT" => "",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
