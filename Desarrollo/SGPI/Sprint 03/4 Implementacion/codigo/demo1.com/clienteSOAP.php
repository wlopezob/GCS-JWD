<?php
// phpinfo();
include_once 'lib/nusoap.php';

$cliente=new nusoap_client("http://demo1.com/serviciosoap/servicioSOAP.php",false);
?>

<form method="post" action"<?php $_SERVER['PHP_SELF']; ?>">
<LABEL> INGRESE DATOS </LABEL><br>
<input type="text" name="codigo" />
<input type="submit" value="Invoca Servicio Soap" name="boton" />
<br>

<?php
if(isset($_POST['boton'])){
    $codigo=$_POST['codigo'];
	 echo $codigo."<br>";
	$respuesta=$cliente->call("MiFuncion",array("miparametro"=>$codigo));
	if ($cliente->fault) {
	echo 'Fallo';
	print_r($respuesta);
} else {	// Chequea errores
	$err = $cliente->getError();
	if ($err) {		// Muestra el error
		echo 'Error' . $err ;
	} else {		// Muestra el resultado
		echo 'Resultado';
		print_r ($respuesta);
	}
}
} else{

}


?>