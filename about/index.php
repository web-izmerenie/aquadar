<?
header('HTTP/1.1 301 Moved Permanently');
header ('Location: struktura.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
