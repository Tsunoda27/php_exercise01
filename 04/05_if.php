<?php

// echo '$numの値を入力して下さい: ';
// $num = trim(fgets(STDIN));

//以下line19まで自分用に残しておきます
// if ($num == 1) {
//     $msg = '素数ではありません';
// } else {
//     for ($i = 2; $i <= $num; $i++) {
//         if ($num % $i == 0 && $i != $num) {
//             $msg = '素数ではありません';
//             break;
//         } else {
//             $msg = '素数です';
//         }
//     }
// }
// echo $msg;

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));
$prime_number = true;

if ($num == 1) {
    $prime_number = false;
}
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $prime_number = false;
        break;
    }
}
if ($prime_number == true) {
    echo "{$num}は素数です";
} else {
    echo "{$num}は素数ではありません";
}
