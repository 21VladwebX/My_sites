<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
   <!--<meta http-equiv="X-UA-Compatible" content="IE=edge> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Задачи</title>

    <!-- Bootstrap -->
    <!--<link href="../css/bootstrap.css" rel="stylesheet"> -->
	  <link href="../css/css.css" rel="stylesheet">
  </head>
  <body>
  <h1>
	<a class="href_a"  href="../index.php">Главная страница</a>
	</h1>
  <div class="container">
    <h1>Задачи<br/> <?php 
		session_start();
		if(isset($_SESSION) && $_SESSION['loged_user'] != ''){
			echo "Привет, ".$_SESSION['loged_user'].'!';
		} 
		else {
			echo 'Привет гость!';
		}?></h1>
	<p>
		<input type="radio" id="radio" name="tasks" value="1">Задать задачу<br/>
		<input type="radio" id="radio" name="tasks" value="2" checked>Посмотреть задачи<br/>
		<input type="submit" id="done" value="Отправить"><br/>
	</p>
	<div id="result"> </div>
	<div id="res"> </div>
	<div id="res_update"> </div>
	
			
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.js"></script>
	<script src="../js/tasks.js"></script>
  </body>
</html>