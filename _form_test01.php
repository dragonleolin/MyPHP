<?php 
$data1 = [
    '2' => '蘋果',
    '3' => '鳳梨',
    '5' => '香蕉',
    '9' => '楊桃',
];


?>

<?php require __DIR__ . '/__html_header.php' ?>

<div class="container">
    <div>
        <pre>
            <?php
            if(! empty($_POST))
                print_r($_POST);
            ?>
        </pre>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>

        <?php foreach($data1 as $k=>$v): ?>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" name="fruits[]"
                        value="<?= $k ?> " id="fruit-a-<?= $k ?>" >
            <label class="form-check-label" for="fruit-a-<?= $k ?>"><?= $v ?></label>

        </div>
        <?php endforeach ?>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>



<?php include __DIR__ . '/__html_footer.php' ?>