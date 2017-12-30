<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
   <!--<meta http-equiv="X-UA-Compatible" content="IE=edge> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!--<link href="css/bootstrap.css" rel="stylesheet"> -->
	<link href="css/css.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container">
    <h1><?php if(isset($_SESSION['loged_user'])){
		echo 'Привет, '.$_SESSION['loged_user'];
		}
		else {
			echo 'Авторизуйтесь';
		}?></h1>
	
		<form  method="POST">
			<input type="text" placeholder="Логин" id="login" name="login"> <br/>
			<input type="password" placeholder="Пароль" id="password" name="password"> <br/>
			<input type="password" placeholder="Повторите пароль" id="repeatPassword" name="repeatPassword"> <br/>
			<input type="e-mail" placeholder="E-mail" id="e-mail" name="e-mail"> <br/>
			<div id="messageShow"></div>
			<input type="button"  name="done" id="done" value="Войти" > <br />
			<input type="button"  name="done" id="reg" value="Зарегестрироваться" > <br />
		</form>
	</div>
	
	<h1>
		<a class="href_a" href="controlers/tasks.php">Задачи<a/><br/><br/>
		<a class="href_a" href="source/logout.php">Выйти</a>
	</h1>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>