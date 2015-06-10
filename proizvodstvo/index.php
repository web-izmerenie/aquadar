<?header('HTTP/1.1 301 Moved Permanently');
header ('Location: zavod-1.php');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Производство");
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
