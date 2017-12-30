<?php 
class NewsControl {
	
	public function actionIndex(){
		echo 'Список новостей';
		return true;
	}
	
	
	public function actionView(){
		echo 'Простмотр одной новости';
		return true;
	}
	
	
}


?>