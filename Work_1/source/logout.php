<?php
session_start();
unset($_SESSION['loged_user']);
var_dump($_SESSION);
header ('Location: http://test1132.zzz.com.ua/My_cites/Work_1/');

?>