<?php

    $a = 10;
    $b =&$a;

    $c = 20;
    $d = $c;

    $b = 55;
    $d = 66;

    echo '$a='.$a.'$b='.$b.'$c='.$c.'$d='.$d;

    echo '<br>';

    function swap(&$a, &$b){
        $c = $a;
        $a = $b;
        $b = $c;

        echo "\$a= $a ,\$b= $b, \$c= $c <br>";
    }

    $m = 100;
    $n = 'abc';
    swap($m, $n);
    echo "$m , $n";

