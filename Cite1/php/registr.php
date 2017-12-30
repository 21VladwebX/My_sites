<?php
$mysqli = false;
function connectDB(){
	global $mysqli;
	$mysqli = new mysqli("localhost","root","mysql","Cite1Base");
	$mysqli->query("SET NAMES utf8");
}

function closeDB(){
	global $mysqli;
	$mysqli->close();
}
$login = htmlspecialchars($_POST["login"]);
$pasword = htmlspecialchars($_POST["pasword"]);
$check = false;
$res = false;	
connectDB();
$checkLogin = $mysqli->query("SELECT `login` FROM `users`");
//$checkLogin->fetch_assoc();
// echo $checkLogin["login"];
$array = array();
while(($row = $checkLogin->fetch_assoc())!= false){
	$array[] = $row;
}
//var_dump ($array['login']);
//print_r $array;
echo $array['login'];
if($array['login']){
	for($i = 0; $i < count($array); $i++){
		if($login === $array["login"]){
			echo 'Данный логин занят, введите другой.';
			$check = true;
			exit;
		}
	}
}
if($check){
	$mysqli->query("INSERT INTO `users`(`login`, `password`) VALUES	('".$login."','".$pasword."');");
	$res = true;
	echo 'sdsd'.'<br/>';
}
if($res) 
	echo "Пользователь добавлен!".'<br/>';
else
	echo "Пользователь not добавлен".'<br/>';
closeDB();
//echo 'Ok';
?>