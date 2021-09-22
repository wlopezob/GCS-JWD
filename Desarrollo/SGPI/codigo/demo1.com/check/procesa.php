<?php
if(isset($_POST['submit'])){//Validacion de envio de formulario
if(!empty($_POST['genero'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['genero'] as $selected){
echo $selected."</br>";// Imprime resultados
}
}
}
?>