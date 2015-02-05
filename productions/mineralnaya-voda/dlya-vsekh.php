<?define("MINERAL_WATER_ITEMS", "Y");
define("NO_INSIDE_MENU", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Минеральная вода");?>
<nav id="main-menu">
	<ul>
		<li><a href="/productions/mineralnaya-voda/serebryannaya.php">ТМ «Серебряная «Усть-быстра»</a></li>
		<li><a href="/productions/mineralnaya-voda/akvada.php">ТМ «Аквада»</a></li>
		<li><a class="active" href="/productions/mineralnaya-voda/dlya-vsekh.php">ТМ «Для всех»</a></li>
	</ul>
</nav>
<section class="preview-text">
	<p>Вода питьевая артезианская «Для всех»</p>
</section>
<section class="items">
	<div class="category">
		<h1 style="margin-bottom:50px;">Негазированная</h1>
		<ul>
			<li><img src="/upload/mineral_water/vodadlyavsehpng.jpg"><p>19 л</p></li>
		</ul>
	</div>
</section>
<section class="description">
	<div class="chemical_composition">
		<h2>Химический состав, г/дм<sup>3</sup></h2>
		<div id="anions" class="elements">
			<p>Анионы</p>
			<ul>
				<li><span>Бикарбонаты HCO<sub>3</sub><sup>—</sup></span> <b>30-400</b></li>
				<li><span>Хлориды Cl<sup>—</sup></span> <b>> 250</b></li>
				<li><span>Сульфаты SO<sub>4</sub><sup>2—</sup></span> <b>> 250</b></li>
				<li><span>Фторид F<sup>—</sup></span> <b>0,5-1,5</b></li>
			</ul>
		</div>
		<div id="cations" class="elements">
			<p>Катионы</p>
			<ul>
				<li><span>Кальций Ca<sup>2+</sup></span> <b>25-130</b></li>
				<li><span>Натрий Na<sup>+</sup></span> <b>> 200</b></li>
				<li><span>Калий K<sup>+</sup></span> <b>> 20.0</b></li>
				<li><span>Магний Mg<sup>2+</sup></span> <b style="margin:0;">5-65</b></li>
			</ul>
		</div>
	</div>
	<h2>Почему покупают нашу воду?</h2>
	<div class="desc-item">

		<div class="text">
			<h3>Качество воды подтверждено международными стандартами</h3>
			<p>Качество минеральной воды «Для всех» подтверждено системой менеджмента качества ISO 9001-2011 применительно к производству минеральной воды.</p>
<p>ISO 9001 – серия международных стандартов, описывающих требования к системе менеджмента качества организаций
и предприятий, принятых в более чем 190 странах мира.</p>
		</div>
		<img src="/upload/mineral_water/desc3.jpg">
	</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/inc/inc_feedback.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/inc/inc_distributor.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
