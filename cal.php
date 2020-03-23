<?php
if(isset($_POST['num1'])){
    echo "入力されています";
}else{
    echo "入力されていません";
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];
    switch ($op) {
        case "plus":
            echo $num1 + $num2;
            break;
        case "minus":
            echo $num1 - $num2;
            break;
        case "mul":
            echo $num1 * $num2;
            break;
        case "div":
            echo $num1 - $num2;
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="num1">
        <select name="op">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="text" name="num2">
        <input type="submit" value="=">
    </form>
</body>


</html>