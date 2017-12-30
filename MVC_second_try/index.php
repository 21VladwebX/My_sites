<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" type="text/html" charset="utf-8">
</head>
<body>
<?php

//Front controler

//1.Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);
//2.Подключение файлов системы
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');
//3.Установка соединеня с БД
$router = new Router();

$router->run();
//4.Вызов Router





?>
</body>
</html>