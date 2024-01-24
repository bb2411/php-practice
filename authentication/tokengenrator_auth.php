<?php
    $key = 'bhargavbhatt24';
    $iv = "0123456789abcdef";
    function encryptData($data) {
        global $iv,$key;
        $cipher = "aes-256-cbc";
        $encrypted = openssl_encrypt($data, $cipher,$key, 0, $iv);
        return base64_encode($encrypted);
    }
    function encrypttoken($array) {
        $jsonString = json_encode($array);
        $encryptedString = encryptData($jsonString);
        return $encryptedString;
    }
    
    function decryptData($encryptedData) {
        global $iv,$key;
        $cipher = "aes-256-cbc";
        $decrypted = openssl_decrypt(base64_decode($encryptedData), $cipher, $key, 0, $iv);
        return $decrypted;
    }
?>