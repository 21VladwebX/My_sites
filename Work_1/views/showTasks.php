<?php
class Show {
	private $array1;
	
	
	public function showTask ($arra) {
		session_start();
		$arCount = count($arra);
		echo "<form  id='TaskForm'>";
		for($i = 0; $i < $arCount; $i++){
				
			echo "<form  id='TaskForm'  >";
			echo "ID: ".$arra[$i][0].'<br />';
			echo "Пользователь: ".$arra[$i][1].'<br />';
			echo "E-mail: ".$arra[$i][2].'<br />';
			if(isset($_SESSION)){
				if(isset($_SESSION['loged_user']) && $_SESSION['loged_user'] == 'admin'){
					echo "Задание: <input type='text' class='texts' value=' ".$arra[$i][3]."'><br />";
				}
				else{
					echo "Задание: ".$arra[$i][3]."<br />";
				}
			}
			echo '<br /><br /><br />';		
		}
		if(isset($_SESSION['loged_user'])){
			if($_SESSION['loged_user'] == 'admin')
				echo "<input type='submit' name='but' id='donne' /> ";
				echo '<form>';	
				echo '<script src="../js/update_tasks.js"></script>';
		}
	}
}







?> 