<style>
    /* ======================================================
       استانداردسازی فروشگاه گیمینگ SilentGalaxy
       ====================================================== */

    /* مهار کردن عرض صفحه در مانیتورهای عریض (خیلی مهم برای استاندارد شدن) */
    .sg-main-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* بنر اسلایدر مدرن */
    .sg-slider-wrap {
        border-radius: 18px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.08);
        background: radial-gradient(circle at center, #1b1e33 0%, #0a0b12 100%);
        box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.7);
        position: relative;
    }
    .sg-slider-wrap .carousel-inner {
        height: 280px !important;
    }
    .sg-slider-wrap .carousel-item img {
        height: 280px !important;
        object-fit: contain !important; /* از دفرمه شدن بنر جلوگیری میکند */
        width: 100%;
    }

    /* نوار مزایا و اعتماد (Features Bar) */
    .sg-features-bar {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin: 25px 0;
    }
    .sg-feature-box {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-radius: 14px;
        padding: 14px 18px;
        display: flex;
        align-items: center;
        gap: 14px;
        transition: all 0.3s ease;
    }
    .sg-feature-box:hover {
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(121, 40, 202, 0.4);
        transform: translateY(-2px);
    }
    .sg-feature-icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: linear-gradient(135deg, rgba(121, 40, 202, 0.2), rgba(0, 112, 243, 0.2));
        border: 1px solid rgba(121, 40, 202, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #00d2ff;
        font-size: 1.2rem;
        flex-shrink: 0;
    }
    .sg-feature-text h6 {
        margin: 0;
        font-size: 0.88rem;
        font-weight: 700;
        color: #f1f5f9;
    }
    .sg-feature-text small {
        color: #94a3b8;
        font-size: 0.75rem;
    }

    /* سایدبار فیلتر */
    .sg-sidebar {
        background: #121524;
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        padding: 18px;
    }
    .sg-sidebar-title {
        font-size: 0.95rem;
        font-weight: 700;
        color: #f8fafc;
        padding-bottom: 12px;
        margin-bottom: 12px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .sg-filter-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 12px;
        margin-bottom: 4px;
        border-radius: 10px;
        color: #94a3b8;
        font-size: 0.88rem;
        transition: all 0.2s ease;
        cursor: pointer;
    }
    .sg-filter-item:hover {
        background: rgba(255, 255, 255, 0.05);
        color: #fff;
    }
    .sg-filter-item input[type="checkbox"] {
        width: 17px;
        height: 17px;
        accent-color: #7928ca;
        cursor: pointer;
    }

    /* کارت‌های استاندارد فروشگاهی */
    .sg-card {
        background: #131627 !important;
        border: 1px solid rgba(255, 255, 255, 0.07) !important;
        border-radius: 16px !important;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        text-decoration: none !important;
        transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
        position: relative;
    }
    .sg-card:hover {
        transform: translateY(-5px);
        border-color: rgba(121, 40, 202, 0.5) !important;
        box-shadow: 0 12px 28px -5px rgba(0, 0, 0, 0.7), 0 0 20px rgba(121, 40, 202, 0.2);
    }
    .sg-badge-fast {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 2;
        background: rgba(16, 185, 129, 0.2);
        border: 1px solid rgba(16, 185, 129, 0.4);
        color: #34d399;
        font-size: 0.7rem;
        font-weight: 600;
        padding: 3px 8px;
        border-radius: 20px;
        backdrop-filter: blur(8px);
    }
    .sg-card-img-holder {
        width: 100%;
        height: 200px;
        background: #090a10;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-bottom: 1px solid rgba(255, 255, 255, 0.04);
    }
    .sg-card-img-holder img {
        max-width: 85%;
        max-height: 85%;
        object-fit: contain;
        transition: transform 0.4s ease;
    }
    .sg-card:hover .sg-card-img-holder img {
        transform: scale(1.08);
    }
    .sg-card-body {
        padding: 16px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: space-between;
    }
    .sg-card-meta {
        display: flex;
        align-items: center;
        gap: 6px;
        margin-bottom: 8px;
    }
    .sg-card-badge {
        font-size: 0.72rem;
        padding: 2px 7px;
        border-radius: 6px;
        background: rgba(255, 255, 255, 0.05);
        color: #94a3b8;
    }
    .sg-card-title {
        color: #f8fafc;
        font-size: 0.9rem;
        font-weight: 600;
        line-height: 1.5;
        height: 42px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        margin-bottom: 14px;
    }
    .sg-price-box {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        padding-top: 10px;
        border-top: 1px dashed rgba(255, 255, 255, 0.08);
    }
    .sg-price-val {
        color: #00d2ff;
        font-weight: 800;
        font-size: 1.05rem;
    }
    .sg-price-unit {
        color: #64748b;
        font-size: 0.75rem;
        margin-right: 4px;
    }
    .sg-card-btn {
        margin-top: 12px;
        width: 100%;
        background: rgba(255, 255, 255, 0.04);
        color: #cbd5e1;
        border: 1px solid rgba(255, 255, 255, 0.08);
        padding: 7px;
        border-radius: 9px;
        font-size: 0.82rem;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        transition: all 0.25s ease;
    }
    .sg-card:hover .sg-card-btn {
        background: linear-gradient(135deg, #7928ca, #0070f3);
        border-color: transparent;
        color: #fff;
    }
</style>

<?php 
$brands = isset($_GET['b']) ? json_decode(urldecode($_GET['b'])) : array();
?>

<div class="sg-main-container py-4">
    
    <!-- 1. اسلایدر بنر اصلی -->
    <div class="sg-slider-wrap mb-4">
        <div id="sgBannerSlider" class="carousel slide" data-ride="carousel" data-interval="4500">
            <div class="carousel-inner">
                <?php
                    $upload_path = "uploads/banner";
                    if(is_dir(base_app.$upload_path)):
                        $file = scandir(base_app.$upload_path);
                        $_i = 0;
                        foreach($file as $img):
                            if(in_array($img, array('.', '..'))) continue;
                            $_i++;
                ?>
                <div class="carousel-item <?php echo $_i == 1 ? "active" : '' ?>">
                    <img src="<?php echo validate_image($upload_path.'/'.$img) ?>" alt="Banner <?php echo $_i ?>">
                </div>
                <?php 
                        endforeach; 
                    endif; 
                ?>
            </div>
            <a class="carousel-control-prev" href="#sgBannerSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#sgBannerSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>

    <!-- 2. ویژگی‌ها و تضمین‌های فروشگاه (آیکون‌های حس اعتبار) -->
    <div class="sg-features-bar">
        <div class="sg-feature-box">
            <div class="sg-feature-icon"><i class="fa fa-bolt"></i></div>
            <div class="sg-feature-text">
                <h6>تحویل آنی و خودکار</h6>
                <small>ارسال سریع بعد از پرداخت</small>
            </div>
        </div>
        <div class="sg-feature-box">
            <div class="sg-feature-icon"><i class="fa fa-shield-alt"></i></div>
            <div class="sg-feature-text">
                <h6>ضمانت سلامت اکانت</h6>
                <small>اورجینال و قانونی ۱۰۰٪</small>
            </div>
        </div>
        <div class="sg-feature-box">
            <div class="sg-feature-icon"><i class="fa fa-coins"></i></div>
            <div class="sg-feature-text">
                <h6>بهترین نرخ بازار</h6>
                <small>خرید و فروش با سود منصفانه</small>
            </div>
        </div>
        <div class="sg-feature-box">
            <div class="sg-feature-icon"><i class="fa fa-headset"></i></div>
            <div class="sg-feature-text">
                <h6>پشتیبانی پاسخگو</h6>
                <small>همراهی در تمام مراحل فعال‌سازی</small>
            </div>
        </div>
    </div>

    <!-- 3. چیدمان سایدبار و محصولات -->
    <div class="row mt-4">
        
        <!-- سایدبار فیلترها (راست) -->
        <div class="col-lg-3 col-md-4 mb-4">
            <div class="sg-sidebar sticky-top" style="top: 85px; z-index: 10;">
                <div class="sg-sidebar-title">
                    <i class="fa fa-filter text-primary"></i>
                    <span>فیلتر پلتفرم و برندها</span>
                </div>

                <label class="sg-filter-item" for="brandAll">
                    <input type="checkbox" id="brandAll">
                    <span>نمایش همه برندها</span>
                </label>

                <hr style="border-color: rgba(255,255,255,0.06); margin: 6px 0 10px 0;">

                <?php 
                $qry = $conn->query("SELECT * FROM brands where status = 1 order by name asc");
                while($row = $qry->fetch_assoc()):
                ?>
                <label class="sg-filter-item" for="brand-item-<?php echo $row['id'] ?>">
                    <input type="checkbox" id="brand-item-<?php echo $row['id'] ?>" <?php echo in_array($row['id'], $brands) ? "checked" : "" ?> class="brand-item" value="<?php echo $row['id'] ?>">
                    <span><?php echo $row['name'] ?></span>
                </label>
                <?php endwhile; ?>
            </div>
        </div>

        <!-- لیست محصولات (چپ) -->
        <div class="col-lg-9 col-md-8">
            <div class="d-flex align-items-center justify-content-between mb-3 px-1">
                <h5 class="m-0 font-weight-bold text-white" style="font-size: 1.05rem;">
                    <i class="fa fa-gamepad text-primary me-2"></i> جدیدترین محصولات و آیتم‌ها
                </h5>
            </div>

            <!-- گرید ۴ تایی استاندارد در دسکتاپ -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-3 g-3">
                <?php 
                    $where = "";
                    if(count($brands) > 0) {
                        $where = " and p.brand_id in (".implode(",", $brands).") ";
                    }
                    $products = $conn->query("SELECT p.*, b.name as bname, c.category FROM `products` p inner join brands b on p.brand_id = b.id inner join categories c on p.category_id = c.id where p.status = 1 {$where} order by rand() ");
                    
                    while($row = $products->fetch_assoc()):
                        $upload_path = base_app.'/uploads/product_'.$row['id'];
                        $img = "";
                        if(is_dir($upload_path)){
                            $fileO = scandir($upload_path);
                            if(isset($fileO[2]))
                                $img = "uploads/product_".$row['id']."/".$fileO[2];
                        }
                        foreach($row as $k => $v){
                            $row[$k] = trim(stripslashes($v));
                        }
                        $inventory = $conn->query("SELECT distinct(`price`) FROM inventory where product_id = ".$row['id']." order by `price` asc");
                        $inv = array();
                        while($ir = $inventory->fetch_assoc()){
                            $inv[] = format_num($ir['price']);
                        }
                        $price = '';
                        if(isset($inv[0]))
                            $price .= $inv[0];
                        if(count($inv) > 1){
                            $price .= " ~ ".$inv[count($inv) - 1];
                        }
                        if(empty($price) || $price == '0') $price = "تماس بگیرید";
                ?>
                
                <div class="col mb-4">
                    <a class="sg-card" href="./?p=view_product&id=<?php echo md5($row['id']) ?>">
                        <span class="sg-badge-fast"><i class="fa fa-bolt"></i> تحویل سریع</span>
                        
                        <!-- قاب تصویر با مقیاس یکسان برای همه تصاویر -->
                        <div class="sg-card-img-holder">
                            <img src="<?php echo validate_image($img) ?>" alt="<?php echo $row['name'] ?>" loading="lazy">
                        </div>
                        
                        <!-- محتوای کارت -->
                        <div class="sg-card-body">
                            <div>
                                <div class="sg-card-meta">
                                    <span class="sg-card-badge"><?php echo $row['bname'] ?></span>
                                    <span class="sg-card-badge"><?php echo $row['category'] ?></span>
                                </div>
                                <div class="sg-card-title"><?php echo $row['name'] ?></div>
                            </div>

                            <div>
                                <div class="sg-price-box">
                                    <span class="text-muted" style="font-size: 0.78rem;">قیمت:</span>
                                    <div>
                                        <span class="sg-price-val"><?php echo $price ?></span>
                                        <?php if($price != "تماس بگیرید"): ?><small class="sg-price-unit">تومان</small><?php endif; ?>
                                    </div>
                                </div>
                                <div class="sg-card-btn">
                                    <i class="fa fa-shopping-bag"></i> جزئیات و خرید
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endwhile; ?>
            </div>

        </div>
    </div>
</div>

<script>
    function _filter(){
        var brands = []
        $('.brand-item:checked').each(function(){
            brands.push($(this).val())
        })
        _b = JSON.stringify(brands)
        var checked = $('.brand-item:checked').length
        var total = $('.brand-item').length
        if(checked == total)
            location.href="./?";
        else
            location.href="./?b="+encodeURI(_b);
    }
    
    function check_filter(){
        var checked = $('.brand-item:checked').length
        var total = $('.brand-item').length
        if(checked == total){
            $('#brandAll').prop('checked', true)
        } else {
            $('#brandAll').prop('checked', false)
        }
        if('<?php echo isset($_GET['b']) ?>' == '')
            $('#brandAll, .brand-item').prop('checked', true)
    }

    $(function(){
        check_filter();
        $('#brandAll').change(function(){
            if($(this).is(':checked') == true){
                $('.brand-item').prop('checked', true);
            } else {
                $('.brand-item').prop('checked', false);
            }
            _filter();
        });
        $('.brand-item').change(function(){
            _filter();
        });
    });
</script>