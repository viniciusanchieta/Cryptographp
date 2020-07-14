<?php 
    require_once 'env.php';
    header('Content-Type: application/json');
    $json = file_get_contents("php://input");

    $data = json_decode($json, true);

    $text = $data['text'];
    $key = env('key');
    $plaintext = $text;
    $ivlen = openssl_cipher_iv_length($cipher=env('cipher'));
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
    $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
    $ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );
    
    $arr = array('encrypt' => $ciphertext, 'return' => true);
    echo json_encode($arr);

  
?>