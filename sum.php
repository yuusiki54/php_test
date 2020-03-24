<?php
//↓送られてきたメソッドがpostだったら以下の処理を実行するという意味？
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = (int) $_POST["num1"];
    $num2 = (int) $_POST["num2"];
    echo $num1 + $num2;
}

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <!-- ＋したい数字の1つ目 -->
        <input type="text" name="num1">
        +
        <!-- ＋したい数字の2つ目 -->
        <input type="text" name="num2">
        <input type="submit" value="=">
    </form>

</body>

</html>
