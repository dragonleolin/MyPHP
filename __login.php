<?php
require __DIR__ . '/__connect_db.php';
$page_name = 'login';
$page_title = '登入';


?>
<?php require __DIR__ . '/__html_header.php' ?>
<?php require __DIR__ . '/__navbar.php' ?>

<style>
    small.form-text {
        color: red;
    }
</style>
<div class="container">
    <div style="margin-top: 2rem;">
        <div class="row">
            <div class="col-lg-2">
                <div class="alert alert-primary" role="alert" id="info-bar" style="display:none"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">登入</h5>
                        <!-- action要連到要新增的那隻api，方法要用post，裡面都要有name才取的到 
                                傳統方法需要跳轉頁面-->
                        <!-- <form action="__data_insert_api.php" method="post"> -->
                        <!-- 不用跳轉頁面，使用Ajax方法 -->
                        <form name="form1" onsubmit="return checkForm()">
                            <div class="form-group">
                                <label for="email">帳號(電子郵件)</label>
                                <input type="text" class="form-control" id="email" name="email">
                                <small id="emailHelp" class="form-text"></small>
                            </div>
                            <div class="form-group">
                                <label for="password">密碼</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <small id="mobileHelp" class="form-text"></small>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submit_btn">登入</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let info_bar = document.querySelector('#info-bar');
        const submit_btn = document.querySelector('#submit_btn');
        let i, s, item;

        //方法一
        // let name = document.querySelector('#name');
        // let mobile = document.querySelector('#mobile');
        // let mobilePattern = /09\d{8}/; //正規表示法的驗證
        //方法二
        const require_fields =[
            {
            id: 'email',
            pattern: /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i,
            info: '請填寫正確的 email 格式',
            },
        ];

        // 拿到對應的 input element (el), 顯示訊息的 small element (infoEl)
        //方法二    
        for(s in require_fields){
            item = require_fields[s];
            item.el = document.querySelector('#' + item.id);
            item.infoEl = document.querySelector('#' + item.id +'Help');
        }

        function checkForm() {
            // TODO: 先讓所有欄位外觀回復到原本的狀態
            //方法二
            for(s in require_fields){
                item = require_fields[s];
                item.el.style.border = '1px solid #CCCCCC';
                item.infoEl.innerHTML = '';
            }
            info_bar.style.display = 'none';
            info_bar.innerHTML = '';
            
            //TODO: 檢查必要欄位，欄位值的格式
            let isPass = true;
            //方法二
            for (s in require_fields){
                item = require_fields[s];

                if(! item.pattern.test(item.el.value)){
                    item.el.style.border = '1px solid red';
                    item.infoEl.innerHTML = item.info;
                    isPass = false;
                }
            }

            //方法一
            // if(name.value.length<2){
            //     name.style.border = '1px solid red';
            //     name.closest('.form-group').querySelector('small').innerText = '請填寫正確姓名';
            //     isPass = false;
            // }
            // if(!mobilePattern.test(mobile.value)){
            //     mobile.style.border = '1px solid red';
            //     mobile.closest('.form-group').querySelector('small').innerText = '請填寫正確手機格式';
            //     isPass = false;
            // }

            
            //FormData是沒有外觀的表單資料
            let fd = new FormData(document.form1);
            
            if(isPass){ 
            fetch('__login_api.php', {
                    method: 'POST',
                    body: fd,
                })
                .then(response => {
                    return response.json();
                })
                .then(json => {
                    console.log(json);
                    info_bar.style.display = 'block';
                    info_bar.innerHTML = json.info;
                    if (json.success) {
                        info_bar_className = 'alert alert-success';
                        setTimeout(function(){
                            location.href = '__index__.php'
                        }, 1000)
                    } else {
                        info_bar.className = 'alert alert-danger';
                        }
                    });
                }else{
                    submit_btn.style.display = 'block';
            }
            return false; //表單不使用傳統的post送出
        };
    </script>
</div>
<?php require __DIR__ . '/__html_footer.php' ?>