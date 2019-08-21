<?php

exit; //可以避免重複執行


require __DIR__. '/__connect_db.php';

for($i; $i<100; $i++){
    $s = "INSERT INTO `address_book`
    (`name`, `mobile`, `birthday`, `address`, `created_at`) 
    VALUES
    ('李大仁{$i}','093124541','1988-08-12','新北市','2019-08-20 12:00:00')
   ";
//    echo $s ; //除錯用
//    break;    //除錯用

$pdo -> query($s);
}
