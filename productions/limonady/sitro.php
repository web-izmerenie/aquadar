<?define("LIMONADE", "Y");
define("NO_INSIDE_MENU", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Лимонады");?>
<nav id="main-menu">
	<ul>
		<li><a href="/productions/limonady/">ТМ «Аквадар»</a></li>
		<li><a class="active" href="/productions/limonady/sitro.php">ТМ «Ситро»</a></li>
	</ul>
</nav>
<section class="preview-text">
	<p>Сильногазированый с содержанием натурального сахара.</p>
</section>
<section class="items">
	<div class="category">
		<ul>
			<li><img src="/upload/limonad/barbaris.png"><span>Барбарис</span><p>1,4 л</p></li>
			<li><img src="/upload/limonad/dyushes.png"><span>Дюшес</span><p>1,4 л</p></li>
			<li><img src="/upload/limonad/ekstra-sitro.png"><span>Экстра-Ситро</span><p>1,4 л</p></li>
			<li><img src="/upload/limonad/limonad.png"><span>Лимонад</span><p>1,4 л</p></li>
			<li><img src="/upload/limonad/tarhun.png"><span>Тархун</span><p>1,4 л</p></li>
		</ul>
	</div>
</section>
<section class="description">
<h2>Почему покупают наши лимонады?</h2>
<div class="desc-item">
	<div class="text">
		<h3>3. Все лимонады ТМ «Ситро» низкокалорийные.  </h3>
		<p>В составе газированной сладкой воды «Аквадар» нет сахара и содержание углеводов всего 0,1 г на 100 г напитка. К тому же пантотеновую кислоту, которая содержится в витаминном комплексе, иногда называют архитектором стройности, за ее опосредованное влияние на сохранение и восстановление стройной фигуры. </p>
	</div>
	<img src="/upload/limonad/desc3.jpg">
</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/inc/inc_distributor.php");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
