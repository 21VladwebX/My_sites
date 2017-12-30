<?php 
class Database { 
	private $host = "localhost";
	private $user = "admin"; 	/*!!!!!!!!!!!!!!!!!!!!*/
	private $pass = "12345";	/*!!!!!!!!!!!!!!!!!!!!*/
	private $db = "test1";
	
	
	// public function connect ($host,$db) {		
		// mysql_select_db("$db", mysql_connect("$host"));// Открывает соединение с сервером MySQL db - BD which we will use
		// mysql_query("SET NAMES 'utf-8'");
		// return true;
	// }
	 public function connectDB(){
		 if(mysql_connect($this->host,$this->user,$this->pass)){
			 echo "Connect to host"."<br/>";
			 if(mysql_select_db($this->db)){
				echo "conect to DB access"."<br/>";
			 }
		 }
		 // else
	 }
	
	public function closeConection(){
		mysql_close();
	}
}


?>