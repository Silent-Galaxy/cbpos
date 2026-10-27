<footer class="sg-footer">
    <div class="sg-main-container">
        <!-- بج‌های ایموجی‌دار با زیرنویس اختصاصی -->
        <div class="sg-footer-badges">
            <div class="sg-badge-item">
                <span class="sg-badge-emoji">🛡️</span>
                <span class="sg-badge-title">نماد اعتماد</span>
                <span class="sg-badge-sub">خرید ۱۰۰٪ امن</span>
            </div>

            <div class="sg-badge-item">
                <span class="sg-badge-emoji">💳</span>
                <span class="sg-badge-title">درگاه بانکی</span>
                <span class="sg-badge-sub">شاپرک و زرین‌پال</span>
            </div>

            <div class="sg-badge-item">
                <span class="sg-badge-emoji">⚡</span>
                <span class="sg-badge-title">تحویل فوری</span>
                <span class="sg-badge-sub">ارسال خودکار ۲۴/۷</span>
            </div>

            <div class="sg-badge-item">
                <span class="sg-badge-emoji">🔒</span>
                <span class="sg-badge-title">ضمانت اصالت</span>
                <span class="sg-badge-sub">سورس قانونی کالا</span>
            </div>

            <div class="sg-badge-item">
                <span class="sg-badge-emoji">💬</span>
                <span class="sg-badge-title">پشتیبانی تلگرام</span>
                <span class="sg-badge-sub">پاسخگویی سریع</span>
            </div>
        </div>

        <!-- لینک‌های مفید فوتر -->
        <ul class="sg-footer-links">
            <li><a href="./">صفحه نخست</a></li>
            <li><a href="./?p=products">محصولات و آیتم‌ها</a></li>
            <li><a href="./?p=privacy_policy">حریم خصوصی</a></li>
            <li><a href="./?p=termsofservice">قوانین و شرایط</a></li>
            <li><a href="./?p=about">درباره ما</a></li>
        </ul>

        <!-- کپی‌رایت -->
        <div class="text-center pt-3 border-top" style="border-color: rgba(255,255,255,0.06) !important;">
            <p class="m-0" style="font-size: 0.8rem; color: #64748b;">
                تمامی حقوق مادی و معنوی برای فروشگاه 
                <strong class="text-white"><?php echo $_settings->info('short_name') ?></strong> محفوظ است © <?php echo date('Y') ?>
            </p>
        </div>
    </div>
</footer>

<!-- مودال اصلی سیستم (ورود، ثبت‌نام و فرم‌ها) -->
<div class="modal fade" id="uni_modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" id="submit" onclick="$('#uni_modal form').submit()">ثبت اطلاعات</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">انصراف</button>
            </div>
        </div>
    </div>
</div>

<!-- مودال تایید عملیات -->
<div class="modal fade" id="confirm_modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">تایید</h5>
            </div>
            <div class="modal-body">
                <div id="delete_content"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" id="confirm">تایید</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">انصراف</button>
            </div>
        </div>
    </div>
</div>

<!-- اسکریپت‌های پایه‌ای بوت‌استرپ و سیستم (بسیار حیاتی) -->
<script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url ?>dist/js/adminlte.min.js"></script>

<script>
    // مدیریت لودر (جلوگیری از گیر کردن لودینگ)
    window.start_loader = function() {
        $('body').removeClass('loaded');
        if($('#preloader').length > 0) $('#preloader').show();
    };
    
    window.end_loader = function() {
        $('body').addClass('loaded');
        if($('#preloader').length > 0) $('#preloader').fadeOut('fast');
        $('.preloader, #pre_loader, .loader').fadeOut('fast');
    };

    // تابع باز کردن پاپ‌آپ لاگین و ثبت‌نام
    window.uni_modal = function($title = '', $url = '', $size = '') {
        start_loader();
        $.ajax({
            url: $url,
            error: function(err) {
                console.error("AJAX Error:", err);
                alert("خطا در بارگذاری پنجره! لطفا اتصال را بررسی کنید.");
                end_loader();
            },
            success: function(resp) {
                if (resp) {
                    $('#uni_modal .modal-title').html($title);
                    $('#uni_modal .modal-body').html(resp);

                    if ($size != '') {
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass('modal-dialog ' + $size + ' modal-dialog-centered');
                    } else {
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered");
                    }

                    // اجرای امن مودال
                    try {
                        $('#uni_modal').modal('show');
                    } catch(e) {
                        console.error("Bootstrap Modal Error:", e);
                    }
                }
            },
            complete: function() {
                // اطمینان از بسته شدن لودر در هر شرایطی
                end_loader();
            }
        });
    };

    window._conf = function($msg = '', $func = '', $params = []) {
        $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")");
        $('#confirm_modal .modal-body').html($msg);
        $('#confirm_modal').modal('show');
    };

    // فعال‌سازی و چرخش خودکار اسلایدر
    $(document).ready(function() {
        end_loader();

        // فعال‌سازی اسلایدر بنر با تایمر ۳.۵ ثانیه
        $('#sgBannerSlider, #carouselExampleControls').carousel({
            interval: 3500,
            ride: 'carousel',
            pause: 'hover'
        });
    });
</script>