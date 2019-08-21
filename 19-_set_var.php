<?php

    // 關聯式陣列
    $br = [
        "name" => "david",
        "age" => 20,
        "hi", 2, 3,
    ];

    $cr = $br; // 設定值, 複製一份後再設定
    $dr = &$br; // 設定位址


    $cr['age'] = 100;
    $dr['age'] = 66;

    print_r($br);
    print_r($cr);
    print_r($dr);

