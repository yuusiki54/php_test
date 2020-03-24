<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    echo $num1 + $num2 + $num3;
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
        <input type="number" name="num1">
        +
        <input type="number" name="num2">
        ＋
        <input type="number" name="num3">
        <input type="submit" value="=">

    </form>
</body>

</html>