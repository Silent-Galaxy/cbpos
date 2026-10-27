<?php
echo '<style>';
// شامل شدن فایل SilentGalaxy.css
include 'SilentGalaxy.css';
echo '</style>';
?>
<?php

$viewport = '<meta name="viewport" content="width=device-width, initial-scale=1.0">';

echo $viewport;

?>

<style>
    #uni_modal .modal-content>.modal-footer,#uni_modal .modal-content>.modal-header{
        display:none;
    }











    .checkbox-wrapper-10 .tgl {
        display: none;
    }
    .checkbox-wrapper-10 .tgl,
    .checkbox-wrapper-10 .tgl:after,
    .checkbox-wrapper-10 .tgl:before,
    .checkbox-wrapper-10 .tgl *,
    .checkbox-wrapper-10 .tgl *:after,
    .checkbox-wrapper-10 .tgl *:before,
    .checkbox-wrapper-10 .tgl + .tgl-btn {
        box-sizing: border-box;
    }
    .checkbox-wrapper-10 .tgl::-moz-selection,
    .checkbox-wrapper-10 .tgl:after::-moz-selection,
    .checkbox-wrapper-10 .tgl:before::-moz-selection,
    .checkbox-wrapper-10 .tgl *::-moz-selection,
    .checkbox-wrapper-10 .tgl *:after::-moz-selection,
    .checkbox-wrapper-10 .tgl *:before::-moz-selection,
    .checkbox-wrapper-10 .tgl + .tgl-btn::-moz-selection,
    .checkbox-wrapper-10 .tgl::selection,
    .checkbox-wrapper-10 .tgl:after::selection,
    .checkbox-wrapper-10 .tgl:before::selection,
    .checkbox-wrapper-10 .tgl *::selection,
    .checkbox-wrapper-10 .tgl *:after::selection,
    .checkbox-wrapper-10 .tgl *:before::selection,
    .checkbox-wrapper-10 .tgl + .tgl-btn::selection {
        background: none;
    }
    .checkbox-wrapper-10 .tgl + .tgl-btn {
        outline: 0;
        display: block;
        width: 16em;
        height: 2em;
        position: relative;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .checkbox-wrapper-10 .tgl + .tgl-btn:after,
    .checkbox-wrapper-10 .tgl + .tgl-btn:before {
        position: relative;
        display: block;
        content: "";
        width: 100%;
        height: 100%;
    }
    .checkbox-wrapper-10 .tgl + .tgl-btn:after {
        left: 0;
    }
    .checkbox-wrapper-10 .tgl + .tgl-btn:before {
        display: none;
    }
    .checkbox-wrapper-10 .tgl:checked + .tgl-btn:after {
        left: 50%;
    }

    .checkbox-wrapper-10 .tgl-flip + .tgl-btn {
        padding: 2px;
        transition: all 0.2s ease;
        font-family: sans-serif;
        perspective: 100px;
    }
    .checkbox-wrapper-10 .tgl-flip + .tgl-btn:after,
    .checkbox-wrapper-10 .tgl-flip + .tgl-btn:before {
        display: inline-block;
        transition: all 0.4s ease;
        width: 100%;
        text-align: center;
        position: absolute;
        line-height: 2em;
        font-weight: bold;
        font-size: 18px;
        color: #fff;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 4px;
    }
    .checkbox-wrapper-10 .tgl-flip + .tgl-btn:after {
        content: attr(data-tg-on);
        background: #02C66F;
        transform: rotateY(-180deg);
    }
    .checkbox-wrapper-10 .tgl-flip + .tgl-btn:before {
        background: #FF3A19;
        content: attr(data-tg-off);
    }
    .checkbox-wrapper-10 .tgl-flip + .tgl-btn:active:before {
        transform: rotateY(-20deg);
    }
    .checkbox-wrapper-10 .tgl-flip:checked + .tgl-btn:before {
        transform: rotateY(180deg);
    }
    .checkbox-wrapper-10 .tgl-flip:checked + .tgl-btn:after {
        transform: rotateY(0);
        left: 0;
        background: #7FC6A6;
    }
    .checkbox-wrapper-10 .tgl-flip:checked + .tgl-btn:active:after {
        transform: rotateY(20deg);
    }
</style>


<div class="button-85">
    <form action="" id="registration">
        <div class="row">
        
        <h3 class="text-center">حساب جدید ایجاد کنید
            <span class="float-right"><br>
                <br>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"class="button-85">❌</span>
            </button>
            </span>
        </h3>

            <br>
            <br></div>
        <div class="row  align-items-center h-100">

            <div class="col-lg-5 border-right">
                <hr class="button-85">
                <div class="form-group">
                    <label for="" class="control-label">نام</label>
                    <input type="text" class="form-control form-control-sm form" name="firstname" required>
                </div>
                <hr class="button-85">
                <div class="form-group">
                    <label for="" class="control-label">نام خانوادگی</label>
                    <input type="text" class="form-control form-control-sm form" name="lastname" required>
                </div>
                <hr class="button-85">
                <div class="form-group">
                    <label for="" class="control-label">شماره تماس</label>
                    <input type="text" class="form-control form-control-sm form" name="contact" required>
                </div>
                <hr class="button-85">
                <div class="form-group">
                    <label for="" class="control-label">جنسیت</label>
                    <select name="gender" id="" class="custom-select select" required>
                        <option>مرد</option>
                        <option>زن</option>
                    </select>
                </div><hr class="button-85">
                <br>                    <a href="privacy_policy.html" class="SilentCSS">😉سیاست حفظ حریم خصوصی🤷‍♂️</a></br>
                <br>                    <a href="termsofservice.php" class="SilentCSS">😉شرایط استفاده از خدمات🤷‍♂️</a></br>
                <br></br></div>
            <div class="col-lg-7">
                <div class="form-group"><hr class="button-85">
                    <label for="" class="control-label">آدرس تحویل پیش فرض</label>
                    <textarea class="form-control form" rows='3' name="default_delivery_address"></textarea>
                </div><hr class="button-85">
                <div class="form-group">
                    <label for="" class="control-label">ایمیل</label>
                    <input type="text" class="form-control form-control-sm form" name="email" required>
                </div><hr class="button-85">
                <div class="form-group">
                    <label for="" class="control-label">رمز عبور</label>
                    <input type="password" class="form-control form-control-sm form" name="password" required>
                </div><hr class="button-85">
                <div class="form-group d-flex justify-content-between"><br>


<span>                     <div class="checkbox-wrapper-10"></span>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toggle-js/1.12.1/toggle.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toggle-js/1.12.1/toggle.min.js"></script>



            <div class="checkbox-wrapper-10">
            <input class="tgl tgl-flip" id="cb5" type="checkbox" />
            <label class="tgl-btn" data-tg-off="❌با قوانین سایت مخالفم❌" data-tg-on="✔با قوانین سایت موافقم✔" for="cb5"></label>
</div>



                                            <button class="button-85"id="x">✨ثبت نام🌹</button>
    </div>
<script>
const checkbox = document.getElementById('cb5');
const button = document.getElementById('x');

button.disabled = true;

checkbox.addEventListener('change', () => {
    if (checkbox.checked) {
        button.disabled = false;
    } else {
        button.disabled = true;
    }
});
</script>


                    <br>                    <a href="javascript:void()" id="login-show" class="SilentCSS">🤔حساب کاربری دارم😎</a></br>

            </div>
        </div>
    </form>

</div>
<script>
    $(function(){
        $('#login-show').click(function(){
            uni_modal("","login.php")
        })
        $('#registration').submit(function(e){
            e.preventDefault();
            start_loader()
            if($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url:_base_url_+"classes/Master.php?f=register",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                error:err=>{
                    console.log(err)
                    alert_toast("an error occured",'error')
                    end_loader()
                },
                success:function(resp){
                    if(typeof resp == 'object' && resp.status == 'success'){
                        location.reload()
                    }else if(resp.status == 'failed' && !!resp.msg){
                        var _err_el = $('<div>')
                            _err_el.addClass("alert alert-danger err-msg").text(resp.msg)
                        $('[name="password"]').after(_err_el)
                        end_loader()
                    }else{
                        console.log(resp)
                        alert_toast("an error occured",'error')
                        end_loader()
                    }
                }
            })
        })
       
    })
</script>