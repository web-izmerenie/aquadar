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
		Администрация Нижнекундрюченского сельского поселения</a>
	</li>
	<li><a class="fancybox" rel="gallery1" href="/upload/feedback/feedback4.jpg">
		<img src="/upload/feedback/feedback4.jpg">
		МБОУ Усть-Быстринской СОШ</a>
	</li>
	<li><a class="fancybox" rel="gallery1" href="/upload/feedback/feedback5.jpg">
		<img src="/upload/feedback/feedback5.jpg">
		Ростовский кафедральный собор Рождества Пресвятой Богородицы</a>
	</li>
</ul>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>