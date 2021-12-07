<?php
$config = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 4096,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);
   
// Create the private and public key
$res = openssl_pkey_new($config);
openssl_pkey_export_to_file($res, 'private_dlr.key');
// Extract the private key from $res to $privKey
openssl_pkey_export($res, $privKey);
//openssl_pkey_export_to_file($res, 'c:\sites\misclaves.pem', 'micontrasena')
// Extract the public key from $res to $pubKey
$pubKey = openssl_pkey_get_details($res);
$pubKey = $pubKey["key"];
//echo "llave publica:".$pubKey.'<br>';
$data = 'plaintext data goes here';

// Encrypt the data to $encrypted using the public key
openssl_public_encrypt($data, $encrypted, $pubKey);

echo "llave publica:".$pubKey.'<br>';
echo "datos encriptados:".$encrypted.'<br>';

// Decrypt the data using the private key and store the results in $decrypted
openssl_private_decrypt($encrypted, $decrypted, $privKey);

echo $decrypted.'<br>';

echo "llave privada:".$privKey.'<br>';
?>