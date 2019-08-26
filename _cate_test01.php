<?php

require __DIR__ . '/__connect_db_proj.php';

$sql = "SELECT * FROM `categories`";

$stmt = $pdo->query($sql);

$rows = $stmt->fetchAll();

$level1 = [];

// 拿第一層
foreach ($rows as $r) {
    if ($r['parent_sid'] == 0) {
        $level1[] = $r;
    }
}

// 拿第二層
foreach ($level1 as $k => $v) {
    foreach ($rows as $r) {
        if ($r['parent_sid'] == $v['sid']) {
            $level1[$k]['nodes'][] = $r;
        }
    }
}



// echo json_encode($rows, JSON_UNESCAPED_UNICODE);
// echo json_encode($level1, JSON_UNESCAPED_UNICODE);
?>

<?php require __DIR__ . '/__html_header.php' ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <?php foreach ($level1 as $a1) : ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?= $a1['name'] ?>
                    </a>
                    <?php if (!empty($a1['nodes'])) : ?>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($a1['nodes'] as $n) : ?>
                        <a class="dropdown-item" href="?cate_sid=<?= $n['sid'] ?>"><?= $n['name'] ?></a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>

<?php require __DIR__ . '/__html_footer.php' ?>