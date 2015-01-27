<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аквадар");
?><div id="main-top">
		<div class="content-frame">
			<img src="/upload/graphics.png">
			<p>Холдинг «Аквадар» занимает ведущие позиции по продажам лимонадов и минеральной воды на Юге России и является лидером среди производителей безалкогольных напитков.</p>
		</div>
	</div>
	<div id="main-bottom">
		<div class="content-frame">
			<a href="/mineral_water.php" class="main-items">
				<img src="/upload/main-item1.png">
				<div class="circle-description" id="mineral-water">
					<div class="circle-content">
						<h1>Минеральная вода</h1>
						<p>ООО «Быстра»</p>
						<ul>
							<li>ТМ «Серебряная»</li>
							<li>ТМ «Аквада»</li>
							<li>ТМ «Вода для всех»</li>
						</ul>
					</div>
				</div>
			</a>
			<a href="/limonade.php" class="main-items">
				<img src="/upload/main-item2.png">
				<div class="circle-description" id="limonad">
					<div class="circle-content">
						<h1>Лимонады</h1>
						<p>ООО «Аквадар»</p>
						<ul>
							<li>ТМ «Аквадар»</li>
							<li>ТМ «Ситро»</li>
						</ul>
					</div>
				</div>
			</a>
			<a href="/juice.php" class="main-items">
				<img src="/upload/main-item3.png">
				<div class="circle-description" id="juice">
					<div class="circle-content">
						<h1>Сокосодержащие напитки</h1>
						<p>ООО «Аквадар»</p>
						<ul>
							<li>ТМ «Южный день»</li>
						</ul>
					</div>
				</div>
			</a>
		</div>
	</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>