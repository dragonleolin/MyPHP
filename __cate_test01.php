<?php

require __DIR__ . '/__connect_db.php';

$sql = "SELECT * FROM `categories`";

$stmt = $pdo -> query($sql);

$rows = $stmt->fetchAll();

$level1 = [];

// 拿第一層
foreach($rows as $r){
    if($r['parent_sid']==0){
        $level1[] = $r;
    }
}

// 拿第二層
foreach($level1 as $k=>$v){
    foreach ($rows as $r){
        if($r['parent_sid']==$v['sid']){
            $level1[$k]['nodes'][] = $r;
        }
    }
}



// echo json_encode($rows, JSON_UNESCAPED_UNICODE);
echo json_encode($level1, JSON_UNESCAPED_UNICODE);

