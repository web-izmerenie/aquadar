<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/productions/sokosoderzhashchie-napitki/(.+?)/(\\?.*\$|\$)#",
		"RULE" => "&SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/productions/sokosoderzhashchie-napitki/elements_list.php",
	),
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
		"CONDITION" => "#^/productions/limonady/(.+?)/(\\?.*\$|\$)#",
		"RULE" => "&SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/productions/limonady/elements_list.php",
	),
	array(
		"CONDITION" => "#^/about/novosti/(.*?).html(\\?.*\$|\$)#",
		"RULE" => "&ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/about/novosti/detail.php",
		"SORT" => "100",
	),
	array(
		"CONDITION" => "#^/fotokonkurs/(.+?)/(\\?.*\$|\$)#",
		"RULE" => "&SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/fotokonkurs/detail.php",
	),
);

?>