<?php
$pubkey='MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAvloDvYweGYtenA2hV+RE C8K/dBSk3zJZmtBOsI3yRaMfY81TclWsd2t4ptF2cGorDBLz/NKCTL8OWAKXLA5n Q/lsR2v4oBTSwkFFu7T6TmC76NuBqxW2+Ao41arpvTsSQQxopotCKsgUkwDEUJFa +DSVo7QQliQXNxnCNh0bP5Rc0Cfy4YyrK3v2GGdIdkHvuCWLJmd68CjCm9C5OpJ2 OKpixwX2eijt2eI40NDoHETG7iNDezAayB20Ggt8AzxDSZZWi6j9k8vAMPp7d1Lb NBw5FgYGtMFWkW7yAOCvo8um5fHVfX2t9EVPiaet8h8lWSKGqw6+ls2nvV3il6tr kARMd79VYxubA/l0JoWISo48rScDAtBzHUnbVsG2Oh84TiLIEwO2SYpk+5Oz+fyR 31upMHjE0iF4umX8Iw/HMr+8twiAHAfx7KhtOPp0CkrUJC8lvFGoXjpWkhTr+ooy zTLa+ebs6tiJNBI9Z6l0WGM3OjDFP+vzfCCdsr2jYMi4CwFVh9Gb4nkVULujL69t f/+CwC0gLM9YXyx2u1sXnYnddJtPUyuY/B4K/PBeWG7orXH8QYy3qiccgdrTjKF8 ubjsCmkLCBj0kwLeW0d0jvczMQkL+oDEyfhrIYYO60pYWPZcKv0ihzgnfZyAiHBu DZhDR49Scv09XP3rKqSRumcCAwEAAQ==';

echo '<form method="post" action="">';
echo '  <label for="data">Texto a encriptar :</label><br> ';
echo '  <input type="text" id="data" name="data"  style="width:500px"><br>';
echo '  <label for="pubkey">clave publica:</label><br>';
echo '  <input type="text" id="pubkey" name="pubkey" style="width:500px">';
echo  '<input type="submit" name="Submit1" value="submit" >';
echo ' </form>';

if(isset($_POST["Submit1"]))
{
	$data=$_POST['data'];
	//$pubkey=$_POST['pubkey'];
	openssl_pkey_get_public($pubkey);
	
	echo $data;
	echo $pubkey.'<br>';
	// Encrypt the data to $encrypted using the public key
	openssl_public_encrypt($data, $encrypted, $pubkey);
	echo "datos encriptados:".$encrypted.'<br>';

}

?>