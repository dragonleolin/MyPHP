<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>for</title>
</head>

<body>

<?php
// PHP 的邏輯運算子拿到的一定是布林值
$a = 7 && 5; // true, 輸出到頁面會變成 1
echo "$a <br>";
$a = 0 && 5; // false, 輸出到頁面會變成空字串
echo "$a <br>";
$a = 7 and 5; //7
echo "$a <br>";
$a = 0 and 5; //0
echo "$a <br>";


echo ($a = 7 and 5) ? 'true<br>' : 'false<br>';
echo ($a = 0 and 5) ? 'true<br>' : 'false<br>';

?>
    


</body>

</html>