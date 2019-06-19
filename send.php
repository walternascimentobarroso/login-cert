<?php

$file = $_FILES['file']['name'];


$ext = ((new SplFileInfo($file))->getExtension());

if($ext == "cer") {
    logimCER($_FILES);
}

if($ext == "pem") {
    logimPEM($_FILES);
}


echo '<pre>';
print_r($_FILES);
print "</pre>";

function loginCER($file) {
    $certificateCAcer = $file;
    $certificateCAcerContent = file_get_contents($certificateCAcer);
    /* Convert .cer to .pem, cURL uses .pem */
    $certificateCApemContent =  '-----BEGIN CERTIFICATE-----'.PHP_EOL
    .chunk_split(base64_encode($certificateCAcerContent), 64, PHP_EOL)
    .'-----END CERTIFICATE-----'.PHP_EOL;
    $certificateCApem = $certificateCAcer.'.pem';
    file_put_contents($certificateCApem, $certificateCApemContent); 
}

function logimPEM($file) {
    $certs = array();
    $pkcs12 = file_get_contents($file);
    // No password
    openssl_pkcs12_read( $pkcs12, $certs, "" );
    print_r( $certs );
}