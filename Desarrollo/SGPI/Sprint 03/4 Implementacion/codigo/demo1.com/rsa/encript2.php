<?php
   // Save Private Key
	$privkey = openssl_pkey_new();
	openssl_pkey_export_to_file($privkey, 'C:/sites/privatekey.pem');
	
	//Save Public Key
	$dn = array(
		"countryName" => "IN",
		"stateOrProvinceName" => "Karnataka",
		"localityName" => "test1",
		"organizationName" => "test2",
		"organizationalUnitName" => "test3",
		"commonName" => "www.test.com",
		"emailAddress" => "xyz@test.com"
	);
	$cert = openssl_csr_new($dn, $privkey);
	$cert = openssl_csr_sign($cert, null, $privkey, 365);
	
	echo $cert;
	openssl_x509_export_to_file($cert, 'C:/sites/publickey.pem');
	
	
	// To encrpt data
	$data = 'Welcome To TuorialsPoint';
	$isvalid = openssl_public_encrypt ($data, $crypted , file_get_contents('C:/sites/publickey.pem'),OPENSSL_PKCS1_PADDING);	
	echo "Data encryption : ".$crypted;
	echo ">br/<>br/<";
	
	if ($isvalid) {	
      openssl_private_decrypt ($crypted, $decrypted , file_get_contents('C:/sites/privatekey.pem'),OPENSSL_PKCS1_PADDING);	
		echo "Data decryption : ".$decrypted;
	}
?>