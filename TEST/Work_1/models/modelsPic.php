<?php
class Picture {	
	
	public function downl () {
		$uploaddir = '../uploads/';
		$uploadfile = $uploaddir . basename($_FILES['myfile']['name']);
		if (move_uploaded_file($_FILES['myfile']['tmp_name'], $uploadfile)) {
			echo "Файл коректно загружен на сервер!\n";
			return true;
		}
		else {
			echo "Файл не загружен!\n";
			return false;
		}
	}
	
	
	
}
?>