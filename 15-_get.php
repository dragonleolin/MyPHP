<?php 

    // 在網址後加?a=12&b=25
    $a = isset($_POST['a']) ? intval($_POST['a']): 0;
    $b = isset($_POST['b']) ? (int)$_POST['b']: 0;
    echo $a + $b;


    // echo $_GET['a'] + $_GET['b'];