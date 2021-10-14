<?php
 
$filepublic=$_POST['kpub'];
$fileprivate=$_POST['kpri'];
$filemensaje=$_POST['msg'];

$file1 = fopen($filemensaje, "r") or exit("No se puede abrir el archivo!");
 $plaintext = fread($file1, filesize($filemensaje));  
 fclose($file1);
 
echo 'Mensaje Original: ' . $plaintext;
// Comprime la data a ser enviada
$plaintext = gzcompress($plaintext);
 
// carga la llave publica
$publicKey = openssl_pkey_get_public('file://'.$filepublic);
$a_key = openssl_pkey_get_details($publicKey);
 
// Encrypt the data in small chunks and then combine and send it.
$chunkSize = ceil($a_key['bits'] / 8) - 11;
$output = '';
 
while ($plaintext)
{
    $chunk = substr($plaintext, 0, $chunkSize);
    $plaintext = substr($plaintext, $chunkSize);
    $encrypted = '';
    if (!openssl_public_encrypt($chunk, $encrypted, $publicKey))
    {
        die('Hubo un error al encriptar');
    }
    $output .= $encrypted;
}
openssl_free_key($publicKey);
 
// This is the final encrypted data to be sent to the recipient
$encrypted = $output;

echo '<br>Mensaje Encriptado:'.$encrypted.'<br>';

$file3 = fopen("codificado.txt", "w") ;
fwrite($file3, $encrypted);
fflush($file3);
fclose($file3);



?>

<form method="post" action="desencripta.php">
<input type="hidden" name="kpri" id="kpri" value="<?php echo $fileprivate; ?>" ><br>
<input type="submit" name="Submit1" value="Desencriptar" >
</form>