<?define("PRESENT", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Разливаем и упаковываем");?>
<section id="slide3">
	<section class="text-top">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.detail",
			"slide_text",
			Array(
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => "14",
				"ELEMENT_ID" => "71",
				"ELEMENT_CODE" => "",
				"CHECK_DATES" => "Y",
				"FIELD_CODE" => array(0=>"",1=>"",),
				"PROPERTY_CODE" => array(0=>"",1=>"",),
				"IBLOCK_URL" => "",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"BROWSER_TITLE" => "-",
				"SET_META_KEYWORDS" => "N",
				"META_KEYWORDS" => "-",
				"SET_META_DESCRIPTION" => "N",
				"META_DESCRIPTION" => "-",
				"SET_STATUS_404" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"ADD_ELEMENT_CHAIN" => "N",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"USE_PERMISSIONS" => "N",
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "N",
				"DISPLAY_PICTURE" => "N",
				"DISPLAY_PREVIEW_TEXT" => "N",
				"USE_SHARE" => "N",
				"PAGER_TEMPLATE" => ".default",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Страница",
				"PAGER_SHOW_ALL" => "N"
			)
		);?>
	</section>
	<section class="video">
		<a class="play" href="#play"></a>
		<video poster="/upload/present/video.jpg" controls="controls">
			<source src="/upload/video/Rolik_Akvadar_New_01.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
			<source src="/upload/video/Rolik_Akvadar_New_01.webmsd.webm" type='video/webm; codecs="vp8.0, vorbis"'>
			<source src="/upload/karier/video/video.ogg" type='video/ogg; codecs="theora, vorbis"'>
			<p>Обновите ваш браузер чтобы просмотреть видео.</p>
		</video>
	</section>
	<section class="text-bottom">
		<img src="/upload/present/slide3.jpg">
		<div class="text-box">
			<?$APPLICATION->IncludeComponent(
				"bitrix:news.detail",
				"slide_text",
				Array(
					"IBLOCK_TYPE" => "content",
					"IBLOCK_ID" => "14",
					"ELEMENT_ID" => "72",
					"ELEMENT_CODE" => "",
					"CHECK_DATES" => "Y",
					"FIELD_CODE" => array(0=>"",1=>"",),
					"PROPERTY_CODE" => array(0=>"",1=>"",),
					"IBLOCK_URL" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_GROUPS" => "Y",
					"SET_TITLE" => "N",
					"SET_BROWSER_TITLE" => "N",
					"BROWSER_TITLE" => "-",
					"SET_META_KEYWORDS" => "N",
					"META_KEYWORDS" => "-",
					"SET_META_DESCRIPTION" => "N",
					"META_DESCRIPTION" => "-",
					"SET_STATUS_404" => "N",
					"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
					"ADD_SECTIONS_CHAIN" => "N",
					"ADD_ELEMENT_CHAIN" => "N",
					"ACTIVE_DATE_FORMAT" => "d.m.Y",
					"USE_PERMISSIONS" => "N",
					"DISPLAY_DATE" => "N",
					"DISPLAY_NAME" => "Y",
					"DISPLAY_PICTURE" => "N",
					"DISPLAY_PREVIEW_TEXT" => "N",
					"USE_SHARE" => "N",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "N",
					"PAGER_TITLE" => "Страница",
					"PAGER_SHOW_ALL" => "N"
				)
			);?>
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
