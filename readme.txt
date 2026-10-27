مستند جامع و نهایی پروژه کارشناسی مهندسی نرم‌افزار (README.md)

سامانه مدیریت و فروشگاه برخط محصولات آرایشی و بهداشتی

(Cosmetics & Beauty Product Online Store - CBPOS)

پروژه پایانی دوره کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر - گرایش نرم‌افزار
دانشکده فنی و حرفه‌ای شهید چمران رشت (روزانه)

| مشخصه                         | اطلاعات                                                                                                                                                                       |
| :---------------------------- | :---------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| **دانشجو**                    | امیرعلی صالح پور                                                                                                                                                              |
| **استاد راهنما**              | جناب استاد عباس حیدری پاشاکی                                                                                                                                                  |
| **مقطع و رشته**               | کارشناسی ناپیوسته - مهندسی حرفه‌ای کامپیوتر (نرم‌افزار)                                                                                                                       |
| **دانشگاه**                   | دانشکده فنی و حرفه‌ای شهید چمران رشت (دوره روزانه)                                                                                                                            |
| **تاریخ ارزیابی و دفاع**      | آبان‌ماه ۱۴۰۵ (1405/08)                                                                                                                                                       |
| **مخزن توسعه پروژه**          | [Silent-Galaxy/cbpos](https://github.com/Silent-Galaxy/cbpos)                                                                                                                 |
| **منبع پایه و هسته اولیه**    | [Cosmetics and Beauty Product Online Store (SourceCodester)](https://www.sourcecodester.com/php/15181/cosmetics-and-beauty-product-online-store-phpoop-free-source-code.html) |
| **سکو و بستر اجرا**           | پشته بومی XAMPP (Apache, MySQL/MariaDB, PHP OOP)                                                                                                                              |
| **آدرس ساید فروشگاه (کاربر)** | `http://localhost/cbpos/`                                                                                                                                                     |
| **آدرس ساید مدیریت (ادمین)**  | `http://localhost/cbpos/admin/`                                                                                                                                               |

PHP Version Database Environment Modeling License

فهرست مطالب

1.  چکیده و معرفی اجمالی سیستم
2.  تحلیل نقادانه، مهندسی معکوس و بازمهندسی نرم‌افزار
3.  معماری و قابلیت‌های کارکردی سیستم
4.  پیش‌نیازها و راهنمای گام‌به‌گام راه‌اندازی بر بستر XAMPP
5.  ساختار درختی فایل‌ها و ماژول‌های پروژه
6.  مجموعه ۱۰ دیاگرام جامع مهندسی نرم‌افزار (PlantUML)
      - دیاگرام ۱: نمودار موارد کاربرد جامع سامانه (Use Case Diagram)
      - دیاگرام ۲: نمودار کلاس‌های کلیدی و دامنه شی‌گرایی (Class Diagram)
      - دیاگرام ۳: مدل داده‌ای و موجودیت-رابطه پایگاه داده (Entity Relationship
        Diagram - ERD)
      - دیاگرام ۴: نمودار توالی احراز هویت و امنیت نشست‌ها (Authentication
        Sequence Diagram)
      - دیاگرام ۵: نمودار توالی ثبت سفارش، قفل‌گذاری موجودی و پرداخت (Checkout
        Sequence Diagram)
      - دیاگرام ۶: نمودار فعالیت گردش کار خرید از سبد تا تسویه (Checkout
        Activity Diagram)
      - دیاگرام ۷: نمودار فعالیت مدیریت زنجیره تأمین و انبارداری (Inventory
        Activity Diagram)
      - دیاگرام ۸: نمودار ماشین حالت چرخه حیات سفارش (Order Lifecycle State
        Machine)
      - دیاگرام ۹: نمودار قطعات و معماری لایه‌ای سامانه (Component Diagram)
      - دیاگرام ۱۰: نمودار استقرار بستر سخت‌افزاری و نرم‌افزاری در XAMPP
        (Deployment Diagram)
7.  ارزیابی امنیتی، آسیب‌پذیری‌ها و ایمن‌سازی علمی (OWASP Top 10)
8.  گالری تصاویر محیط برنامه (رابط کاربری کاربر و پنل مدیریت)
9.  نتیجه‌گیری و چشم‌انداز توسعه آتی

۱. چکیده و معرفی اجمالی سیستم

سامانه CBPOS (Cosmetics and Beauty Product Online Store) یک راهکار تحت وب جامع،
ماژولار و مبتنی بر معماری شی‌گرا (OOP) است که به منظور مکانیزه‌سازی فرآیندهای
بازاریابی، مدیریت انبار، فروش و پردازش سفارش‌های حوزه تخصصی محصولات آرایشی،
مراقبت پوستی و زیبایی طراحی شده است.

این پروژه به عنوان پژوهش و پروژه پایانی مقطع کارشناسی ناپیوسته مهندسی کامپیوتر
(نرم‌افزار) در دانشکده چمران رشت، با هدف بررسی عمیق فرآیند بازمهندسی
نرم‌افزارهای تجاری بر بستر وب (Web Software Re-engineering) تدوین شده است. سیستم
دارای دو لایه متمایز کاربری است:

1.  پورتال مشتریان (Storefront / Client-side): امکان بررسی کاتالوگ محصولات بر
    پایه دسته‌بندی و برند تجاری، جستجوی پیشرفته، مشاهده وضعیت لحظه‌ای موجودی
    انبار بر اساس تنوع (Variant)، مدیریت سبد خرید و ثبت نهایی سفارش.
2.  پیشخوان کنترل و مدیریت متمرکز (Admin Dashboard): مدیریت انبار چندسطحی
    (Stock-in/Stock-out)، کنترل وضعیت اقلام و سفارش‌ها در ۵ فاز عملیاتی، ثبت
    برندها، کاتالوگ‌گذاری و کنترل امنیت دسترسی کاربران مدیریتی.

۲. تحلیل نقادانه، مهندسی معکوس و بازمهندسی نرم‌افزار

یکی از ارکان اساسی پروژه‌های کارشناسی، توانایی تحلیل انتقادی (Critical Thinking)
کدهای موجود در سطح صنعت و ارتقای شواهد‌محور (Evidence-based) آن‌هاست. منبع پایه
این پروژه از وب‌سایت مرجع SourceCodester استخراج شده و پس از مهندسی معکوس و
استخراج نقایص معماری، ارتقا یافته است:

[Legacy Code: SourceCodester]
      ├── 1. نقایص بحرانی امنیتی (SQLi، فقدان هش ایمن، XSS)
      ├── 2. جفت‌شدگی شدید (High Coupling) در کنترلرها
      ├── 3. ریسک همزمانی در تراکنش‌های انبار (Race Conditions)
      └── 4. ناسازگاری با استانداردهای مدرن PHP 8.x
              │
              ▼ [فرآیند بازمهندسی و Refactoring علمی]
[Silent-Galaxy/cbpos: نسخه ارائه‌شده]
      ├── 1. پارامتریک‌سازی کوئری‌ها و امن‌سازی لایه نشست (Prepared Statements)
      ├── 2. بازسازی کلاس‌های دامنه و جداسازی منطق داده‌ای از لایه Presentation
      ├── 3. اعتبارسنجی اتمیک موجودی انبار در تراکنش‌های پایگاه داده (ACID)
      └── 4. انطباق کامل با پشته XAMPP و استانداردهای کدنویسی امن

بررسی شواهد محور نقاط ضعف نسخه پایه و اقدامات اصلاحی:

| ردیف  | مشخصه در نسخه اولیه (Legacy)                        | ریسک مهندسی / آسیب‌پذیری                                        | اصلاح انجام‌شده در پروژه حاضر                                                                          |
| :---: | :-------------------------------------------------- | :-------------------------------------------------------------- | :----------------------------------------------------------------------------------------------------- |
| **۱** | استفاده از رشته‌های خام متنی در کوئری‌های SQL       | **آسیب‌پذیری تزریق کد SQL (SQL Injection)** با درجه بحرانی بالا | پیاده‌سازی کوئری‌های پارامتریک (Parameterized Queries / Prepared Statements) با متدهای اعتبارسنجی قوی. |
| **۲** | ذخیره رمزهای عبور با الگوریتم منسوخ `MD5` بدون Salt | **حملات Rainbow Table** و شکستن آسان هش‌ها                      | ارتقا به متدهای ایمن رمزنگاری و هش سازگار نظیر `password_hash()` با الگوریتم BCRYPT.                   |
| **۳** | رندر مستقیم ورودی‌های کاربر بدون فیلتراسیون         | **حملات XSS ذخیره‌شده و بازتابی**                               | اعتبارسنجی، پاک‌سازی (Sanitization) و خروجی ایمن با توابع تخصصی ضد اسکریپت.                            |
| **۴** | خروج اقلام بدون بررسی Race Condition در تراکنش      | مغایرت موجودی انبار در صورت خرید همزمان (Overselling)           | اعمال اعتبارسنجی دو مرحله‌ای و تراکنش‌های امن پایگاه داده در سطح ثبت سفارش.                            |
| **۵** | بارگذاری ناامن فایل تصاویر بدون اعتبارسنجی MIME     | اجرای فایل‌های مخرب شل و دسترسی ریشه به سرور (RCE)              | بررسی فرمت پسوند، نوع MIME، سایز و بازتولید نام رندوم فایل با توابع هش یکتا.                           |

۳. معماری و قابلیت‌های کارکردی سیستم

بخش فروشگاهی و مشتریان (Client-Side)

  - کاتالوگ پویا و دسته‌بندی دوسطحی: سازمان‌دهی کالاها بر مبنای طبقه‌بندی
    (Categories) و نشان‌های تجاری (Brands).
  - مدیریت تنوع کالا و انبار (Variant & Stock Tracking): نمایش دقیق اقلام موجود
    در انبار به ازای هر سایز، رنگ یا بسته‌بندی.
  - سبد خرید ناهمگام (AJAX Shopping Cart): افزودن و ویرایش لحظه‌ای تعداد کالا
    بدون رفرش کل صفحه با فیدبک بصری.
  - ثبت سفارش چندمرحله‌ای: تکمیل آدرس تحویل گیرنده، انتخاب شیوه‌های پرداخت
    (نقدی/برخط) و صدور فاکتور پیگیری.
  - پروفایل کاربری و تاریخچه خرید: مشاهده جزئیات وضعیت جاری سفارش‌ها (در حال
    پردازش، ارسال‌شده، تحویل‌شده، لغوشده).

بخش مدیریت سیستم (Admin Panel)

  - داشبورد تحلیلی: نمایش شاخص‌های عملکرد، درآمد کل، تعداد اقلام در معرض اتمام
    موجودی و سفارش‌های جدید.
  - ماژول مدیریت تأمین و انبارداری: ثبت ورودی‌های جدید انبار (Stock In)،
    خروجی‌ها و کنترل کسری کالا.
  - کنترل سفارشات (Order State Pipeline): تغییر وضعیت چرخه سفارش همراه با کنترل
    اثرات برگشت محصول به موجودی.
  - مدیریت اطلاعات و تنظیمات سیستم (System Information): مدیریت پویای متادیتای
    فروشگاه، لوگو، بنرها و اطلاعات ارتباطی.

۴. پیش‌نیازها و راهنمای گام‌به‌گام راه‌اندازی بر بستر XAMPP

سامانه به طور اختصاصی جهت اجرا بر روی نرم‌افزار بومی XAMPP توسعه و سازگار شده
است. لطفاً مراحل زیر را با دقت دنبال نمایید:

۱.۴. نیازمندی‌های نرم‌افزاری

  - نرم‌افزار XAMPP (نسخه پشتیبان از PHP 7.4 تا 8.2 و MariaDB/MySQL 10.4+)
  - مرورگر مدرن مبتنی بر وب‌کیت (Google Chrome, Mozilla Firefox, Edge)
  - فعال بودن ماژول GD Library در تنظیمات مفسر PHP (جهت پردازش و تغییر اندازه
    تصاویر بندانگشتی محصولات)

۲.۴. گام اول: کلون سورس‌کد در ریشه وب‌سرور آپاچی

فایل‌های پروژه باید در مسیر ریشه وب‌سرور آپاچی در نرم‌افزار XAMPP قرار گیرند:

# رفتن به مسیر htdocs در سیستم‌عامل ویندوز (پیش‌فرض XAMPP)
cd C:/xampp/htdocs/

# کلون کردن مخزن پروژه
git clone https://github.com/Silent-Galaxy/cbpos.git

تذکر ساختاری: پس از کلون، مطمئن شوید پوشه پروژه دقیقاً با نام cbpos در htdocs
قرار گرفته باشد تا مسیر آن به صورت C:/xampp/htdocs/cbpos شناسایی شود.

۳.۴. گام دوم: فعال‌سازی ماژول گرافیکی GD در PHP

1.  فایل پیکربندی C:/xampp/php/php.ini را با یک ویرایشگر متنی (مانند Notepad یا
    VS Code) باز کنید.
2.  عبارت extension=gd را جستجو کنید.
3.  در صورتی که کاراکتر سمی‌کالن (;) در ابتدای خط قرار دارد، آن را حذف کنید تا
    فعال شود:
    extension=gd
4.  فایل را ذخیره کرده و وب‌سرور Apache را از طریق XAMPP Control Panel یک بار
    Restart کنید.

۴.۴. گام سوم: ساخت پایگاه داده و بارگذاری اسکیمای اولیه

1.  وارد کنترل پنل XAMPP شده و سرویس‌های Apache و MySQL را در حالت Start قرار
    دهید.
2.  از طریق مرورگر به آدرس زیر بروید:
    http://localhost/phpmyadmin/
3.  بر روی تب New کلیک کرده و نام پایگاه داده را دقیقاً cbpos_db تعیین نمایید
    (با انکودینگ utf8mb4_general_ci).
4.  وارد پایگاه داده تازه‌تأسیس cbpos_db شده و به برگه Import مراجعه کنید.
5.  فایل شمای پایگاه داده را از مسیر زیر در پوشه پروژه انتخاب کرده و دکمه
    Go/Import را بزنید:
    C:/xampp/htdocs/cbpos/database/cbpos_db.sql

۵.۴. گام چهارم: اعتبارسنجی فایل ارتباط با پایگاه داده

فایل initialize.php یا فایل‌های مستقر در پوشه classes/DBConnection.php
پارامترهای اتصال به دیتابیس را نگهداری می‌کنند. مقدار پیش‌فرض پیکربندی XAMPP به
شرح زیر است:

define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "cbpos_db");

۶.۴. گام پنجم: ورود به سیستم و اطلاعات پیش‌فرض

پس از اتمام مراحل، آدرس‌های زیر در مرورگر قابل دسترسی خواهند بود:

  - ساید کاربر (فروشگاه آنلاین):
    http://localhost/cbpos/
  - ساید مدیریت و پیشخوان ادمین:
    http://localhost/cbpos/admin/

| بخش کاربری                | نام کاربری / پست الکترونیک                         | کلمه عبور پیش‌فرض | سطح دسترسی                   |
| :------------------------ | :------------------------------------------------- | :---------------- | :--------------------------- |
| **مدیر کل سیستم (Admin)** | `admin`                                            | `admin123`        | کنترل تام سیستم و پیکربندی   |
| **مشتری نمونه (Client)**  | ثبت‌نام آزاد از طریق منوی Register در پرتال کاربری | رمز دلخواه کاربر  | ثبت سفارش، سبد خرید، پروفایل |

۵. ساختار درختی فایل‌ها و ماژول‌های پروژه

cbpos/
├── admin/                      # ماژول کنترل و پیشخوان مدیران سیستم
│   ├── home.php                # داشبورد آماری و شاخص‌های تجاری
│   ├── inc/                    # کامپوننت‌های فرانت‌اند ادمین (Header, Navigation, TopBar)
│   ├── inventory/              # مدیریت ثبت و اصلاح موجودی فیزیکی انبار
│   ├── orders/                 # مدیریت چرخه‌حیات سفارش‌ها و گزارش‌گیری
│   ├── product/                # تعریف محصولات، تنوع‌ها و قیمت‌گذاری
│   ├── system_info/            # پیکربندی هویت فروشگاه، سئو محلی و بنرها
│   └── index.php               # دروازه ورود به پنل مدیریت
├── classes/                    # لایه منطق شی‌گرایی و پردازش منطق کسب‌وکار
│   ├── DBConnection.php        # کلاس مدیریت کپسوله‌شده ارتباط با پایگاه داده
│   ├── Login.php               # کنترل فرآیندهای احراز هویت، انقضای نشست و نشست‌ها
│   ├── Master.php              # متدهای مرکزی CRUD برای اقلام تجاری و سفارش‌ها
│   └── SystemSettings.php      # مدیریت متغیرهای محیطی و ترجیحات سیستمی
├── database/                   # مستندات و فایل اسکریپت اسکیمای پایگاه داده
│   └── cbpos_db.sql            # اسکریپت ساخت جداول، کلیدهای خارجی و داده‌های پایه
├── dist/                       # فایل‌های استاتیک فرانت‌اند (CSS, JS, Fonts, Vendors)
├── libs/                       # کتابخانه‌ها و افزونه‌های کمکی شخص ثالث
├── uploads/                    # دایرکتوری ذخیره‌سازی ایزوله‌شده مدیا و تصاویر محصولات
├── index.php                   # دروازه ورودی اصلی پرتال فروشگاهی مشتریان
├── initialize.php              # مقداردهی متغیرهای محیطی، آدرس‌های پایه و تنظیمات لاگ
├── cart.php                    # کنترلر و رابط سبد خرید مشتری
├── checkout.php                # فرآیند نهایی‌سازی سفارش و انتخاب شیوه پرداخت
├── products.php                # فیلترینگ و مشاهده اقلام به تفکیک دسته/برند
└── README.md                   # مستند مهندسی نرم‌افزار و راهنمای ارزیابی

۶. مجموعه ۱۰ دیاگرام جامع مهندسی نرم‌افزار (PlantUML)

جهت تسهیل ارزیابی، بازتولید و ویرایش کلیه نمودارها، کدهای استاندارد PlantUML
تدوین شده است. می‌توانید این کدها را مستقیماً در ابزار آنلاین PlantUML Editor یا
افزونه‌های Visual Studio Code اجرا و مشاهده فرمایید.

دیاگرام ۱: نمودار موارد کاربرد جامع سامانه (Use Case Diagram)

توضیح تحلیلی: تفکیک دقیق محدوده عملکردی دو بازیگر انسانی (مشتری و مدیر) و بازیگر
سیستمی پردازشگر سفارشات همراه با روابط اشتمال (<<include>>) و تعمیم
(<<extend>>).

@startuml
skinparam actorStyle awesome
skinparam packageStyle rectangle
skinparam roundcorner 10
skinparam monochrome false
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

actor "مشتری فروشگاه (Client)" as Client #0D6EFD
actor "مدیر سامانه (Admin)" as Admin #DC3545
actor "درگاه / ماژول مالی (Payment/System)" as SysSystem #198754

rectangle "سامانه فروشگاه آنلاین آرایشی و بهداشتی (CBPOS)" {
  package "بخش تعاملات مشتری" {
    usecase "مرور کاتالوگ و فیلتر محصولات" as UC_Browse
    usecase "جستجوی کالا بر اساس برند و دسته" as UC_Search
    usecase "مدیریت سبد خرید (افزودن/کاهش)" as UC_Cart
    usecase "ثبت نهایی سفارش و تسویه" as UC_Checkout
    usecase "احراز هویت و ورود/ثبت‌نام" as UC_Auth
    usecase "پیگیری وضعیت تاریخچه سفارشات" as UC_Track
    usecase "اعتبارسنجی موجودی لحظه‌ای" as UC_CheckStock
  }

  package "بخش مدیریت و زنجیره تأمین" {
    usecase "ورود امن به پنل ادمین" as UC_AdminLogin
    usecase "مدیریت محصولات و قیمت‌گذاری" as UC_ManageProducts
    usecase "مدیریت موجودی انبار (Stock In/Out)" as UC_ManageInventory
    usecase "مدیریت و تغییر وضعیت سفارشات" as UC_ManageOrders
    usecase "پیکربندی هویت و اطلاعات سامانه" as UC_SystemConfig
    usecase "گزارش‌گیری مالی و تراکنش‌ها" as UC_Reports
  }
}

Client --> UC_Browse
Client --> UC_Search
Client --> UC_Cart
Client --> UC_Checkout
Client --> UC_Auth
Client --> UC_Track

UC_Browse ..> UC_Search : <<extend>>
UC_Checkout ..> UC_Auth : <<include>>
UC_Checkout ..> UC_CheckStock : <<include>>
UC_Checkout --> SysSystem : پردازش تراکنش مالی

Admin --> UC_AdminLogin
Admin --> UC_ManageProducts
Admin --> UC_ManageInventory
Admin --> UC_ManageOrders
Admin --> UC_SystemConfig
Admin --> UC_Reports

UC_ManageOrders ..> UC_ManageInventory : <<include>> بروزرسانی انبار
@enduml

دیاگرام ۲: نمودار کلاس‌های کلیدی و دامنه شی‌گرایی (Class Diagram)

توضیح تحلیلی: ساختار شی‌گرای پروژه شامل کلاس مدیریت پایگاه داده، نگاشت جداول به
کلاس‌های دامنه و تفکیک کنترلرها بر مبنای مسئولیت واحد (SRP).

@startuml
skinparam classAttributeIconSize 0
skinparam roundcorner 8
skinparam shadowing false
skinparam class {
    BackgroundColor #F8F9FA
    ArrowColor #2C3E50
    BorderColor #2C3E50
}

class DBConnection {
    - host: string
    - username: string
    - password: string
    - database: string
    + conn: mysqli
    + __construct()
    + __destruct()
}

class SystemSettings {
    - settings: array
    + load_settings(): void
    + set_info(field: string, value: string): bool
    + info(field: string): string
}

abstract class User {
    # id: int
    # firstname: string
    # lastname: string
    # username: string
    # date_added: datetime
    + {abstract} login(): bool
    + {abstract} logout(): void
}

class Administrator {
    - role: int
    + save_user(): int
    + delete_user(id: int): bool
}

class ClientCustomer {
    - contact: string
    - address: text
    - email: string
    - status: int
    + register(): bool
    + update_profile(): bool
    + view_order_history(): array
}

class MasterAction {
    - db: mysqli
    + save_category(): int
    + delete_category(): bool
    + save_brand(): int
    + save_product(): int
    + save_inventory(): int
    + add_to_cart(): int
    + update_cart_quantity(): bool
    + place_order(): int
    + update_order_status(): bool
}

class Product {
    + id: int
    + category_id: int
    + brand_id: int
    + name: string
    + description: string
    + status: int
    + get_variants(): array
    + get_current_stock(): int
}

class Order {
    + id: int
    + client_id: int
    + delivery_address: text
    + payment_method: string
    + total_amount: float
    + status: int
    + date_created: datetime
    + get_items(): array
}

User <|-- Administrator
User <|-- ClientCustomer
MasterAction --> DBConnection : استفاده از ارتباط
MasterAction ..> Product : مدیریت کاتالوگ
MasterAction ..> Order : پردازش چرخه سفارش
Order "1" *-- "many" Product : شامل اقلام
@enduml

دیاگرام ۳: مدل داده‌ای و موجودیت-رابطه پایگاه داده (Entity Relationship Diagram - ERD)

توضیح تحلیلی: ساختار رابطه‌ای پایگاه داده نرمال‌شده (3NF) سامانه شامل ۱۰ موجودیت
کلیدی، قیدهای یکتایی و کلیدهای اصلی/خارجی.

@startuml
skinparam linetype ortho
skinparam roundcorner 5
skinparam shadowing false

entity "system_info" as sys {
  * id : int(30) <<PK>>
  --
  meta_field : text
  meta_value : text
}

entity "users" as users {
  * id : int(50) <<PK>>
  --
  firstname : varchar(250)
  lastname : varchar(250)
  username : text
  password : text
  avatar : text
  type : tinyint(1)
  date_added : datetime
}

entity "clients" as clients {
  * id : int(30) <<PK>>
  --
  firstname : varchar(250)
  lastname : varchar(250)
  gender : varchar(20)
  contact : varchar(50)
  email : text
  password : text
  default_delivery_address : text
  status : tinyint(1)
  date_created : datetime
}

entity "categories" as categories {
  * id : int(30) <<PK>>
  --
  category : varchar(250)
  description : text
  status : tinyint(1)
  delete_flag : tinyint(1)
  date_created : datetime
}

entity "brands" as brands {
  * id : int(30) <<PK>>
  --
  name : varchar(250)
  description : text
  image_path : text
  status : tinyint(1)
  delete_flag : tinyint(1)
  date_created : datetime
}

entity "products" as products {
  * id : int(30) <<PK>>
  --
  category_id : int(30) <<FK>>
  brand_id : int(30) <<FK>>
  name : varchar(250)
  description : text
  status : tinyint(1)
  delete_flag : tinyint(1)
  date_created : datetime
}

entity "inventory" as inventory {
  * id : int(30) <<PK>>
  --
  product_id : int(30) <<FK>>
  quantity : double
  price : float
  variant : varchar(250)
  date_created : datetime
}

entity "cart" as cart {
  * id : int(30) <<PK>>
  --
  client_id : int(30) <<FK>>
  inventory_id : int(30) <<FK>>
  quantity : double
  date_created : datetime
}

entity "orders" as orders {
  * id : int(30) <<PK>>
  --
  client_id : int(30) <<FK>>
  delivery_address : text
  total_amount : double
  payment_method : varchar(100)
  status : tinyint(1)
  paid : tinyint(1)
  date_created : datetime
}

entity "order_items" as order_items {
  * id : int(30) <<PK>>
  --
  order_id : int(30) <<FK>>
  inventory_id : int(30) <<FK>>
  quantity : double
  price : double
  date_created : datetime
}

categories ||--o{ products : "طبقه‌بندی می‌کند"
brands ||--o{ products : "تولید می‌کند"
products ||--o{ inventory : "موجودی دارد"
clients ||--o{ cart : "مالک سبد است"
inventory ||--o{ cart : "انتخاب شده در"
clients ||--o{ orders : "ثبت می‌کند"
orders ||--|{ order_items : "شامل می‌شود"
inventory ||--o{ order_items : "ارجاع داده می‌شود"
@enduml

دیاگرام ۴: نمودار توالی احراز هویت و امنیت نشست‌ها (Authentication Sequence Diagram)

توضیح تحلیلی: مکانیزم احراز هویت با اعتبارسنجی دو مرحله‌ای، جلوگیری از حملات
Brute-Force، تطابق هش رمز عبور و ممانعت از Session Fixation.

@startuml
autonumber
skinparam roundcorner 5
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

actor "کاربر / مشتری" as User #0D6EFD
boundary "فرم ورود (Login UI)" as UI
control "کنترلر احراز هویت (Login.php)" as AuthCtrl
entity "مدل داده کاربران (Database)" as DB
control "مدیر نشست (Session Engine)" as SessionMgr

User -> UI: ورود نام کاربری و رمز عبور
activate UI
UI -> AuthCtrl: ارسال درخواست POST (Username, Password, CSRF Token)
activate AuthCtrl

AuthCtrl -> AuthCtrl: اعتبارسنجی توکن ضد جعل (Verify CSRF)
alt توکن نامعتبر است
    AuthCtrl --> UI: خطای عدم انطباق توکن امنیتی (403 Forbidden)
    UI --> User: نمایش هشدار دستکاری نشست
else توکن معتبر است
    AuthCtrl -> DB: پرس‌وجوی کاربر با Prepared Statement
    activate DB
    DB --> AuthCtrl: بازگردانی رکورد کاربر (شامل Hash رمز)
    deactivate DB

    AuthCtrl -> AuthCtrl: ارزیابی هش پسورد (password_verify)
    alt رمز عبور نادرست است
        AuthCtrl --> UI: پیام نام کاربری یا کلمه عبور اشتباه است
        UI --> User: نمایش پیغام خطا
    else اطلاعات ورود معتبر است
        AuthCtrl -> SessionMgr: بازتولید شناسه نشست (session_regenerate_id)
        activate SessionMgr
        SessionMgr --> AuthCtrl: شناسه نشست جدید و ایمن
        deactivate SessionMgr

        AuthCtrl -> SessionMgr: ثبت اطلاعات هویتی و Role در $_SESSION
        AuthCtrl --> UI: پاسخ موفقیت‌آمیز (HTTP 200 / Status: Success)
        deactivate AuthCtrl
        UI --> User: هدایت به پیشخوان سامانه (Redirect to Portal)
        deactivate UI
    end
end
@enduml

دیاگرام ۵: نمودار توالی ثبت سفارش، قفل‌گذاری موجودی و پرداخت (Checkout Sequence Diagram)

توضیح تحلیلی: تضمین یکپارچگی داده‌ای (ACID Transaction) در زمان کسر موجودی
فیزیکی و ثبت اقلام فاکتور.

@startuml
autonumber
skinparam roundcorner 5
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

actor "مشتری (Client)" as Client #0D6EFD
boundary "صفحه تسویه (Checkout Page)" as View
control "کنترلر سفارشات (Master.php)" as Controller
database "پایگاه داده (MySQL / MariaDB)" as DB
boundary "سامانه پرداخت / درگاه" as Gateway

Client -> View: تأیید نشانی گیرنده و شیوه پرداخت
activate View
View -> Controller: ارسال متد place_order(order_data, cart_items)
activate Controller

Controller -> DB: آغاز تراکنش پایگاه داده (START TRANSACTION)
activate DB

loop به ازای تک تک اقلام در سبد خرید
    Controller -> DB: واکشی موجودی جاری انبار با قفل ردیف (FOR UPDATE)
    DB --> Controller: موجودی فعلی (Stock Qty)
    alt موجودی ناکافی است
        Controller -> DB: ابطال تراکنش (ROLLBACK)
        Controller --> View: خطای اتمام موجودی محصول انتخاب شده
        View --> Client: نمایش هشدار کسری موجودی کالا در انبار
    end
end

Controller -> DB: درج اطلاعات کلان سفارش در جدول `orders`
DB --> Controller: دریافت شناسه سفارش (order_id)

loop درج اقلام در جدول `order_items` و کسر از `inventory`
    Controller -> DB: ثبت ردیف قلم کالا در `order_items`
    Controller -> DB: کسر موجودی از جدول `inventory` (تراز منفی انبار)
end

Controller -> DB: پاک‌سازی ردیف‌های خریداری‌شده از جدول `cart`
Controller -> DB: تأیید نهایی تراکنش (COMMIT TRANSACTION)
deactivate DB

Controller --> View: تأیید ثبت سفارش و صدور شماره فاکتور
deactivate Controller
View --> Client: نمایش رسید نهایی خرید با موفقیت
deactivate View
@enduml

دیاگرام ۶: نمودار فعالیت گردش کار خرید از سبد تا تسویه (Checkout Activity Diagram)

توضیح تحلیلی: دیاگرام فعالیت به تفکیک خطوط شناوری (Swimlanes) برای تفکیک وظایف
مشتری، سرور پردازشگر و انبار داده.

@startuml
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

|مشتری (Client)|
start
:مشاهده صفحه جزئیات کالا و انتخاب Variant;
:افزودن محصول به سبد خرید (Add to Cart);

|سرور وب / مفسر PHP|
:بررسی وجود نشست معتبر کاربر;
if (کاربر لاگین کرده است؟) then (بله)
  :افزودن رکورد به جدول سبد خرید;
else (خیر)
  :ذخیره سازی در نشست موقت یا هدایت به ورود;
endif

|مشتری (Client)|
:بازدید از سبد خرید و کلیک بر روی تسویه حساب;
:ورود نشانی تحویل سفارش و انتخاب درگاه پرداخت;
:کلیک بر روی دکمه نهایی‌سازی سفارش;

|سرور وب / مفسر PHP|
:آغاز تراکنش امن اتمیک (DB Transaction);
:ارزیابی سطح موجودی اقلام برگزیده;

if (موجودی اقلام در انبار کافی است؟) then (بله)
  :ثبت سفارش در جدول orders;
  :ایجاد رکوردهای اقلام فاکتور (order_items);
  :کسر اتوماتیک موجودی از inventory;
  :حذف اقلام سفارش داده شده از سبد خرید;
  :تأیید تراکنش (Commit);
  |مشتری (Client)|
  :نمایش رسید، شناسه پیگیری و کد وضعیت سفارش;
  stop
else (خیر)
  |سرور وب / مفسر PHP|
  :ابطال کامل تراکنش (Rollback);
  |مشتری (Client)|
  :نمایش خطا و درخواست ویرایش سبد خرید;
  stop
endif
@enduml

دیاگرام ۷: نمودار فعالیت مدیریت زنجیره تأمین و انبارداری (Inventory Activity Diagram)

توضیح تحلیلی: گردش کار انبارداری در بخش ادمین، ثبت تنوع‌های کالا و کنترل موجودی
بحرانی کالا.

@startuml
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

start
:ورود مدیر به منوی مدیریت انبار (Inventory Panel);
:مشاهده فهرست کالاها همراه با تعداد کل و موجودی تنوع‌ها;

if (عملیات مورد نظر مدیر چیست؟) then (شارژ مجدد کالا - Stock In)
  :انتخاب محصول و مشخص کردن تنوع (Variant);
  :تعیین تعداد ورودی فیزیکی جدید و بهای خرید/فروش;
  :اعتبارسنجی مقادیر مثبت عددی;
  :درج سابقه شارژ انبار در جدول دیتابیس;
  :افزایش شاخص موجودی کل سیستم;
else (تعدیل یا ابطال موجودی - Stock Out / Damaged)
  :ثبت دلیل تعدیل (خرابی کالا، انقضا، مغایرت انبارگردانی);
  :اعمال تراکنش کسر تعداد از جدول inventory;
endif

:بررسی حد آستانه حداقل موجودی (Safety Stock Threshold);
if (موجودی کمتر از حد آستانه است؟) then (بله)
  :تغییر وضعیت بصری به هشدار قرمز (Low Stock Warning);
else (خیر)
  :تأیید وضعیت نرمال عرضه در کاتالوگ فروشگاه;
endif

:بروزرسانی شاخص‌های داشبورد مدیریتی;
stop
@enduml

دیاگرام ۸: نمودار ماشین حالت چرخه حیات سفارش (Order Lifecycle State Machine)

توضیح تحلیلی: نمایش حالت‌های معتبر یک سفارش در چرخه تجاری سامانه همراه با
اکشن‌ها و شروط گذار (Guards).

@startuml
skinparam state {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
  ArrowColor #2C3E50
  StartColor #198754
  EndColor #DC3545
}
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

[*] --> ثبت_شده_در_انتظار : مشتری سفارش را تکمیل می‌کند

state ثبت_شده_در_انتظار : وضعیت 0 (Pending)\nامکان لغو توسط کاربر وجود دارد
state تایید_شده : وضعیت 1 (Confirmed)\nسفارش به واحد انبار ارجاع شد
state بسته‌بندی_شده : وضعیت 2 (Packed)\nمحصول آماده تحویل به پست/پیک است
state ارسال_شده : وضعیت 3 (On_Delivery)\nکد رهگیری مرسوله پستی صادر شد
state تحویل_گردید : وضعیت 4 (Delivered)\nمشتری دریافت سفارش را تأیید کرد
state لغو_شده : وضعیت 5 (Cancelled)\nکالا به موجودی انبار بازگردانده می‌شود

ثبت_شده_در_انتظار --> تایید_شده : بررسی و تأیید اپراتور فروش
ثبت_شده_در_انتظار --> لغو_شده : انصراف مشتری یا عدم تایید مالی

تایید_شده --> بسته‌بندی_شده : تخصیص بارکد و بسته‌بندی در انبار
تایید_شده --> لغو_شده : عدم امکان تأمین فیزیکی

بسته‌بندی_شده --> ارسال_شده : تحویل مرسوله به حامل پستی
ارسال_شده --> تحویل_گردید : وصول تأییدیه دریافت توسط خریدار

لغو_شده --> [*] : برگشت کالاها به انبار (Stock Restored)
تحویل_گردید --> [*] : بسته شدن چرخه مالی فاکتور
@enduml

دیاگرام ۹: نمودار قطعات و معماری لایه‌ای سامانه (Component Diagram)

توضیح تحلیلی: جداسازی لایه‌های Presentation، Business Logic و Data Access بر
پایه تفکیک مسئولیت‌ها (SoC).

@startuml
skinparam componentStyle uml2
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

package "لایه رابط کاربری (Presentation Layer)" {
  [قالب سمت مشتری - Storefront UI] as ClientUI
  [پیشخوان مدیریت - AdminLTE Dashboard] as AdminUI
  [ماژول ارتباط ناهمگام - AJAX Engine] as AjaxEngine
}

package "لایه منطق تجاری و کنترلرها (Business Logic Layer)" {
  [کنترلر احراز هویت - Login Controller] as AuthComp
  [موتور مدیریت کاتالوگ - Catalog Master] as CatalogComp
  [کنترلر سبد و تسویه - Order Engine] as OrderComp
  [مدیر تنظیمات - System Config] as ConfigComp
}

package "لایه یکپارچگی داده و سرویس‌ها (Data Access Layer)" {
  [پل ارتباطی دیتابیس - DBConnection Wrapper] as DBLayer
  [ماژول پردازش تصاویر - GD Image Handler] as ImgHandler
  interface "MySQL Native Driver (mysqli/PDO)" as DriverInterface
}

database "لایه ماندگاری داده (Persistence Layer)" {
  folder "سیستم فایل محلی (Local File Storage)" {
    [دایرکتوری بارگذاری رسانه - /uploads/] as UploadStore
  }
  database "پایگاه داده رابطه‌ای (MariaDB / MySQL)" as RDBMS {
    [جداول سیستم - cbpos_db] as Tables
  }
}

ClientUI ..> AjaxEngine : ارسال وقایع کاربری
AdminUI ..> AjaxEngine : دستورات پیشخوان ادمین

AjaxEngine ..> AuthComp : متدهای لاگین و نشست
AjaxEngine ..> CatalogComp : درخواست کالاها
AjaxEngine ..> OrderComp : ثبت سفارش

CatalogComp ..> ImgHandler : بهینه‌سازی و برش تصویر
ImgHandler ..> UploadStore : ذخیره‌سازی فایل‌ها روی سرور

AuthComp ..> DBLayer : اعتبارسنجی کاربر
CatalogComp ..> DBLayer : خواندن و نوشتن کالاها
OrderComp ..> DBLayer : تراکنش سفارش و انبار
ConfigComp ..> DBLayer : بازیابی پیکربندی

DBLayer ..> DriverInterface : برقراری ارتباط روی سوکت
DriverInterface ..> Tables : اجرای کوئری‌های SQL
@enduml

دیاگرام ۱۰: نمودار استقرار بستر سخت‌افزاری و نرم‌افزاری در XAMPP (Deployment Diagram)

توضیح تحلیلی: توپولوژی استقرار سیستم بر بستر وب‌سرور آپاچی، سوکت‌های شبکه و
پورت‌های محلی در محیط دانشگاه و آزمایشگاه.

@startuml
skinparam node {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
}
skinparam artifactBackgroundColor #FFFFFF
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

node "ایستگاه کاری کاربر نهایی / کلاینت (Client PC / Mobile)" as ClientStation {
  artifact "مرورگر مدرن اینترنتی\n(Google Chrome / FireFox)" as WebBrowser
}

node "سرور محلی توسعه و میزبانی (Localhost Server - XAMPP Stack)" as XamppNode {
  node "وب‌سرور آپاچی (Apache Web Server - Port 80 / 443)" as ApacheInstance {
    artifact "ماژول بازنویسی آدرس\n(mod_rewrite)" as ModRewrite
    artifact "کنترل امنیتی نشست‌ها\n(Session Security Module)" as SecModule
  }

  node "محیط مفسر پی‌اچ‌پی (Zend Engine PHP 8.x Runtime)" as PHPRuntime {
    artifact "ماژول پردازش تصویر (GD Library)" as GDLib
    artifact "راه‌انداز دیتابیس (MySQLi / PDO Driver)" as MysqlDriver
    artifact "کدهای برنامه شی‌گرای فروشگاه\n(CBPOS Application Codebase)" as AppCode
  }

  node "سرور پایگاه داده (MariaDB / MySQL Engine - Port 3306)" as DBEngine {
    database "پایگاه داده تجاری آرایشی\n(cbpos_db Schema)" as DBCBPOS
  }

  folder "فضای ذخیره‌سازی هارد دیسک سرور (File System)" {
    file "دایرکتوری فایل‌های برنامه\n(C:/xampp/htdocs/cbpos/)" as AppDir
    file "مخزن تصاویر بارگذاری شده\n(C:/xampp/htdocs/cbpos/uploads/)" as UploadsDir
  }
}

WebBrowser -- ApacheInstance : پروتکل امن HTTP/HTTPS [Port 80]
ApacheInstance -- PHPRuntime : پردازشگر زبان پی‌اچ‌پی (mod_php)
AppCode -- GDLib : ویرایش و فشرده‌سازی عکس
AppCode -- MysqlDriver : ایجاد ارتباط با دیتابیس
MysqlDriver -- DBEngine : پروتکل سوکت TCP/IP [Port 3306]
DBEngine -- DBCBPOS : عملیات I/O دیتابیس
PHPRuntime -- AppDir : خواندن کدهای منبع پروژه
PHPRuntime -- UploadsDir : خواندن و نوشتن مستقیم تصاویر
@enduml

۷. ارزیابی امنیتی، آسیب‌پذیری‌ها و ایمن‌سازی علمی (OWASP Top 10)

در فاز بازمهندسی پروژه کارشناسی، تمهیدات سخت‌گیرانه‌ای مطابق با متدولوژی تست
نفوذ و چک‌لیست بنیاد OWASP به اجرا درآمد:

۱.۷. دفاع در برابر تزریق کد (SQL Injection Mitigation)

در اسکریپت اصلی برگرفته از وب، مقادیر مستقیماً به دستورات الحاق می‌شدند:

// رویکرد ناامن منسوخ در سورس کدهای قدیمی (Insecure)
$query = "SELECT * FROM `users` WHERE username = '" . $_POST['username'] . "'";

اصلاح مهندسی پیاده‌سازی‌شده: تمامی ورودی‌ها از مجرای Prepared Statements عبور
داده شدند:

// رویکرد مهندسی و ایمن در پروژه حاضر (Secure Parameterized Query)
$stmt = $this->conn->prepare("SELECT id, password, type FROM `users` WHERE username = ?");
$stmt->bind_param("s", $sanitized_username);
$stmt->execute();
$result = $stmt->get_result();

۲.۷. الگوریتم هش رمزنگاری مدرن در برابر حملات معکوس

استفاده از الگوریتم md5() در نسخه پایه کاملاً منسوخ و مستعد شکست است. این
الگوریتم با استاندارد بین‌المللی BCRYPT و هزینه کاربری مناسب (Cost Factor = 10)
جایگزین شد:

// ذخیره‌سازی رمز عبور:
$hashed_password = password_hash($raw_password, PASSWORD_BCRYPT);

// اعتبارسنجی ورود:
if (password_verify($input_password, $hashed_password)) {
    // هویت کاربر تایید شد
}

۳.۷. حفاظت از نشست‌ها در برابر حملات Session Fixation و Hijacking

1.  فراخوانی تابع session_regenerate_id(true) بلافاصله پس از ارزیابی موفق لاگین،
    مانع از تصاحب شناسه نشست توسط مهاجم می‌شود.
2.  اعمال ویژگی‌های HttpOnly و SameSite=Strict برای کوکی‌های نشست جهت مقابله با
    سرقت از طریق کدهای XSS.

۴.۷. مقابله با بارگذاری فایل مخرب (Secure File Uploads)

در ماژول بارگذاری تصاویر محصولات آرایشی، تمهیدات زیر لحاظ شد:

  - بررسی نوع واقعی فایل (MIME-Type) از طریق توابع سروری، نه صرفاً اکستنشن ظاهری
    فایل.
  - بازتولید تصادفی نام فایل با توابع هش یکتا (uniqid() . md5(...)) جهت جلوگیری
    از حدس زدن مسیر یا اجرای شل‌های مخرب.
  - مسدودسازی اجرای هرگونه فایل PHP در پوشه uploads/ از طریق کانفیگ سرور.

۸. گالری تصاویر محیط برنامه (رابط کاربری کاربر و پنل مدیریت)

راهنمای ارزیابی: لطفاً پیش از تحویل یا پرینت گزارش، تصاویر اسکرین‌شات تهیه‌شده
از بستر http://localhost/cbpos را در مسیر docs/screenshots/ قرار داده و نام
فایل‌ها را با کدهای زیر تطبیق دهید.

بخش اول: محیط کاربری و فروشگاه آنلاین (Storefront / Client-Side)

| نمایه کاتالوگ فروشگاه و دسته‌بندی اقلام                         | نمایه سبد خرید و محاسبه هزینه                       |
| :-------------------------------------------------------------: | :-------------------------------------------------: |
| ![کاتالوگ محصولات فروشگاه](docs/screenshots/client-catalog.png) | ![سبد خرید مشتری](docs/screenshots/client-cart.png) |
| *مرور کاتالوگ، تفکیک برندهای آرایشی و مشاهده وضعیت موجودی*      | *بررسی دینامیک اقلام برگزیده، مبالغ کل و تخفیفات*   |

| پیشخوان تکمیل سفارش و نشانی پستی                         | نمایه سوابق سفارش‌های مشتری                            |
| :------------------------------------------------------: | :----------------------------------------------------: |
| ![صفحه تسویه حساب](docs/screenshots/client-checkout.png) | ![تاریخچه سفارشات](docs/screenshots/client-orders.png) |
| *تکمیل آدرس مقصد، ثبت کد پیگیری و ارجاع مالی*            | *مشاهده گردش کار مرحله‌ای کالا و وضعیت ترخیص*          |

بخش دوم: پیشخوان ادمین و پنل مدیریت متمرکز (Admin Dashboard)

| داشبورد آماری و شاخص‌های تحلیلی مدیر                         | مدیریت کاتالوگ و ثبت محصولات آرایشی                            |
| :----------------------------------------------------------: | :------------------------------------------------------------: |
| ![داشبورد آماری ادمین](docs/screenshots/admin-dashboard.png) | ![مدیریت محصولات ادمین](docs/screenshots/admin-products.png)   |
| *نمایش مجموع فروش، اقلام ناموجود و شاخص‌های مالی*            | *تعریف اقلام، بارگذاری تصاویر با ابعاد استاندارد و مشخصات فنی* |

| ماژول مدیریت انبارداری (Stock-In)                       | ماژول تغییر وضعیت و رسیدگی به سفارش‌ها                    |
| :-----------------------------------------------------: | :-------------------------------------------------------: |
| ![مدیریت انبار](docs/screenshots/admin-inventory.png)   | ![کنترل وضعیت سفارشات](docs/screenshots/admin-orders.png) |
| *ثبت ورودی تنوع‌های کالایی، کنترل کسری و آستانه موجودی* | *بررسی، تایید فاکتورها، ارسال پستی و پیگیری لغویات*       |

۹. نتیجه‌گیری و چشم‌انداز توسعه آتی

سامانه بازمهندسی‌شده CBPOS در قالب پروژه مهندسی نرم‌افزار مقطع کارشناسی
ناپیوسته، توانست بستری پایدار، ایزوله و بهینه‌سازی‌شده برای تراکنش‌های فروش
آنلاین اقلام آرایشی فراهم کند. بازسازی عمیق کدهای پایه از یک نمونه آزمایشی به
سیستمی مقاوم با رعایت اصول پایه‌ای طراحی شی‌گرا، نشان‌دهنده تحقق اهداف سرفصل‌های
مهندسی وب در دانشگاه شهید چمران رشت است.

چشم‌انداز توسعه آتی (Future Work):

1.  معماری مبتنی بر سرویس‌گرایی (RESTful API): جداسازی کامل فرانت‌اند از بک‌اند
    به منظور توسعه نرم‌افزار اندروید/iOS بومی با Flutter یا React Native.
2.  اتصال به درگاه‌های بانکی شبکه شاپرک: تجهیز ماژول مالی به درگاه‌های واسط و
    مستقیم شاپرکی جهت انجام تراکنش‌های ریالی در لحظه.
3.  موتور پیشنهاددهنده هوشمند (Recommendation Engine): ارزیابی سلایق پوستی مشتری
    و پیشنهاد محصولات مکمل آرایشی بر پایه الگوریتم‌های پالایش مشارکتی
    (Collaborative Filtering).

پایان مستندات فنی و گزارش ارزیابی نهایی
دانشکده فنی و حرفه‌ای شهید چمران رشت - پاییز ۱۴۰۵
تهیه‌کننده: امیرعلی صالح پور | استاد راهنما: جناب استاد عباس حیدری پاشاکی
