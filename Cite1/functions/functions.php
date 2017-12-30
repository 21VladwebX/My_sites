<?php
$mysqli = false;
function connectDB(){
	global $mysqli;
	$mysqli = new mysqli("localhost","root","mysql","Cite1Base");
	$mysqli->query("SET NAMES 'utf8'");
}

function closeDB(){
	global $mysqli;
	$mysqli->close();
}
function getNews($limit,$id = 0){
	global $mysqli;
	connectDB();
	if($id)
		$where = "WHERE `id`= ".$id;
	$res = $mysqli->query("SELECT * FROM `news` $where ORDER BY `id` DESC LIMIT $limit");
	closeDB();
	if(!$id)
		return resultToArray($res);
	return $res->fetch_assoc();
	
}
function resultToArray($res){
	$array = array();
	while(($row = $res->fetch_assoc())!= false){
		$array[] = $row;
	}
	return $array;
}
?>