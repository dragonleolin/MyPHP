<?php
require __DIR__ . '/__connect_db.php';




$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //使用者按下選擇頁數

$per_page = 10;

$t_sql = "SELECT COUNT(1) FROM `address_book`";

// $t_stmt = $pdo->query($t_sql);
// $totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0];//拿到總筆數
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0]; //拿到總筆數
$totalPage = ceil($totalRows / $per_page);
// printf("$totalRows<br>");
// echo "$totalPage<br>";
// exit;
if($page<1){
  $page=1;
}
if($page>$totalPage){
    $page=$totalPage;
}

$result = [
    'page' => $page,
    'per_page' => $per_page,
    'totalPage' => $totalPage,
    'rows' => [],
];



$sql = sprintf(
  "SELECT * FROM `address_book` ORDER BY `sid` ASC LIMIT %s, %s",
  ($page - 1) * $per_page,
  $per_page
);

$stmt = $pdo->query($sql);

$result['rows'] = $stmt->fetchAll();

echo json_encode($result, JSON_UNESCAPED_UNICODE);

?>
 