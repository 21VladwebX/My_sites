<?php
class Router {
	// in config folder wiil be files witg setings of system
	private $routes;// масив в котором будут хранитьс маршруты
	
	public function __construct () {
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
		
	}
	
	/*
		Return request string	
	*/
	private function getURI () {
		if(!empty($_SERVER['REQUEST_URI'])) {
			$uri = trim($_SERVER['REQUEST_URI'],'/');
			// $uri = $_SERVER['REQUEST_URI'];
			// echo $uri; можна через форму в хтмл, тіпа шо шукаєш...
		}
		return $uri;
		
	}
	
	public function run () {//будет принимать управление от index.php(Front controler)
		// echo"All Ok";
		// print_r ($this->routes);
		
		//Получить строку запроса
		$uri = $this->getURI();
		
		echo $uri;
		
		// Echo '<pre>';
		// print_r ($_SERVER);
		// echo '</pre>';
		//проверить наличие такого запроса в routes.php
		foreach ($this->routes as $uriPattern => $path){
			echo "<br/>$uriPattern -> $path";
			
			   //Сравнение $uriPattern и $uri
			if(preg_match("~$uriPattern~",$uri)){ //~ разделитель ибо в запросе могут быть /
				//Если есть совпадение, определить какой контроллер и
				//action обрабатывают запроса
				 echo '<br/> Где ищем(запрос, который набрал пользователь):'.$uri;
				 echo '<br/> Что ищем(совпадение  из правила):'.$uriPattern;
				 echo '<br/> Кто обрабатывает:'.$path;


				 //Получаем внутренний путь из внешнего согласно правилу
				 $internalRoute = preg_match("~$uriPattern~",$path,$uri);
				 
				//Определить контроллер, action,  параметры
				
				
				// echo "+";
				$segments = explode('/',$internalRoute);
				
				// echo '<pre>';
				// print_r ($segments);
				// echo '</pre>';
				
				$controlName = array_shift($segments).'Controler';
				$controlName = ucfirst($controlName);
				// echo $controlName;
				
				$actionName = 'action'.ucfirst(array_shift($segments));
				// echo $actionName;
				
				echo '<br/>control Name: '.$controlName;
				echo '<br/>action Name: '.$actionName;
				$parametrs = $segments;
				echo '<pre>';
				print_r($parametrs);
				
				
				//Подключить файл класса-контроллера
				$controllerFile = ROOT.'/controllers/'.$controlName.'php';
				
				if(file_exists($controllerFile)){
					include_once($controllerFile);
				}
				
				//Создать объект, вызвать метод (т.е. action)
				
				$controlerObject = new $controlName;
				$result = $controlerObject->$actionName();
				if($result != null){
					break;
				}
			}
		}
		
		
		
		
		
		
		
	}
	
}

?>