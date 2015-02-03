<?define("MINERAL_WATER_ITEMS", "Y");
define("NO_INSIDE_MENU", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Минеральная вода");?>
<nav id="main-menu">
		<ul>
			<li><a class="active" href="/productions/mineralnaya-voda/serebryannaya.php">ТМ «Серебряная «Усть-быстра»</a></li>
			<li><a href="#">ТМ «Аквада»</a></li>
			<li><a href="#">ТМ «Красная цена»</a></li>
		</ul>
	</nav>
	<section class="preview-text">
	<p>Минеральная природная столовая вода «Серебряная» Усть-Быстра»</p>
	</section>
	<section class="items">
		<div class="category">
			<h1>Негазированная</h1>
			<ul>
				<li><img src="/upload/mineral_water/item1.jpg"><p>0,5 л</p></li>
				<li><img src="/upload/mineral_water/item2.jpg"><p>1,5 л</p></li>
				<li><img src="/upload/mineral_water/item3.jpg"><p>5 л</p></li>
				<li><img src="/upload/mineral_water/item4.jpg"><p>19 л</p></li>
			</ul>
		</div>
		<div class="category">
			<h1>Газированная</h1>
			<ul>
				<li><img src="/upload/mineral_water/item5.jpg"><p>0,5 л</p></li>
				<li><img src="/upload/mineral_water/item6.jpg"><p>1,5 л</p></li>
			</ul>
		</div>
		<div class="category">
			<h1>Негазированная «Спорт»</h1>
			<ul>
				<li><img src="/upload/mineral_water/item7.jpg"><p>0,5 л</p>
					<div class="info_bottle">
						<img src="/upload/mineral_water/info_bottle.jpg">
						<h3>Крышка-непроливайка</h3>
						<p>Крышка-непроливайка не даст ни одной капле чистой и свежей минеральной воды пролиться даже при падении бутылки.</p>
						<span></span>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<section class="description">
		<div class="chemical_composition">
			<h2>Химический состав, г/дм<sup>3</sup></h2>
			<div id="anions" class="elements">
				<p>Анионы</p>
				<ul>
					<li><span>Гидрокарбонаты HCO<sub>3</sub><sup>—</sup></span> <b>180-270</b></li>
					<li><span>Хлориды Cl<sup>—</sup></span> <b>> 25,0</b></li>
					<li><span>Сульфаты SO<sub>4</sub><sup>2—</sup></span> <b>> 50,0</b></li>
					<li><span>Йод I<sup>—</sup></span> <b>0,08-0,2</b></li>
				</ul>
			</div>
			<div id="cations" class="elements">
				<p>Катионы</p>
				<ul>
					<li><span>Кальций Ca<sup>2+</sup></span> <b>40-100</b></li>
					<li><span>Натрий и калий Na<sup>+</sup>+K<sup>+</sup></span> <b>> 50,0</b></li>
					<li><span>Магний Mg<sup>2+</sup></span> <b>> 10,0</b></li>
					<li><span>Естественное содержание серебра Ag<sup>2+</sup></span> <b>0,025</b></li>
				</ul>
			</div>
			<div class="elements">
				<p>Минерализация 0,20–0,45 г/дм<sup>3</sup></p>
			</div>
		</div>
		<h2>Почему покупают нашу воду?</h2>
		<div class="desc-item">

			<div class="text">
				<h3>1. Наша вода очищается без применения метода обратного осмоса</h3>
				<p>Обратный осмос – процесс очистки воды, при котором воду пропускают через фильтры, задерживающие все растворенные в ней природные вещества и минералы.
	На выходе получают особо чистую, деминерализованную, практически стерилизованную воду. Такая вода никакой пользы человеческому организму
	не приносит.</p>
	<p>Именно поэтому в производстве минеральной природной воды «Серебряная» эта технология не используется. Мы сохраняем вещества и минералы в их естественном состоянии.</p></div>
			<img src="/upload/mineral_water/desc1.jpg">
		</div>
		<div class="desc-item">
			<img src="/upload/mineral_water/desc2.jpg">
			<div class="text">
				<h3>2. Вода «Серебряная» содержит природные ионы йода и серебра</h3>
				<p>Йод, природные ионы которого содержатся в выпускаемой нами минеральной воде, участвует в синтезе гормонов щитовидной железы и снижении вязкости крови. Таким образом стабилизируется артериальное давление.
При ежедневном потреблении воды «Серебряная» поддерживается необходимый баланс йода в организме человека.</p>
				<p>В свою очередь, серебро является природным консервантом
и оказывает бактерицидное воздействие, уничтожая определенные виды микроорганизмов и сохраняя воду чистой и полезной.</p>
			</div>
		</div>
		<div class="desc-item">

			<div class="text">
				<h3>3. Качество воды подтверждено международными стандартами</h3>
				<p>Качество минеральной воды «Серебряная» подтверждено системой менеджмента качества ISO 9001-2011 применительно к производству минеральной воды.</p>
<p>ISO 9001 – серия международных стандартов, описывающих требования к системе менеджмента качества организаций
	и предприятий, принятых в более чем 190 странах мира.</p>
			</div>
			<img src="/upload/mineral_water/desc3.jpg">
		</div>
	</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/inc/inc_distributor.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
