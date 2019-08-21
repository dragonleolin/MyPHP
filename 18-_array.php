<?php
    // $ar = array(2, 4, 6, 99, 'hi'); // 索引式陣列
    $ar = [2, 4, 6, 99, 'hi']; // 索引式陣列


    // 關聯式陣列
    // $br = array(
    //     "name" => "david",
    //     "age" => 20,
    //     "hi", 2, 3,
    // );
    $br = [
        "name" => "david",
        "age" => 20,
        "hi", 2, 3,
    ];

    
    for($i=1;$i<10;$i++){
        $cr[] = $i*$i;
    }

    echo '<pre>';
    
    print_r($ar);
    print_r($br);
    print_r($cr);



    // var_dump($ar);    
    // var_dump($br);

    
    echo '</pre>';