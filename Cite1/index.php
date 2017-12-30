<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once "./functions/functions.php"; 
		$title="Главная стриница";
		require_once "bloks/head.php";
	?>
</head>
<body>
<header>
	<?php
		require_once "bloks/header.php";
		$news = getNews(3);
	?>
</header>
<div id="wrapper">
	<div id="leftCol">
	<?php
		for($i = 0; $i < count($news); $i++){
			if($i == 0)
				echo "<div id = \"bigArticle\">";
			
			else
				echo "<div class = \"article\">";
			
		
		echo '<img src="img/articles/'.$news[$i]["id"].'.jpg" alt="Стаття '.$news[$i]["id"].'" title="Стаття '.$news[$i]["id"].'">
				<h2>'.$news[$i]["title"].'</h2>
				<p>'.$news[$i]["intro_text"].'</p>
				<a href="article.php?id='.$news[$i]["id"].'">
				<div class="more">Далее</div> </a>
				</div>';
		if($i == 0)
			echo "<div class=\"clear\"><br/></div>";
		}
	?>
		<div id="bigArticle"></div>
	</div>
		<?php require_once "bloks/rightCol.php"?>
	</div>
</div>
<footer>
	<?php require_once "bloks/footer.php"?>
</footer>
</body>
</html>