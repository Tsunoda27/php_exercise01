<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition':
        $response = "{$num1} + {$num2} = " . $num1 + $num2;
        break;
    case 'subtraction':
        $response = "{$num1} - {$num2} = " . $num1 - $num2;
        break;
    case 'multiplication':
        $response = "{$num1} * {$num2} = " . $num1 * $num2;
        break;
    case 'division':
        $response = "{$num1} / {$num2} = " . $num1 / $num2;
        break;

    default:
        $response = "正しい演算子を指定して下さい";
        break;
}
echo $response;
