﻿<?php
ob_start();
header('Content-type: text/html; charset= utf-8');
ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/../models/Database.php');

session_start();
error_reporting(E_ALL & ~E_DEPRECATED);

// $db = new Database();
// $db->connectDB();

$text = $_POST[''];
echo '<br />';
echo $text;

// $db->update();

// $db->closeConection();
$buffer = ob_get_contents();
ob_end_clean();
echo json_encode($buffer, JSON_UNESCAPED_UNICODE);
?>