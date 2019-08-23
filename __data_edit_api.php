<?php
require __DIR__ . '/__connect_db.php';

$result = [
    'success'=> false,
    'code' => 400,
    'info' => '資料欄位不足',
    'post' => $_POST,
];

#empty判斷是否為空，若沒有輸入會直接離開。 !isset()判斷是否有回傳值，若沒有輸入會返回空字串，一樣會是可以執行
if(empty($_POST['name']) or empty($_POST['sid'])){
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

// TODO: 檢查必填欄位, 欄位值的格式

# \[value\-\d\]

$sql = "UPDATE `address_book` SET 
        `name`=?,
        `email`=?,
        `mobile`=?,
        `birthday`=?,
        `address`=?
        WHERE `sid`=? ";

$stmt = $pdo->prepare($sql);

$stmt -> execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthday'],
    $_POST['address'],
    $_POST['sid'],
]);

if($stmt->rowCount()==1){
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '修改成功';
}else{
    $result['code'] = 420;
    $result['info'] = '資料沒有修改';
}


echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>
