<?define("REVIEWS", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");?>
<ul class="reviews-view">
	<li><a class="fancybox" rel="gallery1" href="/upload/feedback/feedback1.png">
		<img src="/upload/feedback/feedback1.png">
		Баскетбольный клуб «Ростов-Дон»</a>
	</li>
	<li><a class="fancybox" rel="gallery1" href="/upload/feedback/feedback2.png">
		<img src="/upload/feedback/feedback2.png">
		Федерация баскетбола РО</a>
	</li>
	<li><a class="fancybox" rel="gallery1" href="/upload/feedback/feedback3.jpg">
		<img src="/upload/feedback/feedback3.jpg">
		Глава Нижнекундрюченского сельского поселедния</a>
	</li>
</ul>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
