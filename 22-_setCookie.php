<?php 
    //設定cookie在header
    setcookie("myc", "hello, cookie");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>setCookie</title>
 
    
</head>
<body>
    <div class="container">
        <!-- 第一次會沒讀到是因為還未送出 -->
        <?= $_COOKIE['myc']; ?>
    </div>

</body>
</html>