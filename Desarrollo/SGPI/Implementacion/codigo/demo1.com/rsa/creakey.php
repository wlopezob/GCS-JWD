<?php

$filepublic=$_POST['kpub'];
$fileprivate=$_POST['kpri'];
$filemensaje=$_POST['msg'];
$mensaje=$_POST['mensaje'];
$config = array(
    "private_key_bits" => 2048, // Tamaño de la llave.
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

$privateKey = openssl_pkey_new($config);
// Graba la llave privada en el archivo.
openssl_pkey_export_to_file($privateKey, $fileprivate);
openssl_pkey_export($privateKey, $privKey); 
// Genera una llave publica para esa llave privada
$a_key = openssl_pkey_get_details($privateKey);
// Salva la llave publica en un archivo.
file_put_contents($filepublic, $a_key['key']);
 
// libera la llave priva de memoria.
openssl_free_key($privateKey);

// crea archivo de mensaje
$file3 = fopen($filemensaje, "w");
fwrite($file3, $mensaje);
fflush($file3);// Fuerza a que se escriban los datos pendientes en el buffer:
fclose($file3);

echo "llave Privada:<br>".$privKey.'<br>';
echo "llave Publica:<br>".$a_key['key'].'<br>';
echo "mensaje:".$mensaje;


?>

                                                                                                                                                                                                                                                                                                                                                                                                     