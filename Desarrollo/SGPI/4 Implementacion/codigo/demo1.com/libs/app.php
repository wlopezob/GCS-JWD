<?php 
require_once 'controllers/errores.php';
class App{
    
	function __construct(){
	 // echo "<p> Nueva APP ccc<p>";
	  
	  
	  
	 // $url = $_GET['url'];
	  
	 // echo $url;
	  $url=isset($_GET['url'])?$_GET['url']:null;
	  $url=rtrim($url,'/');
	  $url=explode('/',$url);
	  //var_dump($url);
	  if(empty($url[0])){
		 $archivoController='controllers/main.php'; 
		  require_once $archivoController;
		  $controller= new Main();
		  $controller->loadmodel('main');
		  $controller->render();
		  return false;
		  
		  
	  }
	  $archivoController='controllers/' . $url[0] . '.php';
	  //echo $archivoController;
	  if (file_exists($archivoController)){
	  
	    require_once $archivoController;
		// inicializar el controlador
		$controller= new $url[0];
		$controller->loadmodel($url[0]);
		// si hay un metodo a cargar
		if(isset($url[1])){
			$controller->{$url[1]}();
		}else{
			$controller->render();
		}
		  
	  }else{
		  
		  $controller=new Errores();
	  }
	  
	  
	 
	}
}

?>