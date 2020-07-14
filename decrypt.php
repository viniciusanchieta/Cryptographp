 <?php
    require_once 'env.php';
    header('Content-Type: application/json');
    $json = file_get_contents("php://input");

    $data = json_decode($json, true);
    $c = base64_decode($data['encrypt']);
    $ivlen = openssl_cipher_iv_length($cipher=env('cipher'));
    $iv = substr($c, 0, $ivlen);
    $hmac = substr($c, $ivlen, $sha2len=32);
    $ciphertext_raw = substr($c, $ivlen+$sha2len);
    $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, env('key'), $options=OPENSSL_RAW_DATA, $iv);
    $calcmac = hash_hmac('sha256', $ciphertext_raw,env('key'), $as_binary=true);
    
    if (hash_equals($hmac, $calcmac)){
        $arr = array('decrypt' => $original_plaintext, 'return' => true);
        echo json_encode($arr);
    }
    else{
        $arr = array('return' => false);
        echo json_encode($arr);
    }