<?php 
class Database { 
	private $host = "localhost";
	private $user = "admin"; 
	private $pass = "12345";	
	private $db = "test1";
	public $tabname = 'users';
	
	 public function connectDB(){
		 mysql_set_charset( 'utf8' );
		 if( $link = mysql_connect($this->host,$this->user,$this->pass)){
			 // echo "Connect to host 1"."<br/>";
			 if(mysql_select_db($this->db,$link)){
				// echo "conect to DB accasess"."<br />";
				return true; 			
			 }
		 }
	 }
	 
	 
	// public function update () {
		// $res = mysql_query("UPDATE users SET task = 'test' WHERE id='1'");
		//  echo 'It`s update';
	// }
	
	
	public function insert($table, $values, $colums ){

		if(isset($_SESSION['loged_user']) && $_SESSION['loged_user']!= ''){
			$sql = "UPDATE ".$table; 
		}
		else {
			$sql = "INSERT INTO ".$table; 
		}
		$numColoms = count($colums);
		
		if($numColoms>1){    			
			for($i = 0; $i < $numColoms; $i++){ 
			if(is_string($colums[$i])) 
				$colums[$i] = "".$colums[$i]."";
			if(is_null($colums))
				$colums[$i] = "null";
			}
			$colums = implode(",",$colums); 
			$sql .= " (".$colums.")";
		}
		
		$numValues = count($values);		
		if(isset($_SESSION['loged_user']) && $_SESSION['loged_user']!= ''){
			$sql .= " SET `task` = "; 
		}
		for($i = 0; $i < $numValues; $i++){ 
			if(is_string($values[$i])) 
				$values[$i] = "'".$values[$i]."'";
			if(is_null($values[$i]))
				$values[$i] = "null";
		} 
		$values = implode(",",$values);		
		if(isset($_SESSION['loged_user']) && $_SESSION['loged_user']!= ''){
			$sql .=  "(".$values.")";
		}
		else {
			$sql .= " VALUES (".$values.")";
		}
		
		if(isset($_SESSION['loged_user']) && $_SESSION['loged_user']!= ''){
			$sql.= " WHERE login = '".$_SESSION['loged_user']."'";
		}
		if (mysql_query($sql)){
				echo 'Запись успешно добавлена!';
			return true;
		}
		return false;
	}
	
	
	public function insertTask ($table, $values, $colums ){
		$sql = "INSERT INTO ".$table; 
		$numColoms = count($colums);
		$sql .= " (".$colums.")";			
		$sql .= " VALUES ('".$values."')";
		if (mysql_query($sql)){
			echo 'Задание успешно добавлено!';
			return true;
		}
		else{
			return false;
		}
	}
	
	
	public function getTask(){
		 mysql_set_charset( 'utf8' );
		$query = "Select id,login,email,task  from users ORDER BY `id` DESC";
		if($sql = mysql_query($query)) {
			for($i = 0; $i < mysql_num_rows($sql); $i++){
				$data[$i] = mysql_fetch_array($sql);
				
			}
			return $data;
		}
			
	}
	
	
	public function selectUsers($user,$password){
		
		$query = "Select login from users where login ='$user' AND pasword='$password'";
		
		if($sql = mysql_query($query)){
			$res = mysql_fetch_array($sql);
			if(isset($res['login']) && $res['login'] == $user ){
				$_SESSION['loged_user'] = $user;
			}
			else{
				echo '<br />Пользователь: '.$user.' не найден!<br />';
				return false;
			}
		}
	}
	
	
	public function closeConection(){
		mysql_close();
	}
}


?>