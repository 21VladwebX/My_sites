<?php 
class Select extends Database {
	
	private $tabname;
	
	
	public function __construct($tablename){
		$this->connectDB();
		$this->tabname = $tablename;
	}
	
	public function getRecordById($id){
		$query = "SELECT * from $this->tabname where id ='$id'";
		// return $query;
		if($sql = mysql_query($query)){//� ���������� sql ��������� ���������� �������
			$data = mysql_fetch_array($sql);//� ����� ���������, ��� �����  ���������������
		}
		return $data;
	}
	
	public function getAllData(){
		$query = "Select * from $this->tabname";
		if($sql = mysql_query($query)){
			for($i = 0; $i < mysql_num_rows($sql); $i++){
				$data[$i] = mysql_fetch_array($sql);
			}
		}
		return $data;
		
	}
	
	public function getDataWithParametrs($params){
		$query = "Select * from $this->tabname Where ";
		foreach($params as $key => $values){
			$query .= "$key = '$values' AND "; 
			
		}
		$query = substr($query,0,-4);
		echo $query;
		if($sql = mysql_query($query)){
			for($i = 0; $i < mysql_num_rows($sql); $i++){
				$data[$i] = mysql_fetch_array($sql);
			}
		}
		return $data;
		
	}
	
}
?>