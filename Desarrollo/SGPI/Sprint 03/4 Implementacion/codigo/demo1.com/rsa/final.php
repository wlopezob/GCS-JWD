
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>EXAMEN FINAL DE PROGRAMACION AVANZADA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
</head>

<body>
<b>Universidad Ricardo Palma</b><br>
Maestria de Ingenieria de Software<br>
Examen final de Programacion Avanzada<br>
AUTOR: Daniel López Romero<br>
-------------------------------------<br>

  <p>Esta aplicacion es una prueba de concepto para demostrar uso de llave publica y privada para cifrar un mensaje, tambien conocido como firma digital.</p>
  <p>Esta primera pantalla solicitara un nombre para el archivo de la llave publica, un nombre .</p>
  <p>Para el cifrado se esta usando una libreria requiere de un entorno linux, por ello se hace la desmostracion en hosting de estas caracteristicas</p>

<p>
<b>Encriptación en PHP con OpenSSL</b><br>
OpenSSL es una herramienta open source para implementar los protocolos TLS y SSL además de ser una completa librería de encriptación. PHP implementa OpenSSL mediante un módulo. Aunque no están disponibles todas las posibilidades que OpenSSL ofrece (podrían añadirse en el futuro), permite hacer uso de esta herramienta para sus usos más básicos.
La cantidad de datos que se pueden encriptar y el tamaño de los datos encriptados se determinan por el tamaño de la llave. El tamaño de los datos encriptados en la llave son el número de bytes redondeados hacia arriba. Una llave de 1024-bit serán 128 bytes (1024 dividido para 8), y aunque sólo se vaya a encriptar 1 bit, el tamaño será el mismo. La cantidad máxima de datos que se pueden encriptar son 11 bytes menos que su cantidad máxima, en este caso serían 117 bytes los que pueden ser encriptados.
No se pueden encriptar grandes cantidades de datos de una vez, por lo que se divide en porciones. En el ejemplo que sigue, dividimos los datos en porciones antes de encriptarlos, y después se combinan los datos encriptados y se envían. El receptor despieza los datos encriptados de nuevo en porciones y los desencripta.
</p>
<form method="post" action="creakey.php">
<label for="kpub"><b>Nombre del archivo que contendra la llave publica:</b></label>
<input type="text" placeholder="kpub" name="kpub" id="kpub" value="public.key" ><br>
<label for="kpri"><b>Nombre del archivo que contendra la llave privada:</b></label>
<input type="text" placeholder="kpri" name="kpri" id="kpri" value="private.key" ><br>
<label for="msg"><b>Nombre del archivo que contendra el mensaje:</b></label>
<input type="text" placeholder="msg" name="msg" id="msg" value="mensaje.txt" ><br>

<textarea maxlength="1000" placeholder="mensaje a cifrar" name="mensaje" id="mensaje" rows="10"cols="100"></textarea>
<input type="submit" name="Submit1" value="Generar LLAVES" >
</form>
</body>
</html>



