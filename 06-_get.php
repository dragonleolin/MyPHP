<?php 

    // 在網址後加?a=12&b=25
    $a = isset($_GET['a']) ? intval($_GET['a']): 0;
    $b = isset($_GET['b']) ? (int)$_GET['b']: 0;
    echo $a + $b;


    // echo $_GET['a'] + $_GET['b'];