<?php

$usuario=$_POST["username"];
$clave=$_POST["password"];


if ($usuario=='DANIEL'){

	if ($clave=='admin'){
	     echo "BIENVENIDO AL SISTEMA - USUARIO y CONTRASEÑA CORRECTA";
		 
	}else{
		echo "PASSWORD INCORRECTO";
	}


}else{

echo "USUARIO INCORRECTO";
}


?>