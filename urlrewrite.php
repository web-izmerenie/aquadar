<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/productions/mineralnaya-voda/(.+?)/(\\?.*\$|\$)#",
		"RULE" => "&SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/productions/mineralnaya-voda/elements_list.php",
		"SORT" => "100",
	),
	array(
		"CONDITION" => "#^/about/publication/(.*?)\\.html(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/about/publication/detail.php",
		"SORT" => "100",
	),
	array(
		"CONDITION" => "#^/about/novosti/(.*?).html(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/about/novosti/detail.php",
		"SORT" => "100",
	),
);

?>