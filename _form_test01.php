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

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" value="蘋果" id="fruit1" name="fruits[]">
            <label class="form-check-label" for="fruit1">蘋果</label>
<br>
            <input type="checkbox" class="form-check-input" value="鳳梨" id="fruit2" name="fruits[]">
            <label class="form-check-label" for="fruit2">鳳梨</label>
            <br>
            <input type="checkbox" class="form-check-input" value="香蕉" id="fruit3" name="fruits[]">
            <label class="form-check-label" for="fruit3">香蕉</label>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>



<?php include __DIR__ . '/__html_footer.php' ?>