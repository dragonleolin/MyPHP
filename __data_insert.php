<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'data_insert';
$page_title = '新增資料';


?>
<?php require __DIR__ . '/__html_header.php' ?>
<?php require __DIR__ . '/__navbar.php' ?>

<div class="container">
    <div style="margin-top: 2rem;">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <!-- action要連到要新增的那隻api，方法要用post，裡面都要有name才取的到 -->
                        <form action="__data_insert_api.php" method="post">
                            <div class="form-group">
                                <label for="name">姓名</label>
                                <input type="text" class="form-control" id="name" name="name">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="mobile">手機</label>
                                <input type="text" class="form-control" id="mobile" name="mobile">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="birthday">生日</label>
                                <input type="text" class="form-control" id="birthday" name="birthday" value="2000-03-03">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="address">地址</label>
                                <input type="text" class="form-control" id="address" name="address">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            

                            <button type="submit" class="btn btn-primary">新增</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<?php require __DIR__ . '/__html_footer.php' ?>