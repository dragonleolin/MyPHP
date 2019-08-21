<?php

    require __DIR__. '/__connect_db.php';

    $stem = $pdo -> query("SELECT * FROM `address_book`");

    while($row = $stem -> fetch()){

        echo "{$row['name']}  {$row['mobile']}<br>"; //取得裡面需要的資料
    }

    // $row = $stem -> fetchAll(); //搜尋全部的資料