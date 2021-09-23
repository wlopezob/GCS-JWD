<?php
// phpinfo();
include_once 'lib/nusoap.php';

function MiFuncion($miparametro){
$resultado = "Mi parametro recibido es:". $miparametro;
return $resultado;
}

if(isset($HTTP_RAW_POST_DATA)){
	$HTTP_RAW_POST_DATA =file_get_contents('php://input');
} else{
	$HTTP_RAW_POST_DATA='';
	
}


$servicio = new soap_server();
$servicio->register("MiFuncion");
$servicio->service(file_get_contents("php://input"));

?>