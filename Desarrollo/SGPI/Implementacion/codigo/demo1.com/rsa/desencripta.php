<?php


$fileprivate=$_POST['kpri'];


// obtiene la llave privada
if (!$privateKey = openssl_pkey_get_private('file://'.$fileprivate))
{
    die('Fallo la obtencion de la clave privada');
}
$a_key = openssl_pkey_get_details($privateKey);
 $file1 = fopen("codificado.txt", "r") or exit("No se pudo abrir el archivo!");
 $encrypted = fread($file1, filesize("codificado.txt"));  
 fclose($file1);
// Desencripta la data por partes.
$chunkSize = ceil($a_key['bits'] / 8);
$output = '';
 
while ($encrypted)
{
    $chunk = substr($encrypted, 0, $chunkSize);
    $encrypted = substr($encrypted, $chunkSize);
    $decrypted = '';
    if (!openssl_private_decrypt($chunk, $decrypted, $privateKey))
    {
        die('Failed to decrypt data');
    }
    $output .= $decrypted;
}
openssl_free_key($privateKey);
 
// Udescromprime la data encriptada.
$output = gzuncompress($output);
 
echo '<br /><br /> Datos Desencriptados: ' . $output;
?>