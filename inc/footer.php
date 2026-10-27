</div> <!-- /.wrapper -->

<!-- فوتر مدرن SilentGalaxy -->
<footer class="main-footer py-4" style="background: var(--bg-surface); border-top: 1px solid var(--border-subtle); color: var(--text-secondary); transition: var(--theme-transition);">
    <div class="container-fluid px-lg-5">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-right mb-3 mb-md-0">
                <span class="font-weight-bold" style="color: var(--text-primary); font-size: 1.1rem;">
                    <?php echo $_settings->info('name') ?>
                </span>
                <p class="small text-muted mb-0 mt-1">
                    مرجع خرید و فروش قانونی آیتم‌ها، کلیدها و بازی‌های اورجینال
                </p>
            </div>
            <div class="col-md-6 text-center text-md-left">
                <a href="<?php echo base_url ?>" class="mx-2 text-muted text-decoration-none small">صفحه نخست</a>
                <span class="text-muted">|</span>
                <a href="<?php echo base_url ?>?p=products" class="mx-2 text-muted text-decoration-none small">محصولات و آیتم‌ها</a>
                <span class="text-muted">|</span>
                <a href="<?php echo base_url ?>privacy_policy.html" class="mx-2 text-muted text-decoration-none small">حریم خصوصی</a>
                <span class="text-muted">|</span>
                <a href="<?php echo base_url ?>termsofservice.php" class="mx-2 text-muted text-decoration-none small">قوانین و شرایط</a>
                <span class="text-muted">|</span>
                <a href="<?php echo base_url ?>?p=about" class="mx-2 text-muted text-decoration-none small">درباره ما</a>
            </div>
        </div>
    </div>
</footer>

<!-- اسکریپت‌های ضروری -->
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url ?>dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>

<!-- فایل جاوااسکریپت اختصاصی تعاملات -->
<script src="<?php echo base_url ?>assets/js/shop-interactions.js"></script>

<!-- اسکریپت فیلتر و سورتینگ زنده و سریع بدون رفرش صفحه -->
<script>
$(document).ready(function() {
    function runLiveFilters() {
        const searchText = ($('#filterSearchInput').val() || $('#globalSearchInput').val() || '').trim().toLowerCase();
        const isAllBrands = $('#filter-all').is(':checked');
        const inStockOnly = $('#filterInStockOnly').is(':checked');
        
        // دریافت برندهای تیک‌خورده
        const checkedBrands = [];
        $('.brand-filter-check:checked').each(function() {
            if ($(this).val() !== 'all') {
                checkedBrands.push($(this).val());
            }
        });

        // دریافت دسته‌بندی‌های تیک‌خورده
        const checkedCats = [];
        $('.category-filter-check:checked').each(function() {
            checkedCats.push($(this).val());
        });

        let visibleCount = 0;
        const items = $('.product-item-col');

        items.each(function() {
            const item = $(this);
            const title = item.find('.product-title').text().toLowerCase();
            const brandId = item.attr('data-brand');
            const catId = item.attr('data-category');
            const inStock = item.attr('data-stock') === '1';

            const matchSearch = !searchText || title.includes(searchText);
            const matchBrand = isAllBrands || checkedBrands.length === 0 || checkedBrands.includes(brandId);
            const matchCat = checkedCats.length === 0 || checkedCats.includes(catId);
            const matchStock = !inStockOnly || inStock;

            if (matchSearch && matchBrand && matchCat && matchStock) {
                item.stop(true, true).fadeIn(200);
                visibleCount++;
            } else {
                item.stop(true, true).fadeOut(150);
            }
        });

        $('#productsCountText').text(visibleCount + ' محصول نمایش داده شده');
        if (visibleCount === 0) {
            $('#noProductsFoundNotice').removeClass('d-none');
        } else {
            $('#noProductsFoundNotice').addClass('d-none');
        }
    }

    // اتصال ورودی‌ها به فیلتر
    $('#filterSearchInput, #globalSearchInput').on('input', runLiveFilters);
    $('.brand-filter-check, .category-filter-check, #filterInStockOnly').on('change', runLiveFilters);

    // سورتینگ مرتب‌سازی
    $('#sortProductsSelect').on('change', function() {
        const val = $(this).val();
        const container = $('#productsGridContainer');
        const items = $('.product-item-col').get();

        items.sort(function(a, b) {
            const priceA = parseFloat($(a).attr('data-price')) || 0;
            const priceB = parseFloat($(b).attr('data-price')) || 0;
            const dateA = parseInt($(a).attr('data-date')) || 0;
            const dateB = parseInt($(b).attr('data-date')) || 0;

            if (val === 'price-asc') return priceA - priceB;
            if (val === 'price-desc') return priceB - priceA;
            if (val === 'newest') return dateB - dateA;
            return 0;
        });

        $.each(items, function(idx, itm) {
            container.append(itm);
        });
    });

    // بار اول تعداد را به‌روزرسانی کن
    runLiveFilters();
});
</script>
</body>
</html>