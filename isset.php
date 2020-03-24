<?php
if (isset($_REQUEST['check'])){
    echo '商品をお届けします。';
}else{
    echo 'またの機会をお待ちしています。';
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
    <form method="post">
        <p><input type="checkbox" name="check">契約内容を承諾し、商品を購入します。</p>
        <p><input type="submit" value="確定"></p>
    </form>
</body>


</html>