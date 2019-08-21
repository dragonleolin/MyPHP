<?php require __DIR__. '/__html_header.php' ?>
<?php require __DIR__. '/__navbar.php' ?>
<div class="container">


<?php

    require __DIR__. '/__connect_db.php';

    $stem = $pdo -> query("SELECT * FROM `address_book`");

    while($row = $stem -> fetchObject()){

        echo "{$row['name']}  {$row['mobile']}<br>"; //取得裡面需要的資料
    }
  

    ?>
    </div>
    <?php require __DIR__. '/__html_footer.php' ?>