<?php
// phpinfo();
include_once 'lib/nusoap.php';

$servicio = new soap_server();

$ns = "urn:miserviciowsdl";
$servicio->configureWSDL("MiPrimerServicioWeb",$ns);
$servicios_schemaTargetNamespace=$ns;

$servicio->register("MiFuncion",array('miparametro'=>'xsd:string'),array('return'=>'xsd:string'),$ns);

function MiFuncion($miparametro){
$resultado = "Mi parametro recibido es:". $miparametro;

return $resultado;
}

$servicio->service(file_get_contents("php://input"));

?>