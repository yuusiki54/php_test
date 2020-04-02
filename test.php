<?php
/*
$nums[][]
B: $nums[0] 1-15
I: $nums[1] 16-30
~
O: $nums[4] 61-75

$nums[$i]$i * 15 + 1 ~ $i * 15 + 15
*/
$nums = [];

for($i = 0; $i < 5;$i++){
    $col = range($i * 15 + 1, $i * 15 +15);
}
echo $col;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ビンゴシート</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id ="container">
        <table>
            <tr>
                <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </table>
    </div>
</body>
</html>