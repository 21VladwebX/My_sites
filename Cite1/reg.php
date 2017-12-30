<!DOCTYPE html >
<html>
<head> 
	<?php 
		$title = "Регистрация";
		require "bloks/head.php";
	?>
	<script type = "text/javascript" src = "js/jquery-3.1.1.min.js"></script>
	<script src = "js/reg.js"></script>
</head>
<body>
	<header>
		<?php require_once "bloks/header.php"?>
	</header>
	<div id="wrapper">
		<div id="leftCol">
			<input type="text" placeholder="Логин" id="login" name="login"> <br/>
			<input type="text" placeholder="Пароль" id="pasword" name="pasword"> <br/>
			<input type="text" placeholder="Повторите пароль" id="repeatPassword" name="repeatPassword"> <br/>
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