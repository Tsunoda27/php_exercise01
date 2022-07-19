<?php

echo '$numの値を入力して下さい: ';
$num = trim(fgets(STDIN));

if ($num == 1) {
    echo "${num}は素数ではありません";
} elseif ($num == 2) {
    echo "${num}は素数です";
} else {
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            echo "${num}は素数ではありません";
            break;
        } else {
            echo "${num}は素数です";
            break;
        }
    }
}
