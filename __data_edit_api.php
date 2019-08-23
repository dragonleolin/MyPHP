<?php
require __DIR__ . '/__connect_db.php';

$result = [
    'success'=> false,
    'code' => 400,
    'info' => '沒有輸入姓名',
    'post' => $_POST,
];

#empty判斷是否為空，若沒有輸入會直接離開。 !isset()判斷是否有回傳值，若沒有輸入會返回空字串，一樣會是可以執行
if(empty($_POST['name'])){
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

// TODO: 檢查必填欄位, 欄位值的格式

# \[value\-\d\]

$sql = "UPDATE `address_book` SET `sid`=?,`name`=?,`email`=?,`mobile`=?,`birthday`=?,`address`=?,`created_at`=? WHERE 1";


$stmt -> execute([
    $_POST['name'],
    $_POST['email'],
    $_POST['mobile'],
    $_POST['birthday'],
    $_POST['address'],
]);

if($stmt->rowCount()==1){
    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '新增成功';
}else{
    $result['code'] = 420;
    $result['info'] = '新增失敗';
}


echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>
