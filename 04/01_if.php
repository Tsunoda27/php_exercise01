<?php

echo '$aの値を入力して下さい: ';
$a = trim(fgets(STDIN));

echo '$bの値を入力して下さい: ';
$b = trim(fgets(STDIN));

if ($a > $b) {
    echo $a . PHP_EOL;
} elseif ($b > $a) {
    echo $b . PHP_EOL;
} else {
    echo '入力された値は等しいです' . PHP_EOL;
}
