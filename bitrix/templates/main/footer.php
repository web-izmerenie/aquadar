<?if($GLOBALS["APPLICATION"]->GetCurPage(true) != "/index.php"){?>
	</section>
	<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"AREA_FILE_SHOW" => "page",
	"AREA_FILE_SUFFIX" => "inc",
	"EDIT_TEMPLATE" => ""
	),
	false
);?>
<?}?>
</main><!-- .content -->
				<form class="form-call">
					<h3>Заказать звонок</h3>
					<a href="#close" class="close">×</a>
					<input type="number" placeholder="Телефон" value="">
					<input type="text" maxlength="60" placeholder="Имя" value="">
					<p>Все поля обязательны для заполнения</p>
					<input type="submit" value="Отправить">
					<span>Мы свяжемся с вами в течение 15 минут</span>
				</form>
				<div class="overlay"></div>
            </div><!-- .wrapper -->
        <footer class="footer">
			<section class="content-frame">
				<div id="social-block">
					<a href="http://facebook.com" id="facebook"></a>
					<a href="http://vk.com" id="vk"></a>
					<a href="http://instagram.com" id="instagram"></a>
				</div>
				<a id="developer" href="http://web-izmerenie.ru">Сделано в</a>
			</section>
        </footer><!-- .footer -->
    </body>
</html>
