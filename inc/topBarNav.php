<nav class="main-header navbar navbar-expand-lg navbar-dark border-bottom-0" style="background: var(--bg-card); backdrop-filter: blur(14px); border-bottom: 1px solid var(--border-subtle) !important; position: sticky; top: 0; z-index: 1040; transition: var(--theme-transition);">
  <div class="container-fluid px-lg-4">
    
    <!-- لوگو و برند -->
    <a href="<?php echo base_url ?>" class="navbar-brand d-flex align-items-center">
      <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="<?php echo $_settings->info('short_name') ?>" class="brand-image img-circle elevation-2" style="opacity: .95; width: 40px; height: 40px; object-fit: cover; margin-left: 10px;">
      <span class="brand-text font-weight-bold" style="background: var(--accent-gradient); -webkit-background-clip: text; -webkit-text-fill-color: transparent; font-size: 1.3rem;">
        <?php echo $_settings->info('short_name') ?>
      </span>
    </a>

    <!-- دکمه منو در موبایل -->
    <button class="navbar-toggler order-1 border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fas fa-bars" style="color: var(--text-primary);"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      <!-- لینک‌های منو اصلی -->
      <ul class="navbar-nav mx-auto align-items-lg-center">
        <li class="nav-item">
          <a href="<?php echo base_url ?>" class="nav-link px-3 <?php echo !isset($_GET['p']) || $_GET['p'] == 'home' ? 'active-menu-pill' : '' ?>">
            <i class="fas fa-home ml-1"></i> صفحه نخست
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url ?>?p=products" class="nav-link px-3 <?php echo isset($_GET['p']) && $_GET['p'] == 'products' ? 'active-menu-pill' : '' ?>">
            🎮 بازی‌ها و آیتم‌ها
          </a>
        </li>
        <li class="nav-item">
          <a href="https://t.me/SilentGalaxy" target="_blank" class="nav-link px-3">
            💰 ما از شما می‌خریم
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url ?>?p=about" class="nav-link px-3 <?php echo isset($_GET['p']) && $_GET['p'] == 'about' ? 'active-menu-pill' : '' ?>">
            ℹ️ درباره ما
          </a>
        </li>
      </ul>

      <!-- سرچ سریع بالای صفحه -->
      <form class="form-inline ml-0 ml-lg-3 my-2 my-lg-0" id="topNavSearchForm" onsubmit="event.preventDefault();">
        <div class="input-group" style="background: var(--input-bg); border-radius: 20px; border: 1px solid var(--border-subtle); padding: 2px 10px;">
          <input class="form-control form-control-navbar border-0 bg-transparent text-white" type="search" id="globalSearchInput" placeholder="جستجوی محصول، آیتم..." style="color: var(--text-primary) !important; font-size: 0.85rem;">
          <div class="input-group-append">
            <button class="btn btn-navbar bg-transparent border-0" type="button" style="color: var(--accent-primary);">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </div>

    <!-- بخش سمت چپ: دکمه تم، سبد خرید، حساب کاربری -->
    <ul class="order-1 order-lg-3 navbar-nav navbar-no-expand ml-auto align-items-center flex-row">
      
      <!-- دکمه سوییچ دارک / لایت انیمیشنی -->
      <li class="nav-item ml-2">
        <button type="button" class="theme-switch-btn" id="themeToggleBtn" title="تغییر حالت شب و روز">
          <i class="fas fa-moon"></i>
        </button>
      </li>

      <!-- سبد خرید -->
      <?php 
        $cart_count = 0;
        if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 2){
          $c_qry = $conn->query("SELECT sum(quantity) as total FROM `cart_list` where client_id = '{$_settings->userdata('id')}'");
          if($c_qry && $c_qry->num_rows > 0){
            $cart_count = $c_qry->fetch_assoc()['total'] ?? 0;
          }
        }
      ?>
      <li class="nav-item ml-2">
        <a href="<?php echo base_url ?>?p=cart" class="btn btn-outline-primary position-relative d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; border-radius: 12px; border: 1px solid var(--border-subtle); color: var(--text-primary); background: var(--bg-surface);">
          <i class="fas fa-shopping-cart"></i>
          <span class="badge badge-pill badge-danger position-absolute" id="cart-count" style="top: -5px; right: -5px; font-size: 0.7rem; background: var(--accent-gradient);">
            <?php echo $cart_count ?>
          </span>
        </a>
      </li>

      <!-- ورود یا منوی کاربر -->
      <li class="nav-item mr-2">
        <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 2): ?>
          <div class="dropdown">
            <button class="btn btn-buy-modern dropdown-toggle py-2 px-3 m-0" type="button" id="userMenuBtn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user-circle ml-1"></i> <?php echo $_settings->userdata('firstname') ?>
            </button>
            <div class="dropdown-menu dropdown-menu-left" style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: 12px; box-shadow: var(--card-shadow);">
              <a class="dropdown-item" href="<?php echo base_url ?>?p=my_account" style="color: var(--text-primary);"><i class="fas fa-user-cog ml-2"></i> حساب کاربری</a>
              <div class="dropdown-divider" style="border-color: var(--border-subtle);"></div>
              <a class="dropdown-item text-danger" href="<?php echo base_url ?>classes/Login.php?f=logout_client"><i class="fas fa-sign-out-alt ml-2"></i> خروج</a>
            </div>
          </div>
        <?php else: ?>
          <a href="<?php echo base_url ?>login.php" class="btn-buy-modern py-2 px-3 m-0 text-decoration-none">
            <i class="fas fa-sign-in-alt ml-1"></i> ورود به حساب
          </a>
        <?php endif; ?>
      </li>

    </ul>
  </div>
</nav>

<style>
  .active-menu-pill {
    background: rgba(99, 102, 241, 0.15) !important;
    color: var(--accent-primary) !important;
    border-radius: 10px;
    font-weight: 700;
  }
  .nav-link {
    color: var(--text-secondary) !important;
    font-weight: 600;
    transition: var(--theme-transition);
  }
  .nav-link:hover {
    color: var(--accent-primary) !important;
  }
</style>