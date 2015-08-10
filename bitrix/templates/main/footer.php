			<?if($GLOBALS["APPLICATION"]->GetCurPage(true) != "/index.php"){?>
				<?if(!defined('FULL_WIDTH')){?>
					</section>
				<?}?>
				<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
				"AREA_FILE_SHOW" => "page",
				"AREA_FILE_SUFFIX" => "inc",
				"EDIT_TEMPLATE" => ""
				),
				false
			);?>
			<?}?>
			</main><!-- .content -->
			<?$APPLICATION->IncludeComponent(
				"api:main.feedback",
				"call_me",
				Array(
					"IBLOCK_TYPE" => "result_form",
					"IBLOCK_ID" => "12",
					"INSTALL_IBLOCK" => "N",
					"DISABLE_SEND_MAIL" => "N",
					"REPLACE_FIELD_FROM" => "Y",
					"UNIQUE_FORM_ID" => "54d498da3faec",
					"OK_TEXT" => "Спасибо, ваша заявка принята.",
					"EMAIL_TO" => "mail@akvadar.ru, kudinova@akvadar.ru, tyurin@akvadar.ru",
					"DISPLAY_FIELDS" => array(),
					"REQUIRED_FIELDS" => array(),
					"CUSTOM_FIELDS" => array("Телефон@input@text@required", "Имя@input@text@required", ""),
					"ADMIN_EVENT_MESSAGE_ID" => array("8"),
					"USER_EVENT_MESSAGE_ID" => array(),
					"HIDE_FIELD_NAME" => "Y",
					"TITLE_DISPLAY" => "Y",
					"FORM_TITLE" => "Заказать звонок",
					"FORM_TITLE_LEVEL" => "3",
					"FORM_STYLE_TITLE" => "",
					"FORM_STYLE" => "",
					"FORM_STYLE_DIV" => "",
					"FORM_STYLE_LABEL" => "",
					"FORM_STYLE_TEXTAREA" => "",
					"FORM_STYLE_INPUT" => "",
					"FORM_STYLE_SELECT" => "",
					"FORM_STYLE_SUBMIT" => "",
					"FORM_SUBMIT_CLASS" => "",
					"FORM_SUBMIT_ID" => "",
					"FORM_SUBMIT_VALUE" => "Отправить",
					"USE_CAPTCHA" => "N",
					"USE_HIDDEN_PROTECTION" => "Y",
					"USE_PHP_ANTISPAM" => "N",
					"PHP_ANTISPAM_LEVEL" => "1",
					"INCLUDE_JQUERY" => "Y",
					"VALIDTE_REQUIRED_FIELDS" => "Y",
					"INCLUDE_PLACEHOLDER" => "Y",
					"INCLUDE_PRETTY_COMMENTS" => "N",
					"INCLUDE_FORM_STYLER" => "N",
					"HIDE_FORM_AFTER_SEND" => "N",
					"SCROLL_TO_FORM_IF_MESSAGES" => "N",
					"SCROLL_TO_FORM_SPEED" => "1000",
					"BRANCH_ACTIVE" => "N",
					"SHOW_FILES" => "N",
					"UUID_LENGTH" => "10",
					"UUID_PREFIX" => "",
					"USER_AUTHOR_FIO" => "",
					"USER_AUTHOR_NAME" => "",
					"USER_AUTHOR_LAST_NAME" => "",
					"USER_AUTHOR_SECOND_NAME" => "",
					"USER_AUTHOR_EMAIL" => "",
					"USER_AUTHOR_PERSONAL_MOBILE" => "",
					"USER_AUTHOR_WORK_COMPANY" => "",
					"USER_AUTHOR_POSITION" => "",
					"USER_AUTHOR_PROFESSION" => "",
					"USER_AUTHOR_STATE" => "",
					"USER_AUTHOR_CITY" => "",
					"USER_AUTHOR_WORK_CITY" => "",
					"USER_AUTHOR_STREET" => "",
					"USER_AUTHOR_ADRESS" => "",
					"USER_AUTHOR_PERSONAL_PHONE" => "",
					"USER_AUTHOR_WORK_PHONE" => "",
					"USER_AUTHOR_FAX" => "",
					"USER_AUTHOR_MAILBOX" => "",
					"USER_AUTHOR_WORK_MAILBOX" => "",
					"USER_AUTHOR_SKYPE" => "",
					"USER_AUTHOR_ICQ" => "",
					"USER_AUTHOR_WWW" => "",
					"USER_AUTHOR_WORK_WWW" => "",
					"USER_AUTHOR_MESSAGE_THEME" => "",
					"USER_AUTHOR_MESSAGE" => "",
					"USER_AUTHOR_NOTES" => "",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "N",
					"AJAX_OPTION_HISTORY" => "N",
					"SHOW_CSS_MODAL_AFTER_SEND" => "N",
					"CSS_MODAL_HEADER" => "",
					"CSS_MODAL_FOOTER" => "",
					"CSS_MODAL_CONTENT" => ""
				)
			);?>
			<div class="overlay"></div>
		</div><!-- .wrapper -->
		<footer class="footer">
			<section class="content-frame">
				<!--<div id="social-block">
					<a href="http://facebook.com" id="facebook"></a>
					<a href="http://vk.com" id="vk"></a>
					<a href="http://instagram.com" id="instagram"></a>
				</div>-->
				<a id="developer" href="http://web-izmerenie.ru">Сделано в</a>
			</section>
		</footer><!-- .footer -->
        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
        (function (d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter29125650 = new Ya.Metrika({id:29125650,
                            webvisor:true,
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true});
                } catch(e) { }
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
            s.type = "text/javascript";
            s.async = true;
            s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else { f(); }
        })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript><div><img src="//mc.yandex.ru/watch/29125650" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->

<?require($_SERVER["DOCUMENT_ROOT"]."/seo.php");?>
</body>
</html>
