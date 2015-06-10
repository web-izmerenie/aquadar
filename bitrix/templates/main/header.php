<?php

$html_classes = array();
$main_classes = array();

// <html> classes
if(defined("STRUCTURE"))
$html_classes[] = "structure";

if(defined("MANUFACTURE"))
	$html_classes[] = "manufacture";

if(defined("TRADEMARK"))
	$html_classes[] = "trademark";

if(defined("CONTACTS"))
	$html_classes[] = "contacts";

if(defined("GEO"))
	$html_classes[] = "geo";

if(defined("HONORS"))
	$html_classes[] = "honors";

if(defined("NEWS"))
	$html_classes[] = "news";

if(defined("PUBLISHING"))
	$html_classes[] = "publishing";

if(defined("REVIEWS"))
	$html_classes[] = "reviews";

if(defined("VACANCIES"))
	$html_classes[] = "vacancies";

if(defined("DISTRIBUTION"))
	$html_classes[] = "distribution";

if(defined("PRESENT"))
	$html_classes[] = "presentation";

if(defined("MINERAL_WATER_ITEMS"))
	$main_classes[] = "mineral-water";

if(defined("LIMONADE"))
	$main_classes[] = "limonade";

if(defined("JUICE"))
	$main_classes[] = "juice";

if(defined("KONKURS"))
	$html_classes[] = "konkurs";

$html_classes = implode(" ", $html_classes);
$main_classes = implode(" ", $main_classes);

$tplPath = "/bitrix/templates/main/";
?>
<!DOCTYPE html>
<html class="<?=$html_classes?>">
	<head>
		<meta charset="utf-8" />
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if gte IE 9]><link href="<?=$tplPath?>styles/src/ie9.css" rel="stylesheet"><![endif]-->
		<title><?$APPLICATION->ShowTitle()?></title>
		<?$APPLICATION->ShowMeta("description")?>
		<?$APPLICATION->ShowMeta("keywords")?>
		<?if($USER->IsAuthorized()){?>
			<?$APPLICATION->ShowHead()?>
		<?}?>
		<link href="<?=$tplPath?>styles/build/build.css" rel="stylesheet">
        <script type="text/javascript" src="<?=$tplPath?>scripts/plugins/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="<?=$tplPath?>scripts/src/main.js"></script>
		<script type="text/javascript" src="<?=$tplPath?>scripts/src/concurs.js"></script>
		<script type="text/javascript" src="<?=$tplPath?>scripts/plugins/jquery.placeholder.min.js"></script>
		<script type="text/javascript" src="<?=$tplPath?>scripts/plugins/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="<?=$tplPath?>scripts/plugins/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="<?=$tplPath?>scripts/plugins/jquery.autocolumnlist.js"></script>
	</head>

	<body>
		 <?$APPLICATION->ShowPanel();?>
		<div class="wrapper">

			<header class="header">

				<section class="content-frame">
					<a href="/" id="logo"></a>
					<section id="right-column">
						<div id="contact-head">
							<b>+7 (863) 223-35-35</b>
							<a id="call-me" href="#call_me">Перезвоните мне</a>
						</div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"main_menu",
							Array(
								"ROOT_MENU_TYPE" => "main",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => "",
								"MAX_LEVEL" => "2",
								"CHILD_MENU_TYPE" => "inside",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N"
							)
						);?>
					</section>
				</section>
			</header><!-- .header-->

			<main class="content">
			<?if($GLOBALS["APPLICATION"]->GetCurPage(true) != "/index.php"){?>
				<?if(!defined('FULL_WIDTH')){?>
					<section id="<?=$main_classes;?>" class="inside-content">
					<?if(!defined("ERROR_404")){?><h1><?$APPLICATION->ShowTitle(false)?></h1><?}?>
				<?}?>
				<?if(!defined("NO_INSIDE_MENU")){?>
					<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"inside_menu",
							Array(
								"ROOT_MENU_TYPE" => "inside",
								"MENU_CACHE_TYPE" => "A",
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => "",
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N"
							)
						);?>
					<?}?>
				<?}?>
