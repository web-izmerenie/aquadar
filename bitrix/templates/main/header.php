<?php
	$URI = $_SERVER[REQUEST_URI];
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

$html_classes = implode(" ", $html_classes);

?>
<!DOCTYPE html>
<html class="<?=$html_classes?>">
	<head>
		<meta charset="utf-8" />
		<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if gte IE 9]><link href="/template/main/styles/src/ie9.css" rel="stylesheet"><![endif]-->
		<title>Aquadar</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link href="/template/main/styles/build/build.css" rel="stylesheet">
        <script type="text/javascript" src="/template/main/scripts/plugins/jquery-2.1.3.min.js"></script>
        <script type="text/javascript" src="/template/main/scripts/src/main.js"></script> 
		<script type="text/javascript" src="/template/main/scripts/plugins/jquery.placeholder.min.js"></script>
		<script type="text/javascript" src="/template/main/scripts/plugins/jquery.mousewheel-3.0.6.pack.js"></script>
		<script type="text/javascript" src="/template/main/scripts/plugins/jquery.fancybox.pack.js"></script>
	</head>

	<body>

		<div class="wrapper">

			<header class="header">
				
				<section class="content-frame">
					<a href="/" id="logo"></a>
					<section id="right-column">
						<div id="contact-head">
							<b>+7 (863) 223-35-35</b>
							<a id="call-me" href="#call_me">Перезвоните мне</a>
						</div>
						<nav id="top-menu">
							<ul>
								<li><a href="/structure.php">О компании</a></li>
								<li><a href="/manufacture.php">Производство</a></li>
								<li><a href="#">Продукция</a>
									<ul class="inside-menu">
										<li><a href="/mineral_water.php">Минеральная вода</a></li>
										<li><a href="/limonade.php">Лимонады</a></li>
										<li><a href="/juice.php">Сокосодержащие напитки</a></li>
									</ul>
								</li>
								<li><a href="#">Дистрибуция</a></li>
								<li><a href="/contacts.php">Контакты</a></li>
							</ul>
						</nav>
					</section>
				</section>
			</header><!-- .header-->

			<main class="content">
