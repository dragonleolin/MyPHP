<?php
$data1 = [
    '2' => '蘋果',
    '3' => '鳳梨',
    '5' => '香蕉',
    '9' => '楊桃',
];

$fruit_a = empty($_POST['fruita']) ? [] : $_POST['fruita'];
$fruit_b = empty($_POST['fruitb']) ? 0 : intval($_POST['fruitb']);
$fruit_c = empty($_POST['fruitc']) ? 0 : intval($_POST['fruitc']);

?>

<?php require __DIR__ . '/__html_header.php' ?>

<div class="container">
    <div>
        <pre>
            <?php
            if (!empty($_POST))
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

        <div class="form-group">
        <?php foreach ($data1 as $k => $v) : ?>
        <div class="form-group form-check-inline">
            <input type="checkbox" class="form-check-input" name="fruits[]" 
                   value="<?= $k ?> " id="fruit-a-<?= $k ?>"
                   <?= in_array($k, $fruit_a) ? 'checked' : '' ?> 
                >
            <label class="form-check-label" for="fruit-a-<?= $k ?>"><?= $v ?></label>
        </div>
        <?php endforeach ?>
        </div>

        <div class="form-group">
        <?php 
        $i=0;
        foreach ($data1 as $k => $v) : ?>
        <div class="form-group form-check-inline">
            <input type="radio" checked class="form-check-input" name="fruitb"
                value="<?= $k ?> " id="fruit-b-<?= $k ?>"
                <?= $fruit_b==$k ? 'checked' : '' ?> >
            <label class="form-check-label" for="fruit-b-<?= $k ?>"><?= $v ?></label>
        </div>
        <?php 
        $i++;
        endforeach ?>
        </div>

 
        <div class="form-group">
            <label for="fruitc">Example select</label>
            <select class="form-control" id="fruitc" name="fruitc">
            <!--    <option value="">--請選擇--</option>  -->
                <?php foreach($data1 as $k=>$v): ?>
                <option value="<?= $k ?>" <?= $fruit_c==$k ? 'selected' : '' ?> ><?= $v ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</div>
</form>

</div>



<?php include __DIR__ . '/__html_footer.php' ?>