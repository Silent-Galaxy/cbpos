<?php
/**
 * بخش نمایش و جستجوی محصولات (Products Catalog)
 * اصلاح‌شده جهت رفع کامل آسیب‌پذیری‌های CVE-2022-25396 و CVE-2022-25395
 * منطبق با استانداردهای امنیتی PHP 8.x و OWASP
 */

// دریافت و ضدعفونی‌سازی ورودی جستجو
$search = isset($_GET['search']) ? trim($_GET['search']) : '';
$category_id = isset($_GET['c']) ? filter_var($_GET['c'], FILTER_VALIDATE_INT) : null;
$brand_id = isset($_GET['b']) ? filter_var($_GET['b'], FILTER_VALIDATE_INT) : null;

// آماده‌سازی عنوان صفحه و برچسب فیلتر
$page_title = "لیست محصولات";
if (!empty($search)) {
    $page_title = "نتایج جستجو برای: \"" . htmlspecialchars($search, ENT_QUOTES, 'UTF-8') . "\"";
}
?>

<div class="content py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-light p-3 rounded">
                        <li class="breadcrumb-item"><a href="./">صفحه اصلی</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <!-- ستون سایدبار فیلتر دسته‌بندی و برند -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-header bg-primary text-white">
                        <h6 class="mb-0"><i class="fa fa-list mr-2"></i> دسته‌بندی‌ها</h6>
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="./?p=products" class="list-group-item list-group-item-action <?= empty($category_id) ? 'active' : '' ?>">
                            همه محصولات
                        </a>
                        <?php
                        $cat_stmt = $conn->prepare("SELECT id, category FROM `category_list` WHERE `status` = 1 AND `delete_flag` = 0 ORDER BY `category` ASC");
                        if ($cat_stmt) {
                            $cat_stmt->execute();
                            $cats = $cat_stmt->get_result();
                            while ($crow = $cats->fetch_assoc()):
                        ?>
                            <a href="./?p=products&c=<?= (int)$crow['id'] ?>" 
                               class="list-group-item list-group-item-action <?= ($category_id == $crow['id']) ? 'active' : '' ?>">
                                <?= htmlspecialchars($crow['category'], ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        <?php 
                            endwhile;
                            $cat_stmt->close();
                        }
                        ?>
                    </div>
                </div>
            </div>

            <!-- ستون نمایش محصولات -->
            <div class="col-lg-9 col-md-8">
                <?php if (!empty($search)): ?>
                    <div class="alert alert-info d-flex align-items-center mb-4" role="alert">
                        <i class="fa fa-info-circle mr-2"></i>
                        <div>
                            نمایش نتایج منطبق با عبارت: 
                            <strong><?= htmlspecialchars($search, ENT_QUOTES, 'UTF-8') ?></strong>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    <?php
                    // پیاده‌سازی ایمن کوئری داینامیک با استفاده از Prepared Statements
                    $query = "SELECT p.*, b.name as brand_name, c.category 
                              FROM `product_list` p
                              INNER JOIN `brand_list` b ON p.brand_id = b.id
                              INNER JOIN `category_list` c ON p.category_id = c.id
                              WHERE p.`status` = 1 AND p.`delete_flag` = 0";

                    $params = [];
                    $types = "";

                    if (!empty($search)) {
                        $query .= " AND (p.`name` LIKE ? OR p.`description` LIKE ? OR b.`name` LIKE ?)";
                        $searchTerm = "%{$search}%";
                        $params[] = $searchTerm;
                        $params[] = $searchTerm;
                        $params[] = $searchTerm;
                        $types .= "sss";
                    }

                    if (!empty($category_id)) {
                        $query .= " AND p.`category_id` = ?";
                        $params[] = $category_id;
                        $types .= "i";
                    }

                    if (!empty($brand_id)) {
                        $query .= " AND p.`brand_id` = ?";
                        $params[] = $brand_id;
                        $types .= "i";
                    }

                    $query .= " ORDER BY p.`name` ASC";

                    $stmt = $conn->prepare($query);

                    if ($stmt) {
                        if (!empty($params)) {
                            $stmt->bind_param($types, ...$params);
                        }
                        $stmt->execute();
                        $products = $stmt->get_result();

                        if ($products->num_rows > 0):
                            while ($row = $products->fetch_assoc()):
                                // محاسبه امن تصاویر و آدرس پیش‌فرض
                                $img_path = "uploads/products/" . $row['id'] . ".png";
                                $thumbnail = is_file(base_app . $img_path) ? base_url . $img_path : base_url . "dist/img/no-image-available.png";
                    ?>
                        <div class="col mb-4">
                            <div class="card h-100 shadow-sm product-card border-0">
                                <div class="position-relative overflow-hidden" style="height: 200px;">
                                    <img src="<?= htmlspecialchars($thumbnail, ENT_QUOTES, 'UTF-8') ?>" 
                                         class="card-img-top w-100 h-100" 
                                         style="object-fit: cover;" 
                                         alt="<?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') ?>">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <small class="text-muted mb-1"><?= htmlspecialchars($row['brand_name'], ENT_QUOTES, 'UTF-8') ?></small>
                                    <h5 class="card-title text-truncate" title="<?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') ?>">
                                        <?= htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8') ?>
                                    </h5>
                                    <p class="card-text text-muted small flex-grow-1">
                                        <?= htmlspecialchars(mb_strimwidth(strip_tags(html_entity_decode($row['description'] ?? '')), 0, 75, "..."), ENT_QUOTES, 'UTF-8') ?>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center mt-3 pt-2 border-top">
                                        <span class="text-primary font-weight-bold">
                                            <?= number_format((float)($row['price'] ?? 0), 2) ?> تومان
                                        </span>
                                        <a href="./?p=view_product&id=<?= (int)$row['id'] ?>" class="btn btn-sm btn-outline-primary">
                                            مشاهده کالا
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                            endwhile;
                        else:
                    ?>
                        <div class="col-12 py-5 text-center">
                            <div class="text-muted">
                                <i class="fa fa-box-open fa-3x mb-3 text-secondary"></i>
                                <h5>هیچ کالایی یافت نشد.</h5>
                                <p class="text-secondary small">لطفاً عبارت دیگری را جستجو کرده یا فیلترها را حذف کنید.</p>
                                <a href="./?p=products" class="btn btn-sm btn-secondary mt-2">نمایش همه محصولات</a>
                            </div>
                        </div>
                    <?php 
                        endif;
                        $stmt->close();
                    } else {
                        echo '<div class="col-12 alert alert-danger">خطا در بارگذاری اطلاعات دیتابیس رخ داده است.</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>