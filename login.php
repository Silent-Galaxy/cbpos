<?php
echo '<style>';
// شامل شدن فایل SilentGalaxy.css
include 'SilentGalaxy.css';
echo '</style>';
?>
<style>
    #uni_modal .modal-content>.modal-footer,#uni_modal .modal-content>.modal-header{
        display:none;
    }
</style>
<div class="button-85">
    
    <div class="row">
    <h3 class="float-right">

    </h3>
        <div class="col-lg-12">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"class="button-85">❌</span>
            </button>
            <h3 class="text-center">ورود</h3>
            <hr class="button-85">
            <form action="" id="login-form">
                <div class="form-group">
                    <label for="" class="control-label">ایمیل</label>
                    <input type="email" class="form-control form" name="email" required>
                </div>
                <div class="form-group">
                    <label for="" class="control-label">رمز عبور</label>
                    <input type="password" class="form-control form" name="password" required>
                </div><hr class="button-85">
                <div class="form-group d-flex justify-content-between">
                    <a href="javascript:void()" id="create_account"class="SilentCSS">🎀میخواهم حساب بسازم🎂</a>
                    <button class="button-85">✔ورود✨</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function(){
        $('#create_account').click(function(){
            uni_modal("","registration.php","mid-large")
        })
        $('#login-form').submit(function(e){
            e.preventDefault();
            start_loader()
            if($('.err-msg').length > 0)
                $('.err-msg').remove();
            $.ajax({
                url:_base_url_+"classes/Login.php?f=login_user",
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
                        alert_toast("Login Successfully",'success')
                        setTimeout(function(){
                            location.reload()
                        },2000)
                    }else if(!!resp.msg){
                        var _err_el = $('<div>')
                            _err_el.addClass("alert alert-danger err-msg").text(resp.msg)
                        $('#login-form').prepend(_err_el)
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