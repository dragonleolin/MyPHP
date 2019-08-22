<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'data_list';

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
  header('Location:__data_list.php');
  exit;
}
if($page>$totalPage){
  header('Location:__data_list.php?page='.$totalPage);
  exit;
}

$sql = sprintf(
  "SELECT * FROM `address_book` ORDER BY `sid` ASC LIMIT %s, %s",
  ($page - 1) * $per_page,
  $per_page
);

$stmt = $pdo->query($sql);


// $stem = $pdo -> query("SELECT * FROM `address_book` ORDER BY `sid` ASC");
// $rows = $stem ->fetchAll();

?>
 
<?php require __DIR__ . '/__html_header.php' ?>
<?php require __DIR__ . '/__navbar.php' ?>
<div class="container">
  <div style="margin-top: 2rem;">
    <nav aria-label="Page navigation example">
      <ul class="pagination">
      <li class="page-item">
                <a class="page-link" href="?page=<?= $page-1 ?>">
                    <i class="fas fa-chevron-left"></i>
                </a>
            </li>
        <?php 
        $p_start = $page-5;
        $p_end = $page+5;
        for($i = $p_start; $i <= $p_end; $i++) : 
        if($i<1 or $i>$totalPage) continue;
          ?>
        
        <li class="page-item"
        ><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
        </li>
        <?php endfor; ?>
        <?php 
        
        ?>
        <li class="page-item">
                <a class="page-link" href="?page=<?= $page+1 ?>">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </li>
      </ul>
    </nav>
    <table class="table table-striped table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">姓名</th>
          <th scope="col">Email</th>
          <th scope="col">手機</th>
          <th scope="col">生日</th>
          <th scope="col">地址</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($r = $stmt->fetch()) { ?>
        <tr>
          <!-- 加入htmlentities()會使用跳脫字元，避免讓使用者下script語法-->
          <td><?= htmlentities($r['sid']) ?></td>
          <td><?= htmlentities($r['name']) ?></td>
          <td><?= htmlentities($r['email']) ?></td>
          <td><?= htmlentities($r['mobile']) ?></td>
          <td><?= htmlentities($r['birthday']) ?></td>
          <td><?= htmlentities($r['address']) ?></td>
        </tr>
        <?php } ?>
        <?php /*
    <?php foreach($rows as $r): ?>
    <tr>
      <td><?= $r['sid'] ?></td>
      <td><?= $r['name'] ?></td>
      <td><?= $r['mobile'] ?></td>
      <td><?= $r['birthday'] ?></td>
      <td><?= $r['address'] ?></td>
    </tr>
    <?php endforeach; ?>
     */ ?>
      </tbody>
    </table>
  </div>
</div>


<?php require __DIR__ . '/__html_footer.php' ?>
