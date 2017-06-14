<?php



// $string =base64_encode(md5(openssl_random_pseudo_bytes(32)));
// echo $string;
// function Gen($length =5) {
//     $characters =base64_encode(md5(openssl_random_pseudo_bytes()));
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength-1)];
//     }
// return $randomString;
//
//
//
// }
function Gen($length = 4) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = 'WADS-';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


echo Gen();
 ?>
