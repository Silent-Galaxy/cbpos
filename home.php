<!-- بنر اصلی اسلایدر SilentGalaxy -->
<div class="container-fluid px-lg-5 my-4">
    <div class="hero-banner-container" style="position: relative; border-radius: 20px; overflow: hidden; border: 1px solid var(--border-subtle); box-shadow: var(--card-shadow); background: var(--bg-card);">
        <div id="homeHeroCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url ?>uploads/banner-silentgalaxy.jpg" onerror="this.src='https://raw.githubusercontent.com/Silent-Galaxy/cbpos/main/uploads/banner.jpg'; this.onerror=null;" class="d-block w-100" alt="SilentGalaxy Shop" style="max-height: 380px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ۴ بنر اعتمادسازی و ویژگی‌ها -->
<div class="container-fluid px-lg-5 mb-5">
    <div class="row">
        <div class="col-lg-3 col-6 mb-3">
            <div class="feature-box">
                <i class="fas fa-bolt feature-icon" style="color: #eab308;"></i>
                <div>
                    <h6 class="font-weight-bold mb-1">تحویل آنی و خودکار</h6>
                    <small class="text-muted">ارسال سریع بعد از پرداخت</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="feature-box">
                <i class="fas fa-shield-alt feature-icon" style="color: #3b82f6;"></i>
                <div>
                    <h6 class="font-weight-bold mb-1">ضمانت سلامت اکانت</h6>
                    <small class="text-muted">اورجینال و قانونی ۱۰۰٪</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="feature-box">
                <i class="fas fa-coins feature-icon" style="color: #10b981;"></i>
                <div>
                    <h6 class="font-weight-bold mb-1">بهترین نرخ بازار</h6>
                    <small class="text-muted">خرید و فروش با سود منصفانه</small>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 mb-3">
            <div class="feature-box">
                <i class="fas fa-headset feature-icon" style="color: #a855f7;"></i>
                <div>
                    <h6 class="font-weight-bold mb-1">پشتیبانی پاسخگو</h6>
                    <small class="text-muted">همراهی در تمام مراحل فعال‌سازی</small>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.feature-box {
    background: var(--bg-card);
    backdrop-filter: blur(10px);
    border: 1px solid var(--border-subtle);
    border-radius: 14px;
    padding: 18px 14px;
    display: flex;
    align-items: center;
    gap: 14px;
    transition: var(--theme-transition);
}
.feature-box:hover {
    transform: translateY(-5px);
    border-color: var(--border-glow);
    box-shadow: var(--glow-shadow);
}
.feature-icon {
    font-size: 2rem;
    padding: 10px;
    border-radius: 12px;
    background: rgba(255,255,255,0.03);
}
</style>

<!-- بخش اصلی محصولات و فیلترها -->
<div class="container-fluid px-lg-5 mb-5">
    <div class="row">
        
        <!-- ================= سایدبار فیلتر پیشرفته (راست) ================= -->
        <div class="col-xl-3 col-lg-4 mb-4">
            <div class="filter-card-modern">
                <div class="filter-header">
                    <h5>
                        <i class="fas fa-filter" style="color: var(--accent-primary);"></i>
                        فیلتر محصولات
                    </h5>
                    <button type="button" class="btn-reset-filter" id="resetFiltersBtn">
                        <i class="fas fa-undo ml-1"></i> پاکسازی فیلترها
                    </button>
                </div>

                <!-- جستجوی درجا در میان آیتم‌ها -->
                <div class="filter-search-box">
                    <input type="text" id="filterSearchInput" placeholder="جستجوی نام یا کلیدواژه...">
                    <i class="fas fa-search"></i>
                </div>

                <!-- مرتب‌سازی سریع -->
                <div class="filter-group-title">مرتب‌سازی براساس</div>
                <div class="mb-3">
                    <select id="sortProductsSelect" class="form-control" style="background: var(--input-bg); color: var(--text-primary); border-radius: 10px; border: 1px solid var(--border-subtle); font-size: 0.9rem;">
                        <option value="newest">جدیدترین محصولات</option>
                        <option value="price-asc">ارزان‌ترین</option>
                        <option value="price-desc">گران‌ترین</option>
                    </select>
                </div>

                <!-- فیلتر پلتفرم و برندها (داینامیک از پایگاه داده) -->
                <div class="filter-group-title">پلتفرم‌ها و برندها</div>
                <div class="filter-options-list mb-3">
                    <label class="filter-item-checkbox active">
                        <span class="filter-label-text">
                            <i class="fas fa-layer-group text-primary"></i> نمایش همه برندها
                        </span>
                        <input type="checkbox" class="brand-filter-check" id="filter-all" value="all" checked>
                    </label>

                    <?php 
                    $brands_qry = $conn->query("SELECT * FROM `brands` where status = 1 and delete_flag = 0 order by name asc");
                    while($b_row = $brands_qry->fetch_assoc()):
                    ?>
                    <label class="filter-item-checkbox">
                        <span class="filter-label-text">
                            <i class="fab fa-steam" style="color: var(--accent-cyan);"></i>
                            <?php echo $b_row['name']; ?>
                        </span>
                        <input type="checkbox" class="brand-filter-check" value="<?php echo $b_row['id']; ?>">
                    </label>
                    <?php endwhile; ?>
                </div>

                <!-- فیلتر دسته‌بندی‌ها (داینامیک از پایگاه داده) -->
                <div class="filter-group-title">دسته‌بندی‌ها</div>
                <div class="filter-options-list mb-3">
                    <?php 
                    $cat_qry = $conn->query("SELECT * FROM `categories` where status = 1 and delete_flag = 0 order by category asc");
                    while($c_row = $cat_qry->fetch_assoc()):
                    ?>
                    <label class="filter-item-checkbox">
                        <span class="filter-label-text">
                            <i class="fas fa-gamepad" style="color: var(--accent-green);"></i>
                            <?php echo $c_row['category']; ?>
                        </span>
                        <input type="checkbox" class="category-filter-check" value="<?php echo $c_row['id']; ?>">
                    </label>
                    <?php endwhile; ?>
                </div>

                <!-- سوئیچ فقط کالاهای موجود -->
                <div class="filter-group-title">وضعیت موجودی</div>
                <label class="filter-item-checkbox">
                    <span class="filter-label-text">
                        <i class="fas fa-check-circle" style="color: var(--accent-green);"></i>
                        فقط محصولات موجود
                    </span>
                    <input type="checkbox" id="filterInStockOnly" value="1">
                </label>

            </div>
        </div>

        <!-- ================= لیست محصولات (چپ) ================= -->
        <div class="col-xl-9 col-lg-8">
            <div class="d-flex align-items-center justify-content-between mb-4 pb-2" style="border-bottom: 1px solid var(--border-subtle);">
                <h4 class="font-weight-bold m-0" style="color: var(--text-primary);">
                    <i class="fas fa-gamepad ml-2" style="color: var(--accent-primary);"></i>
                    جدیدترین محصولات و آیتم‌ها
                </h4>
                <span class="text-muted" style="font-size: 0.9rem;" id="productsCountText">در حال نمایش محصولات...</span>
            </div>

            <!-- گرید محصولات -->
            <div class="row" id="productsGridContainer">
                <?php 
                $products_qry = $conn->query("SELECT p.*, b.name as brand_name, c.category as category_name 
                                             FROM `products` p 
                                             INNER JOIN `brands` b ON p.brand_id = b.id 
                                             INNER JOIN `categories` c ON p.category_id = c.id 
                                             WHERE p.status = 1 AND p.delete_flag = 0 
                                             ORDER BY unix_timestamp(p.date_created) desc");

                if($products_qry->num_rows > 0):
                    while($row = $products_qry->fetch_assoc()):
                        // محاسبه هوشمند قیمت از انبار
                        $inv_qry = $conn->query("SELECT price, quantity FROM `inventory` where product_id = '{$row['id']}' order by price asc");
                        $prices = [];
                        $total_stock = 0;
                        if($inv_qry && $inv_qry->num_rows > 0){
                            while($ir = $inv_qry->fetch_assoc()){
                                $prices[] = floatval($ir['price']);
                                $total_stock += intval($ir['quantity']);
                            }
                        }

                        $min_p = !empty($prices) ? min($prices) : 0;
                        $max_p = !empty($prices) ? max($prices) : 0;

                        if(!empty($prices)){
                            if($min_p == $max_p){
                                $price_str = number_format($min_p) . ' <small>تومان</small>';
                            } else {
                                $price_str = number_format($min_p) . ' ~ ' . number_format($max_p) . ' <small>تومان</small>';
                            }
                            $sort_price = $min_p;
                        } else {
                            $price_str = '<span class="text-warning">تماس بگیرید</span>';
                            $sort_price = 0;
                        }

                        // آدرس تصویر کالا
                        $prod_img = base_url . 'dist/img/no-image-available.png';
                        if(!empty($row['image_path'])){
                            $prod_img = function_exists('validate_image') ? validate_image($row['image_path']) : base_url . $row['image_path'];
                        }
                ?>
                <div class="col-xl-4 col-md-6 mb-4 product-item-col" 
                     data-brand="<?php echo $row['brand_id']; ?>" 
                     data-category="<?php echo $row['category_id']; ?>" 
                     data-price="<?php echo $sort_price; ?>" 
                     data-stock="<?php echo $total_stock > 0 ? '1' : '0'; ?>"
                     data-date="<?php echo strtotime($row['date_created']); ?>">
                     
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <span class="badge-fast">
                                <i class="fas fa-bolt"></i> تحویل سریع
                            </span>
                            <img src="<?php echo $prod_img; ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" loading="lazy">
                        </div>
                        
                        <div class="product-category">
                            <i class="fab fa-steam" style="color: var(--accent-cyan);"></i>
                            <span><?php echo $row['brand_name']; ?> - <?php echo $row['category_name']; ?></span>
                        </div>

                        <div class="product-title" title="<?php echo htmlspecialchars($row['name']); ?>">
                            <?php echo $row['name']; ?>
                        </div>

                        <div class="product-price-box">
                            <span class="text-muted" style="font-size: 0.85rem;">قیمت:</span>
                            <span class="product-price"><?php echo $price_str; ?></span>
                        </div>

                        <a href="<?php echo base_url ?>?p=view_product&id=<?php echo md5($row['id']); ?>" class="btn-buy-modern text-decoration-none">
                            <i class="fas fa-lock ml-1"></i>
                            <span>جزئیات و خرید</span>
                        </a>
                    </div>
                </div>
                <?php 
                    endwhile;
                else:
                ?>
                <div class="col-12 text-center py-5">
                    <i class="fas fa-box-open fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">در حال حاضر هیچ محصولی یافت نشد!</h5>
                </div>
                <?php endif; ?>
            </div>

            <!-- پیام عدم وجود آیتم مطابق فیلتر -->
            <div id="noProductsFoundNotice" class="text-center py-5 d-none">
                <i class="fas fa-search-minus fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">هیچ کالایی با معیارهای انتخابی شما مطابقت ندارد.</h5>
                <button type="button" class="btn btn-sm btn-outline-primary mt-2" onclick="document.getElementById('resetFiltersBtn').click();">
                    پاک کردن فیلترها
                </button>
            </div>

        </div>
    </div>
</div>

<!-- ================= نمادهای اعتماد و ویژگی‌های پایین سایت ================= -->
<div class="container-fluid px-lg-5 mb-5 pt-4">
    <div class="row justify-content-center">
        <div class="col-lg-2 col-md-4 col-6 mb-3 text-center">
            <div class="feature-box flex-column py-3 justify-content-center">
                <i class="fas fa-shield-alt text-primary mb-2" style="font-size: 1.8rem;"></i>
                <span class="font-weight-bold" style="font-size: 0.9rem;">نماد اعتماد</span>
                <small class="text-muted">خرید ۱۰۰٪ امن</small>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-3 text-center">
            <div class="feature-box flex-column py-3 justify-content-center">
                <i class="fas fa-credit-card text-info mb-2" style="font-size: 1.8rem;"></i>
                <span class="font-weight-bold" style="font-size: 0.9rem;">درگاه بانکی</span>
                <small class="text-muted">شاپرک و زرین‌پال</small>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-3 text-center">
            <div class="feature-box flex-column py-3 justify-content-center">
                <i class="fas fa-bolt text-warning mb-2" style="font-size: 1.8rem;"></i>
                <span class="font-weight-bold" style="font-size: 0.9rem;">تحویل فوری</span>
                <small class="text-muted">ارسال خودکار ۲۴/۷</small>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-3 text-center">
            <div class="feature-box flex-column py-3 justify-content-center">
                <i class="fas fa-key text-success mb-2" style="font-size: 1.8rem;"></i>
                <span class="font-weight-bold" style="font-size: 0.9rem;">ضمانت اصالت</span>
                <small class="text-muted">سورس قانونی کالا</small>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-6 mb-3 text-center">
            <div class="feature-box flex-column py-3 justify-content-center">
                <i class="fab fa-telegram text-primary mb-2" style="font-size: 1.8rem;"></i>
                <span class="font-weight-bold" style="font-size: 0.9rem;">پشتیبانی تلگرام</span>
                <small class="text-muted">پاسخگویی سریع</small>
            </div>
        </div>
    </div>
</div>