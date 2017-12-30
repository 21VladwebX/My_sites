<!DOCTYPE html>
<html>
<head>
	<?php 
		$title="Обратная связь";
		require_once "bloks/head.php";
	?>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script src="js/main.js"></script>
</head>
<body>
	<header>
		<?php require_once "bloks/header.php"?>
	</header>
	<div id="wrapper">
		<div id="leftCol">
			<input type="text" placeholder="Имя" id="name" name="name"> <br />
			<input type="text" placeholder="Email" id="email" name="email"> <br />
			<input type="text" placeholder="Тема сообщения" id="subject" name="subject"> <br />
			<textarea type="text" placeholder="Введите сюда свое сообщение" id="message" name="message"> </textarea>  <br />
			<div id="messageShow"></div>
			<input type="button"  name="done" id="done" value="Отправить" > <br />
		</div>
		<?php require_once "bloks/rightCol.php"?>
	</div>
	<footer>
		<?php require_once "bloks/footer.php"?>
	</footer>
</body>
</html>