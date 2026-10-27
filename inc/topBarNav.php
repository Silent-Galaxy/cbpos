<?php
//  ضمیمه فایل استایل اختصاصی
echo '<link rel="stylesheet" href="SilentGalaxy.css">';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<nav class="navbar navbar-expand-lg sg-navbar">
    <div class="container-fluid px-3 px-lg-5">
        
        <!-- برند و لوگو (سمت راست در RTL) -->
        <a class="navbar-brand me-3" href="./">
            <img src="<?php echo validate_image($_settings->info('logo')) ?>" width="34" height="34" class="d-inline-block align-middle" alt="Logo">
            <span><?php echo $_settings->info('short_name') ?></span>
        </a>

        <!-- دکمه همبرگری موبایل -->
        <button class="navbar-toggler border-0 text-white" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- لینک‌های منو -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link-custom <?php echo !isset($_GET['p']) ? 'active' : '' ?>" href="./">خانه</a>
                </li>
                <?php 
                $cat_qry = $conn->query("SELECT * FROM categories where status = 1 limit 4");
                $count_cats = $conn->query("SELECT * FROM categories where status = 1")->num_rows;
                while($crow = $cat_qry->fetch_assoc()):
                ?>
                <li class="nav-item">
                    <a class="nav-link-custom" href="./?p=products&c=<?php echo md5($crow['id']) ?>"><?php echo $crow['category'] ?></a>
                </li>
                <?php endwhile; ?>
                
                <?php if($count_cats > 4): ?>
                <li class="nav-item">
                    <a class="nav-link-custom" href="./?p=view_categories">همه دسته‌بندی‌ها</a>
                </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link-custom" href="./?p=about">درباره ما</a>
                </li>
            </ul>

            <!-- سرچ باکس و دکمه‌های کاربری (سمت چپ در RTL) -->
            <div class="d-flex align-items-center flex-wrap gap-2 mt-3 mt-lg-0">
                <!-- فرم جستجو -->
                <form class="sg-search-box me-lg-3" id="search-form">
                    <input class="form-control sg-search-input" type="search" placeholder="جستجوی محصول، آیتم..." name="search" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : "" ?>" autocomplete="off">
                    <button class="sg-search-btn" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                
                
                              <!-- دکمه جابجایی بین حالت روشن و تاریک -->
                <button type="button" class="btn-theme-toggle me-2" id="theme-toggle" title="تغییر تم">
                    <i class="fa fa-moon" id="theme-icon"></i>
                </button>    

                <!-- ورود یا پنل کاربری -->
                <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 2): ?>
                    <a class="btn-sg-cart me-2" href="./?p=cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>سبد خرید</span>
                        <span class="badge-cart-sg" id="cart-count">
                          <?php 
                            $count = $conn->query("SELECT SUM(quantity) as items from `cart` where client_id =".$_settings->userdata('id'))->fetch_assoc()['items'];
                            echo ($count > 0 ? $count : 0);
                          ?>
                        </span>
                    </a>

                    <a href="./?p=my_account" class="btn-sg-glow me-2">
                        <i class="fa fa-user"></i>
                        <span><?php echo $_settings->userdata('firstname') ?></span>
                    </a>
                    <a href="logout.php" class="btn btn-outline-danger btn-sm rounded-circle px-2 py-1" title="خروج">
                        <i class="fa fa-sign-out-alt"></i>
                    </a>
                <?php else: ?>
                    <button id="login-btn" type="button" class="btn-sg-glow">
                        <i class="fa fa-sign-in-alt"></i>
                        <span>ورود به حساب</span>
                    </button>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>

<script>
  $(function(){
    $('#login-btn').click(function(){
      if(typeof uni_modal === "function"){
        uni_modal("","login.php");
      }
    });

    $('#search-form').submit(function(e){
      e.preventDefault();
      var sTxt = $('[name="search"]').val();
      if(sTxt != '')
        location.href = './?p=products&search='+encodeURIComponent(sTxt);
    });
  });








// بارگذاری آنی تم ذخیره‌شده
(function() {
    var savedTheme = localStorage.getItem('sg_theme') || 'dark';
    if(savedTheme === 'light') {
        $('body').addClass('light-mode');
        $('#theme-icon').removeClass('fa-moon').addClass('fa-sun');
    }

    $('#theme-toggle').click(function(){
        $('body').toggleClass('light-mode');
        var isLight = $('body').hasClass('light-mode');
        
        // ذخیره در مرورگر
        localStorage.setItem('sg_theme', isLight ? 'light' : 'dark');

        // تغییر آیکون با چرخش نرم
        if(isLight) {
            $('#theme-icon').fadeOut(120, function(){
                $(this).removeClass('fa-moon').addClass('fa-sun').fadeIn(120);
            });
        } else {
            $('#theme-icon').fadeOut(120, function(){
                $(this).removeClass('fa-sun').addClass('fa-moon').fadeIn(120);
            });
        }
    });
})();
</script>