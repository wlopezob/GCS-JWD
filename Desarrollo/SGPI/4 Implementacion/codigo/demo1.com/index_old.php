<html>
<body>
  <h1>SITE 1 </h1>
  <?php
        echo "PHP funciona";
		phpinfo(); 
		//$link = mysqli_connect("localhost", "root", "ROOT");
		if (mysqli_connect("localhost", "root", "ROOT") ){
			echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
			}else{
			echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
			}

       // mysqli_select_db("bd_apsmm", $conx);
		echo "selecciona";
		$consulta= "SELECT * FROM viviendas";
		//mysqli_query($consulta);
		$datos = mysqli_query($consulta);
		echo "datos";
		$fila= mysqli_fetch_array($datos);
		echo $fila["edificio"];
		echo "fin";
	?>
	</body>
	</html>
	