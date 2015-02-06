<?define("PRESENT", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Разливаем и упаковываем");?>
<section id="slide3">
	<section class="text-top">
		<p>После очистки и насыщения углекислым газом вода разливается по бутылкам и закрывается крышкой.</p>
		<p>Мы производим и упаковываем до 18 000 бутылок в час.</p>
	</section>
	<section class="video">
		<a class="play" href="#play"></a>
		<video poster="/upload/present/video.jpg">
			<source src="/upload/video/Rolik_Akvadar_New_01.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
			<source src="/upload/video/Rolik_Akvadar_New_01.webmsd.webm" type='video/webm; codecs="vp8.0, vorbis"'>
			<source src="/upload/karier/video/video.ogg" type='video/ogg; codecs="theora, vorbis"'>
			<p>Обновите ваш браузер чтобы просмотреть видео.</p>
		</video>
	</section>
	<section class="text-bottom">
		<img src="/upload/present/slide3.jpg">
		<div class="text-box">
			<h2>Свой парк машин</h2>
			<p>Собственный автопарк различной вместимости. Отправляем до 350 тонн продукции ежедневно.</p>
			<p>Доставим любой объем!</p>
		</div>
		<div class="map">
			<img src="/upload/present/map.jpg">
			<a href="/about/geografiya-postavok.php"><span>География поставок</span></a>
		</div>
	</section>
</section>
<section class="bottom-navigation">
	<ul>
		<li id="left">&#8592; <a href="/presentation/slide2.php"><span>Как мы очищаем
минеральную воду</span></a></li>
	</ul>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
