<?php
ob_start();
header('Content-type: text/html; charset= utf-8');
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/../models/Database.php');

error_reporting(E_ALL & ~E_DEPRECATED);

$db = new Database();
$db->connectDB();
$task = $_POST['txt'];
if(isset($_SESSION['loged_user'])){
	
	$db->insert('users',[$task],['']);
}
else{
	$db->insertTask('users',$task,'task');
}

$db->closeConection();
$buffer = ob_get_contents();
ob_end_clean();
echo json_encode($buffer, JSON_UNESCAPED_UNICODE);
?>