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
                    <h5 class="card-title">新增資料</h5>
                        <!-- action要連到要新增的那隻api，方法要用post，裡面都要有name才取的到 
                                傳統方法需要跳轉頁面-->
                        <!-- <form action="__data_insert_api.php" method="post"> -->
                         <!-- 不用跳轉頁面，使用Ajax方法 -->
                        <form name="form1" onsubmit="return checkForm()">
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
    <script>
        function checkForm(){
            //TODO: 檢查必要欄位，欄位值的格式
            //FormData是沒有外觀的表單資料
            let fd = new FormData(document.form1);

            fetch('__data_insert_api.php', {
                method : 'POST',
                body: fd,
            })
                .then(response=>{
                    return response.text();
                })
                .then(txt=>{
                    alert(txt);
                })
            
            
            return false;
        }
    </script>
</div>
<?php require __DIR__ . '/__html_footer.php' ?>