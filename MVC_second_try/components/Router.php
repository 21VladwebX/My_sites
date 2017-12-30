<?php
class Router {
	// in config folder wiil be files witg setings of system
	private $routes;// ����� � ������� ����� �������� ��������
	
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
			// echo $uri; ����� ����� ����� � ����, ��� �� �����...
		}
		return $uri;
		
	}
	
	public function run () {//����� ��������� ���������� �� index.php(Front controler)
		// echo"All Ok";
		// print_r ($this->routes);
		
		//�������� ������ �������
		$uri = $this->getURI();
		
		echo $uri;
		
		// Echo '<pre>';
		// print_r ($_SERVER);
		// echo '</pre>';
		//��������� ������� ������ ������� � routes.php
		foreach ($this->routes as $uriPattern => $path){
			echo "<br/>$uriPattern -> $path";
			
			   //��������� $uriPattern � $uri
			if(preg_match("~$uriPattern~",$uri)){ //~ ����������� ��� � ������� ����� ���� /
				//���� ���� ����������, ���������� ����� ���������� �
				//action ������������ �������
				 echo '<br/> ��� ����(������, ������� ������ ������������):'.$uri;
				 echo '<br/> ��� ����(����������  �� �������):'.$uriPattern;
				 echo '<br/> ��� ������������:'.$path;


				 //�������� ���������� ���� �� �������� �������� �������
				 $internalRoute = preg_match("~$uriPattern~",$path,$uri);
				 
				//���������� ����������, action,  ���������
				
				
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
				
				
				//���������� ���� ������-�����������
				$controllerFile = ROOT.'/controllers/'.$controlName.'php';
				
				if(file_exists($controllerFile)){
					include_once($controllerFile);
				}
				
				//������� ������, ������� ����� (�.�. action)
				
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