<?php
    session_start();
    //session_destroy(); 會清除session資料

    unset($_SESSION['user']);
    if(! empty($_SERVER['HTTP_REFERER'])){
        header('Location: '. $_SERVER['HTTP_REFERER']);
    } else {
        header('Location: 28-_login.php');
    }

