<?php

$age = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = '私は' .  $_POST['age'] . '歳です';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>01_form.php</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="age">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <div>
        <?= htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>
    </div>
</body>

</html>
