<?define("TRADEMARK", "Y");
define("NO_INSIDE_MENU", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Минеральная вода");
?>
<section class="trademark-items">
	<ul>
		<li class="item"><a href="/productions/mineralnaya-voda/serebryannaya.php"><img src="/upload/tm_item1.jpg"><span>ТМ «Серебряная»</span></a></li>
		<li class="item"><a href="/productions/mineralnaya-voda/akvada.php"><img src="/upload/tm_item2.jpg"><span>ТМ «Аквада»</span></a></li>
		<li class="item"><a href="#"><img src="/upload/tm_item3.jpg"><span>ТМ «Вода для всех»</span></a></li>
	</ul>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
