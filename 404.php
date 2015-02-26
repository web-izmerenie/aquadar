<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404");?>

<div class="page-404">
	<h1>Ошибка 404</h1>
	<p>Введен неверный адрес, или такой страницы больше нет.</p>
	<p>Вернитесь на <a href="/">главную</a></p>
	<img src="/upload/404-bg.png">
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
