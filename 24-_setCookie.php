<?php 
    //設定cookie在header
    setcookie("myc", "hello, cookie2", time()+30);
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
        <!-- //讀取cookie的內容 -->
        <?= $_COOKIE['myc']; ?> 
        
    </div>

</body>
</html>