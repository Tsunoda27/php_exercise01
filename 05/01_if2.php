<?php

$poket_money = 1000;
$fund_raising = 101;

echo "あなたの所持金は${poket_money}です。" . PHP_EOL;
echo "${fund_raising}円募金しました。" . PHP_EOL;

while ($fund_raising <= $poket_money) {
    $poket_money =  $poket_money - $fund_raising;
    echo "残り残高は${poket_money}円です。" . PHP_EOL;
    if ($fund_raising > $poket_money) {
        break;
    }
    echo "${fund_raising}円募金しました。" . PHP_EOL;
}
echo 'あなたはこれ以上募金できません。';
