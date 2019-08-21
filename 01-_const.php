<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>const</title>
</head>
<body>
<?php
    define('MY_CONST', 812);
    $a = 12;

    echo (18+6).'<br>';
    echo __DIR__;
    echo '<br>';
    echo __FILE__;
    echo '<br>';

    echo __LINE__;
    echo '<br>';

    echo MY_CONST;
    echo '<br>';

    echo '$a='.$a;
    
?>

</body>
</html>