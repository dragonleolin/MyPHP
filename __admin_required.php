<?php
    if(! isset($_SESSION)){
        session_start();
    }
    if(! isset($_SESSION['loginUser'])){
        header('Location: __login.php');
        exit;
    }