<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once "bloks/head.php";
		require_once "./functions/functions.php"; 
		$news = getNews(1,$_GET["id"]);
		$title = $news["title"];
		
	?>
</head>
<body>
<header>
	<?php
		require_once "bloks/header.php";
	?>
</header>
<div id="wrapper">
	<div id="leftCol">
	<?php 			
		echo "<div id = \"bigArticle\">";		
		echo '<img src="img/articles/'.$news["id"].'.jpg" alt="Стаття '.$news[$i]["id"].'" title="Стаття '.$news[$i]["id"].'">
			<h2>'.$news["title"].'</h2>
			<p>'.$news["full_text"].'</p>
			</div>';
		echo "<div class=\"clear\"><br/></div>";
		
	?>
		<div id="bigArticle"></div>
	</div>
		<?php require_once "bloks/rightCol.php"?>
</div>
<footer>
	<?php require_once "bloks/footer.php"?>
</footer>
</body>
</html>





