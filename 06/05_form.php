<?php

$msg = '';
$err_msg = '';
$num1 = '';
$num2 = '';
$num3 = '';
$answer = '';
$sum = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if (empty(is_numeric($num1)) || empty(is_numeric($num2)) || empty(is_numeric($num3))) {
        $err_msg = '全てに数字を入力してください';
    } else {
        $answer = $num1 + $num2 + $num3;
        $sum  = "合計値は {$answer}です";
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>05_form.php</title>
</head>

<body>
    <h1>数字を入力してください</h1>
    <form action="" method="POST">
        <div>
            <?php if (!empty($err_msg)) : ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
            <div>
                <div>
                    <label for="">1つめの数字</label><br>
                    <input type="number" name="num1"><br>
                    <label for="">2つめの数字</label><br>
                    <input type="number" name="num2"><br>
                    <label for="">3つめの数字</label><br>
                    <input type="number" name="num3"><br>
                </div>
                <div>
                    <input type="submit" value="送信">
                </div>
    </form>
    <div>
        <?= htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') ?>
    </div>
</body>

</html>
