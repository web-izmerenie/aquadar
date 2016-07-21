<?if($_SERVER["HTTP_HOST"] == "ust-bistra.ru" || $_SERVER["HTTP_HOST"] == "www.ust-bistra.ru"){?>
	User-agent: *
	Disallow: /
<?} else {?>
	User-agent: *
	Disallow: /administrator/
}?>
Host: <?php echo trim($_SERVER['HTTP_HOST']);?>
