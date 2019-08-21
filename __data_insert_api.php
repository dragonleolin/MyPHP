<?php
require __DIR__ . '/__connect_db.php';

#empty判斷是否為空，若沒有輸入會直接離開。 !isset()若沒有輸入會返回空字串，一樣會是可以執行
if(empty($_POST['name'])){
    exit;
}

#?是要填入的值，為了避免隱碼攻擊，NOW()會帶入系統時間
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

echo $stmt->rowCount();

?>
