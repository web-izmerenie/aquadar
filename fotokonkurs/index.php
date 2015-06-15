<?define('KONKURS', 'Y');
define('FULL_WIDTH', 'Y');
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Фотоконкурс");?>
<div class="inside-content">
	<h1>Фотоконкурс</h1>
	<a class="button-download" href="/upload/pravila.doc">Скачать условия конкурса</a>
	<img id="banner" src="upload/konkurs.png">
</div>
<div id="active">
	<div class="inner">
		<ul>
			<li>
				<img src="upload/circle1.png">
				<h1>Сделай фото</h1>
				<span>с минеральной водой<br>
	«Серебряная»<br>
	 во время отдыха (на рыбалке, пляже, пикнике, туристической экскурсии,  стадионе)</span>
			</li>
			<li>
				<img src="upload/circle2.png">
				<h1>Загрузи в соцсети</h1>
				<span>в одну из наших групп в «Одноклассниках», «Фейсбуке», «вКонтакте»</span>
			</li>
			<li>
				<img src="upload/circle3.png">
				<h1>Получай призы</h1>
				<span>Планшетные ПК, ноутбуки и суперприз - ЖК-телевизор</span>
			</li>
		</ul>
		<img class="arrow" id="first" src="upload/first_arrow.png">
		<img class="arrow" id="second" src="upload/second_arrow.png">
	</div>
</div>
<div id="condition">
	<div id="top-wrap"></div>
	<div class="inner">
		<a class="condition-link" href="#">Условия конкурса<span></span></a>
		<div class="text">
			<p>С&nbsp;15&nbsp;июня по&nbsp;19&nbsp;сентября компания &laquo;Быстра&raquo; объявляет конкурс на&nbsp;лучшее фото &laquo;Отдыхаем в&nbsp;родном крае вместе с&nbsp;минеральной водой &laquo;Серебряная&raquo;.</p>
			<p>Победителей ждем множество ценных призов, среди которых планшетные&nbsp;ПК, ноутбуки, а&nbsp;также суперприз&nbsp;&mdash; ЖК-телевизор.</p>
			<p>Для того, чтобы принять участие в&nbsp;конкурсе:</p>
			<p>Сделайте фотографию на&nbsp;отдыхе. На&nbsp;этом фото&nbsp;вы, ваши друзья или родственники должны быть запечатлены в&nbsp;момент отдыха или культурного времяпрепровождения (на&nbsp;рыбалке, на&nbsp;пляже, на&nbsp;пикнике, на&nbsp;туристической экскурсии, на&nbsp;стадионе и&nbsp;т.&nbsp;д.). Обязательное условие&nbsp;&mdash; присутствие в&nbsp;кадре бутылки минеральной воды &laquo;Серебряная&raquo; любого объема: 0,5, 1,5 и&nbsp;5&nbsp;литров. Этикетка минеральной воды &laquo;Серебряная&raquo; на&nbsp;снимке должна быть четко читаемой и&nbsp;легко узнаваемой. Изображение бутылок и&nbsp;этикеток для идентификации можно найти в&nbsp;каталоге продукции.</p>
			<p>Разметите фотографию в&nbsp;группе &laquo;Отдыхаем в&nbsp;родном крае вместе с&nbsp;минеральной водой &laquo;Серебряная&raquo; в&nbsp;одной из&nbsp;социальной сети (&laquo;Фейсбук&raquo;, &laquo;ВКонтакте&raquo;, &laquo;Одноклассники&raquo;).</p>
			<p>Участники группы будут помечать &laquo;лайками&raquo; выложенные фото: количество этих &laquo;лайков&raquo; будет учитываться специальной комиссией, созданной организатором мероприятия ООО &laquo;Быстра&raquo; при определении победителей:</p>
			<ul>
				<li>лиц, занявших первое, второе и третье место,</li>
				<li>победителя месяца,</li>
				<li>победителя всего мероприятия – обладателя суперприза.</li>
			</ul>
			<p>Помимо условий, приведенных выше, при подведении итогов акции также будет учитываться привлекательность и&nbsp;оригинальность вашей фотографии: насколько живописными получатся виды природы, архитектурные и&nbsp;исторические памятники и&nbsp;другие места вашего отдыха, а&nbsp;также насколько интересно и&nbsp;красиво авторам удастся представить бутылку с&nbsp;минеральной водой &laquo;Серебряная&raquo;.</p>
			<p>Ограничения по возрасту – 18+.</p>
			<p>Организатор – ООО «Быстра».</p>
			<p>Подробные условия участия в&nbsp;конкурсе &laquo;Отдыхаем в&nbsp;родном крае вместе с&nbsp;минеральной водой &laquo;Серебрянная&raquo; можно скачать здесь:</p>
			<a class="button-download" href="/upload/pravila.doc">Скачать условия конкурса</a>
		</div>
		<p>Группы для размещения фотографий:</p>
		<ul>
			<li><a href="https://vk.com/aqua_silver">https://vk.com/aqua_silver</a></li>
			<li><a href="https://www.facebook.com/aquasilverrnd">https://www.facebook.com/aquasilverrnd</a></li>
			<li><a href="http://ok.ru/group/52325079908511">http://ok.ru/group/52325079908511</a></li>
		</ul>
	</div>
	<div id="bottom-wrap"></div>
</div>
<section id="table-winners">
	<div id="winers-week">
	</div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"concurs_table",
			Array(
				"COMPONENT_TEMPLATE" => ".default",
				"IBLOCK_TYPE" => "content",
				"IBLOCK_ID" => "25",
				"SECTION_ID" => "",
				"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
				"COUNT_ELEMENTS" => "N",
				"TOP_DEPTH" => "2",
				"SECTION_FIELDS" => array("", ""),
				"SECTION_USER_FIELDS" => array("", ""),
				"VIEW_MODE" => "LINE",
				"SHOW_PARENT_NAME" => "Y",
				"SECTION_URL" => "",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"ADD_SECTIONS_CHAIN" => "N"
			)
		);?>
</section>

<section id="video-wrap">
	<div class="top"></div>
	<section class="video">
		<a class="play" href="#play"></a>
		<video poster="/upload/concurs-video-poster.jpg" controls="controls">
			<source src="/upload/video/concurs.mp4" type='video/mp4; codecs="avc1.4D401E, mp4a.40.2"'>
			<source src="/upload/video/concurs.ogv" type='video/ogg; codecs="theora, vorbis"'>
			<p>Обновите ваш браузер чтобы просмотреть видео.</p>
		</video>
	</section>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
