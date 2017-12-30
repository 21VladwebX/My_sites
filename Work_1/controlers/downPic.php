<?php
ob_start();
header('Content-type: text/html; charset= utf-8');
ini_set('display_errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once(ROOT.'/../models/modelsPic.php');

error_reporting(E_ALL & ~E_DEPRECATED);

$db = new Picture();
// $db->downl(['image/jpeg','image/png','image/jpg']);
$db->downl();
echo '<br />';

$buffer = ob_get_contents();
ob_end_clean();
echo json_encode($buffer, JSON_UNESCAPED_UNICODE);
?>