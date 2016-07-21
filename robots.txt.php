<?if($_SERVER["HTTP_HOST"] == "ust-bistra.ru" || $_SERVER["HTTP_HOST"] == "www.ust-bistra.ru"){
	echo "User-agent: * \n";
	echo "Disallow: /";
} else {
	echo "User-agent: * \n";
	echo "Disallow: /administrator/";
}?>
Host: <?php echo trim($_SERVER['HTTP_HOST']);?>
