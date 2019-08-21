<?php
    session_start();

    $accounts = [
        'vip0' => '1234',
        'vip1' => '245256',
        'vip2' => '8455',
        'vip3' => 'adasd',
        'vip4' => 'fsfse',
    ];

    if(isset($_POST['account'])){

    if(isset($accounts[$_POST['account']])){
        if($_POST['password']==$accounts[$_POST['account']]){
            $_SESSION['user'] = $_POST['account'];
        }
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <?php if(isset($_SESSION['user'])):?>
        <h2><?= $_SESSION['user'] ?>, 您好</h2>
        <p><a href="29-_logout.php">登出</a></p>
    <?php else: ?>
    <form action="" method="POST">
        <input type="text" name="account" placeholder="帳號"><br>
        <input type="text" name="password" placeholder="密碼"><br>
        <input type="submit" value="send">
    </form>
<?php endif;?>
</body>
</html>