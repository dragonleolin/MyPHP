<?php
require __DIR__ . '/__connect_db.php';

$result = [
    'success'=> false,
    'code' => 400,
    'info' => '資料欄位不足',
    'post' => $_POST,
];

#empty判斷是否為空，若沒有輸入會直接離開。 !isset()判斷是否有回傳值，若沒有輸入會返回空字串，一樣會是可以執行
if(empty($_POST['email']) or empty($_POST['password'])){
    echo json_encode($result, JSON_UNESCAPED_UNICODE);
    exit;
}


#?是要填入的值，為了避免隱碼攻擊;NOW()會帶入系統時間
$sql = "SELECT `id`, `email`, `nickname` FROM `members` WHERE `email`=? AND `password`=SHA(?)";

$stmt = $pdo->prepare($sql);

$stmt -> execute([
    $_POST['email'],
    $_POST['password'],
]);
$row = $stmt->fetch();
if(!empty($row)){
    $_SESSION['loginUser'] = $row;

    $result['success'] = true;
    $result['code'] = 200;
    $result['info'] = '登入成功';
}else{
    $result['code'] = 420;
    $result['info'] = '登入失敗';
}


echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>
