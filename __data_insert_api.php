<?php
require __DIR__ . '/__connect_db.php';

$result = [
    'success'=> false,
    'code' => 400,
    'info' => '沒有輸入姓名',
];

#empty判斷是否為空，若沒有輸入會直接離開。 !isset()判斷是否有回傳值，若沒有輸入會返回空字串，一樣會是可以執行
if(empty($_POST['name'])){
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}

/*
$sql = sprintf("INSERT INTO `address_book`(
            `name`, `email`, `mobile`, `birthday`, `address`, `created_at`
            ) VALUES (%s, %s, %s, %s, %s, NOW())",
    $pdo->quote($_POST['name']),
    $pdo->quote($_POST['email']),
    $pdo->quote($_POST['mobile']),
    $pdo->quote($_POST['birthday']),
    $pdo->quote($_POST['address'])
);
echo $sql;
$stmt = $pdo->query($sql);
*/

#?是要填入的值，為了避免隱碼攻擊;NOW()會帶入系統時間
$sql = "INSERT INTO `address_book`(
    `name`, `mobile`, `birthday`, `address`, `created_at`
    ) VALUES (?, ?, ?, ?, NOW())";

$stmt = $pdo->prepare($sql);

#execute裡面的陣列順序要跟上面sql的順序一樣
$stmt -> execute([
    $_POST['name'],
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
