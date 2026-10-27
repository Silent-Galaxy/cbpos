<?php require_once('./config.php'); ?>
<style>
    /* مخفی‌سازی فوتر پیش‌فرض مودال بوت‌استرپ جهت جلوگیری از شلوغی */
    #uni_modal .modal-footer {
        display: none !important;
    }

    #uni_modal .modal-content {
        background: #111422;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 18px;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.7);
        color: #e2e8f0;
        font-family: inherit;
        overflow: hidden;
    }

    #uni_modal .modal-header {
        border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        padding: 18px 24px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #uni_modal .modal-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: #f8fafc;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    #uni_modal .modal-header .close {
        color: #94a3b8;
        opacity: 0.8;
        font-size: 1.4rem;
        padding: 0;
        margin: 0;
        transition: all 0.2s ease;
        border: none;
        background: transparent;
    }

    #uni_modal .modal-header .close:hover {
        color: #ef4444;
        opacity: 1;
        transform: rotate(90deg);
    }

    .sg-login-wrapper {
        padding: 10px 8px 16px 8px;
        direction: rtl;
        text-align: right;
    }

    .sg-form-group {
        margin-bottom: 18px;
        position: relative;
    }

    .sg-form-group label {
        display: block;
        margin-bottom: 8px;
        font-size: 0.88rem;
        font-weight: 600;
        color: #cbd5e1;
    }

    .sg-input-group {
        position: relative;
        display: flex;
        align-items: center;
    }

    .sg-input-icon {
        position: absolute;
        right: 14px;
        color: #64748b;
        font-size: 1rem;
        pointer-events: none;
        z-index: 2;
        transition: color 0.2s;
    }

    .sg-input {
        width: 100%;
        height: 48px;
        background: #181d31;
        border: 1px solid #2d3748;
        border-radius: 12px;
        padding: 0 42px 0 16px;
        color: #f1f5f9;
        font-size: 0.95rem;
        transition: all 0.25s ease;
        outline: none;
    }

    .sg-input::placeholder {
        color: #475569;
        font-size: 0.85rem;
    }

    .sg-input:focus {
        border-color: #6366f1;
        background: #1e243d;
        box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    }

    .sg-input:focus ~ .sg-input-icon {
        color: #818cf8;
    }

    /* فیلد ایمیل با متن چپ‌چین LTR */
    .sg-input-ltr {
        direction: ltr;
        text-align: left;
        padding: 0 16px 0 42px !important;
    }

    .sg-input-group.is-ltr .sg-input-icon {
        right: auto;
        left: 14px;
    }

    .sg-toggle-password {
        position: absolute;
        left: 14px;
        background: none;
        border: none;
        color: #64748b;
        cursor: pointer;
        padding: 0;
        font-size: 1rem;
        display: flex;
        align-items: center;
        transition: color 0.2s;
        z-index: 2;
    }

    .sg-toggle-password:hover {
        color: #cbd5e1;
    }

    .sg-submit-btn {
        width: 100%;
        height: 48px;
        background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #d946ef 100%);
        color: #ffffff;
        border: none;
        border-radius: 12px;
        font-size: 1rem;
        font-weight: 700;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        box-shadow: 0 4px 15px rgba(124, 58, 237, 0.35);
        transition: all 0.3s ease;
        margin-top: 10px;
    }

    .sg-submit-btn:hover {
        opacity: 0.95;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(124, 58, 237, 0.5);
    }

    .sg-submit-btn:active {
        transform: translateY(0);
    }

    .sg-submit-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
        transform: none;
    }

    .sg-footer-actions {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 20px;
        padding-top: 16px;
        border-top: 1px solid rgba(255, 255, 255, 0.06);
        font-size: 0.88rem;
    }

    .sg-create-account-link {
        color: #38bdf8;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s ease;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .sg-create-account-link:hover {
        color: #7dd3fc;
        text-decoration: underline;
    }

    /* پیام‌های خطا و موفقیت شکیل داخل مدال */
    .sg-alert {
        padding: 12px 16px;
        border-radius: 10px;
        font-size: 0.88rem;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 8px;
        animation: sgFadeIn 0.3s ease-out;
    }

    .sg-alert-danger {
        background: rgba(239, 68, 68, 0.15);
        border: 1px solid rgba(239, 68, 68, 0.3);
        color: #fca5a5;
    }

    .sg-alert-success {
        background: rgba(34, 197, 94, 0.15);
        border: 1px solid rgba(34, 197, 94, 0.3);
        color: #86efac;
    }

    @keyframes sgFadeIn {
        from { opacity: 0; transform: translateY(-6px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .sg-spinner {
        width: 18px;
        height: 18px;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-top-color: #ffffff;
        border-radius: 50%;
        animation: sgSpin 0.7s linear infinite;
    }

    @keyframes sgSpin {
        to { transform: rotate(360deg); }
    }
</style>

<div class="container-fluid sg-login-wrapper">
    <div id="sg-msg-container"></div>

    <form action="" id="login-form" autocomplete="off">
        <!-- فیلد ایمیل -->
        <div class="sg-form-group">
            <label for="login-email">ایمیل حساب کاربری</label>
            <div class="sg-input-group is-ltr">
                <i class="fa fa-envelope sg-input-icon"></i>
                <input type="email" id="login-email" name="email" class="sg-input sg-input-ltr" placeholder="example@domain.com" required autofocus>
            </div>
        </div>

        <!-- فیلد رمز عبور -->
        <div class="sg-form-group">
            <label for="login-password">رمز عبور</label>
            <div class="sg-input-group">
                <i class="fa fa-lock sg-input-icon"></i>
                <input type="password" id="login-password" name="password" class="sg-input" placeholder="••••••••" required>
                <button type="button" class="sg-toggle-password" id="toggle-password-btn" title="نمایش/عدم نمایش رمز">
                    <i class="fa fa-eye" id="toggle-password-icon"></i>
                </button>
            </div>
        </div>

        <!-- دکمه ارسال با گرادیانت و افکت هاور -->
        <button type="submit" class="sg-submit-btn" id="login-submit-btn">
            <span class="btn-text">ورود به حساب</span>
            <i class="fa fa-arrow-left"></i>
        </button>

        <!-- لینک ثبت نام -->
        <div class="sg-footer-actions">
            <span style="color: #94a3b8;">هنوز ثبت‌نام نکرده‌اید؟</span>
            <a href="javascript:void(0)" id="create_account" class="sg-create-account-link">
                <span>ساخت حساب جدید</span>
                <i class="fa fa-user-plus"></i>
            </a>
        </div>
    </form>
</div>

<script>
    $(function(){
        // سوییچ قابلیت نمایش/مخفی‌سازی پسورد
        $('#toggle-password-btn').on('click', function(e){
            e.preventDefault();
            const passInput = $('#login-password');
            const passIcon = $('#toggle-password-icon');
            if (passInput.attr('type') === 'password') {
                passInput.attr('type', 'text');
                passIcon.removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                passInput.attr('type', 'password');
                passIcon.removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });

        // باز شدن پاپ‌آپ ایجاد حساب کاربری
        $('#create_account').on('click', function(e){
            e.preventDefault();
            if (typeof uni_modal === 'function') {
                uni_modal("ایجاد حساب کاربری", "registration.php", "mid-large");
            }
        });

        // ارسال فرم لاگین با ایجکس و هندلینگ پیشرفته خطا
        $('#login-form').on('submit', function(e){
            e.preventDefault();
            
            const submitBtn = $('#login-submit-btn');
            const originalBtnHtml = submitBtn.html();
            const msgBox = $('#sg-msg-container');

            msgBox.empty();
            submitBtn.prop('disabled', true).html('<div class="sg-spinner"></div> <span>در حال بررسی اطلاعات...</span>');

            $.ajax({
                url: _base_url_ + "classes/Login.php?f=login_user",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json",
                error: function(xhr, status, error) {
                    console.error("Login AJAX Error:", xhr.responseText || error);
                    msgBox.html('<div class="sg-alert sg-alert-danger"><i class="fa fa-exclamation-triangle"></i><span>خطا در برقراری ارتباط با سرور. لطفاً اتصال اینترنت خود را بررسی نمایید.</span></div>');
                    submitBtn.prop('disabled', false).html(originalBtnHtml);
                },
                success: function(resp) {
                    if (typeof resp === 'object' && resp.status === 'success') {
                        msgBox.html('<div class="sg-alert sg-alert-success"><i class="fa fa-check-circle"></i><span>ورود موفقیت‌آمیز بود. در حال انتقال...</span></div>');
                        setTimeout(function(){
                            location.reload();
                        }, 1200);
                    } else if (resp.status === 'incorrect') {
                        msgBox.html('<div class="sg-alert sg-alert-danger"><i class="fa fa-times-circle"></i><span>ایمیل یا رمز عبور وارد شده نادرست است.</span></div>');
                        submitBtn.prop('disabled', false).html(originalBtnHtml);
                        $('#login-password').val('').focus();
                    } else {
                        const errMsg = (resp && resp.msg) ? resp.msg : 'اطلاعات ورود نامعتبر است.';
                        msgBox.html('<div class="sg-alert sg-alert-danger"><i class="fa fa-exclamation-circle"></i><span>' + errMsg + '</span></div>');
                        submitBtn.prop('disabled', false).html(originalBtnHtml);
                    }
                }
            });
        });
    });
</script>