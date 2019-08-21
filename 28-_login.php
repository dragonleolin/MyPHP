<?php
    session_start();

    if(isset($_POST['account'])){
        if($_POST['account']=='luke' && $_POST['password']=='123'){
            $_SESSION['user'] = $_POST['account'];
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