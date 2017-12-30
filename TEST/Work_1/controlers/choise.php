<?php
ob_start();
header('Content-type: text/html; charset= utf-8');
ini_set('display_errors',1);
error_reporting(E_ALL);


define('ROOT', dirname(__FILE__));
require_once(ROOT.'/../models/Database.php');
require_once(ROOT.'/../models/modelsPic.php');


$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

session_start();
error_reporting(E_ALL & ~E_DEPRECATED);

$db = new Database('users');
$db->connectDB();

$res = $db->selectUsers($login,$password);

if(isset($_SESSION)){
	if(isset($_SESSION['loged_user']) && $_SESSION['loged_user'] != null){
		echo "Вы авторизованы! Привет,".$_SESSION['loged_user'];
	}
}


$db->closeConection();
$buffer = ob_get_contents();
ob_end_clean();
echo json_encode($buffer, JSON_UNESCAPED_UNICODE);
?>