<?php

class Consulta extends Controller{

  function __construct(){
   parent::__construct();
   $this->view->mensaje="";
   $this->view->movimientos=[];
  // echo "<p>Nuevo controlador Main<p>";
  
  }
  
  function render(){
	  $codigoagua=$_POST['codagua'];
	  $movimientos=$this->model->consultaSocios(['codigo'=>$codigoagua]);
	  $this->view->movimientos=$movimientos;
	  
	  $this->view->render('consulta/index');
	  
  }

  
  function saludo(){
	  echo "<p>Ejecutaste el metodo Saludo<p>";
  }
  
   function consultarSocios(){
	 
	  $codigoagua=$_POST['codagua'];
	  $mensaje="";
	  
	  if($this->model->consultaSocios(['codigo'=>$codigoagua])){
	  $mensaje="consulta realizada";
	  }else{
		  $mensaje="error en la consulta";
	  }
	  $this->view->mensaje=$mensaje;
	  $this->render();
	  
	   //echo "<p>Consulta de socios_controlador<p>";
  }

}



?>