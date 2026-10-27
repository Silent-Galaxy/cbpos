<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" data-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $_settings->info('title') != false ? $_settings->info('title').' - ' : '' ?><?php echo $_settings->info('name') ?></title>
    <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />
    
    <!-- جلوگیری آنی از پرش رنگ سفید هنگام لود (Anti-Flicker) -->
    <script>
        (function() {
            var savedTheme = localStorage.getItem('sg_theme') || 'dark';
            document.documentElement.setAttribute('data-theme', savedTheme);
        })();
    </script>

    <!-- فونت زیبای وزیرمتن -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/rastikerdar/vazirmatn@v33.003/Vazirmatn-font-face.css">
    
    <!-- آیکون‌های فونت‌اوسم -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- بوت‌استرپ و قالب پایه -->
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url ?>plugins/toastr/toastr.min.css">

    <!-- استایل مدرن سایبر شاپ که ایجاد کردید -->
    <link rel="stylesheet" href="<?php echo base_url ?>assets/css/cyber-shop.css">

    <!-- جی‌کوئری -->
    <script src="<?php echo base_url ?>plugins/jquery/jquery.min.js"></script>

    <style>
        /* هماهنگی کامل RTL و بهینه‌سازی فرم‌ها */
        body {
            direction: rtl;
            text-align: right;
            font-family: 'Vazirmatn', sans-serif;
            overflow-x: hidden;
        }
        .dropdown-menu {
            text-align: right;
        }
        /* اسکرول‌بار مدرن و شیک */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-main);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--border-glow);
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-primary);
        }
    </style>
</head>
<body class="layout-top-nav">
<div class="wrapper">