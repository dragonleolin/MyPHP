<?php
    session_start();
    //session_destroy(); 會清除session資料

    unset($_SESSION['loginUser']);
    if(! empty($_SERVER['HTTP_REFERER'])){
        header('Location: '. $_SERVER['HTTP_REFERER']);
    } else {
        header('Location: __index__.php');
    }

