<?php

function assignPEM() {

    $signature = null;
    $toSign = "caminho/para/arquivo/a/ser/assinado"; // poderia vir de um formulário
    
    // Ler a chave
    $fp = file_get_contentes("key.pem"); // poderia vir de um formulário
    $pkeyid = openssl_get_privatekey($priv_key);
    
    // Calcula a assinatura - OPENSSL_ALGO_SHA1 é o padrão
    openssl_sign($toSign, $signature, $pkeyid);
    openssl_free_key($pkeyid);
    // Assinanando
    $hex = bin2hex( $signature );
    $toSign .= "/" . $hex; // $toSign possui o conteudo do arquivo com a assinatura
    echo $toSign; 
}