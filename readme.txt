<div align="center">

# سامانه مدیریت و فروشگاه برخط محصولات آرایشی و بهداشتی
## (Cosmetics and Beauty Product Online Store - CBPOS)

**پروژه پایانی دوره کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر - گرایش نرم‌افزار**  
**دانشکده فنی و حرفه‌ای شهید چمران رشت (دوره روزانه)**  

---

[![PHP Version](https://img.shields.io/badge/PHP-8.1%20%7C%208.2-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![Database](https://img.shields.io/badge/Database-MySQL%20%7C%20MariaDB-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Web Server](https://img.shields.io/badge/Server-Apache%20(XAMPP)-F38020?style=for-the-badge&logo=apache&logoColor=white)](https://www.apachefriends.org/)
[![UI Framework](https://img.shields.io/badge/UI-Bootstrap%20%7C%20AdminLTE-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white)](https://adminlte.io/)
[![Modeling](https://img.shields.io/badge/UML%20Design-PlantUML-orange?style=for-the-badge&logo=diagramsdotnet&logoColor=white)](https://editor.plantuml.com/)
[![License](https://img.shields.io/badge/Status-Evaluation%20Ready-success?style=for-the-badge)](#)

</div>

---

## شناسنامه علمی و اطلاعات پروژه

| فیلد ارزیابی | شرح مشخصات |
| :--- | :--- |
| **عنوان پروژه** | سامانه مدیریت و فروشگاه برخط محصولات آرایشی و بهداشتی (CBPOS) |
| **دانشجو** | امیرعلی صالح پور |
| **استاد راهنما** | جناب استاد عباس حیدری پاشاکی |
| **مقطع و رشته تحصیلی** | کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر - نرم‌افزار (روزانه) |
| **مرکز آموزشی** | دانشکده فنی و حرفه‌ای شهید چمران رشت |
| **تاریخ ارزیابی و دفاع** | آبان‌ماه ۱۴۰۵ (1405/08) |
| **مخزن توسعه در گیت‌هاب** | [https://github.com/Silent-Galaxy/cbpos](https://github.com/Silent-Galaxy/cbpos) |
| **کد منبع و هسته اولیه** | [SourceCodester CBPOS](https://www.sourcecodester.com/php/15181/cosmetics-and-beauty-product-online-store-phpoop-free-source-code.html) |
| **ویرایشگر آنلاین دیاگرام‌ها** | [PlantUML Online Editor](https://editor.plantuml.com/) |
| **آدرس پورتال کاربری (مشتری)** | `http://localhost/cbpos/` |
| **آدرس پنل مدیریت (ادمین)** | `http://localhost/cbpos/admin/` |

---

## فهرست سرفصل‌ها
- [۱. چکیده و تبیین مسئله](#۱-چکیده-و-تبیین-مسئله)
- [۲. تحلیل نقادانه و بازمهندسی نرم‌افزار (Evidence-Based Re-engineering)](#۲-تحلیل-نقادانه-و-بازمهندسی-نرم‌افزار-evidence-based-re-engineering)
- [۳. پشته فناوری و پیش‌نیازها](#۳-پشته-فناوری-و-پیش‌نیازها)
- [۴. راهنمای گام‌به‌گام نصب و راه‌اندازی بر بستر XAMPP](#۴-راهنمای-گام‌به‌گام-نصب-و-راه‌اندازی-بر-بستر-xampp)
- [۵. معماری ساختار فایل‌ها و دایرکتوری پروژه](#۵-معماری-ساختار-فایل‌ها-و-دایرکتوری-پروژه)
- [۶. مجموعه ۱۰ دیاگرام استاندارد مهندسی نرم‌افزار (PlantUML)](#۶-مجموعه-۱۰-دیاگرام-استاندارد-مهندسی-نرم‌افزار-plantuml)
- [۷. ماتریس تحلیل امنیتی بر پایه استاندارد OWASP Top 10](#۷-ماتریس-تحلیل-امنیتی-بر-پایه-استاندارد-owasp-top-10)
- [۸. گالری تصاویر محیط کاربری و پیشخوان مدیریت](#۸-گالری-تصاویر-محیط-کاربری-و-پیشخوان-مدیریت)
- [۹. تحلیل مهندسی پایگاه داده و نرمال‌سازی](#۹-تحلیل-مهندسی-پایگاه-داده-و-نرمال‌سازی)
- [۱۰. ارزیابی نهایی و چشم‌انداز توسعه آتی](#۱۰-ارزیابی-نهایی-و-چشم‌انداز-توسعه-آتی)

---

## ۱. چکیده و تبیین مسئله

گسترش روزافزون خرده‌فروشی الکترونیک در حوزه محصولات آرایشی، مراقبت پوستی و زیبایی نیازمند سامانه‌های پایداری است که چالش‌های تنوع محصول (رنگ، حجم، اسانس)، ردیابی دقیق موجودی انبار، انقضای اقلام و حفظ امنیت داده‌های کاربران را پوشش دهند.

پروژه **CBPOS** در قالب پروژه پایانی مقطع کارشناسی ناپیوسته، با رویکرد **بازمهندسی نرم‌افزار (Software Re-engineering)** توسعه یافته است. در این فرآیند، اسکلت اولیه یک سورس‌کد پایه از پلتفرم *SourceCodester* مورد واکاوی نقادانه قرار گرفته، آسیب‌پذیری‌های حاد امنیتی و ضعف‌های معماری آن شناسایی شده و سپس با اتکا به متدولوژی‌های مدرن مهندسی نرم‌افزار (اصول شی‌گرایی OOP، لایه‌بندی داده، تراکنش‌های اتمیک ACID و ایمن‌سازی نشست‌ها) بازسازی گردیده است.

### اهداف بنیادین سیستم:
1. **پورتال مشتریان (Storefront):** ارائه کاتالوگ پویا بر پایه برند و دسته‌بندی، سبد خرید ناهمگام (AJAX)، ثبت سفارش و رهگیری فرآیند آماده‌سازی.
2. **پیشخوان کنترل مدیریت (Admin Dashboard):** مدیریت چندسطحی کالا، مدیریت انبارداری (Stock-In / Stock-Out)، پردازش وضعیت سفارش‌ها در ۵ فاز و گزارش‌گیری مالی.

---

## ۲. تحلیل نقادانه و بازمهندسی نرم‌افزار (Evidence-Based Re-engineering)

در فرآیند ارزیابی پروژه‌های کارشناسی، توانایی تحلیل علمی کدهای موجود در صنعت و ارتقای شواهد‌محور آن‌ها شاخص کلیدی بلوغ مهندسی است:

[هسته اولیه: SourceCodester] ├── 1. آسیب‌پذیری‌های بحرانی (SQL Injection، رندر
XSS، عدم وجود توکن CSRF) ├── 2. استفاده از الگوریتم منسوخ MD5 بدون Salt در جدول
کاربران ├── 3. ریسک همزمانی (Race Condition) و کسری منفی موجودی در انبار └── 4.
جفت‌شدگی شدید (Tight Coupling) لایه‌های Presentation و Data │ ▼ [فرآیند بازطراحی
و Refactoring بر پایه شواهد علمی] [نسخه نهایی: Silent-Galaxy/cbpos] ├── 1.
امن‌سازی کامل لایه داده با Prepared Statements و PDO/MySQLi Driver ├── 2.
به‌کارگیری الگوریتم BCRYPT (Cost=10) با توابع password_hash() ├── 3. ایجاد
تراکنش‌های اتمیک در ثبت سفارش و قفل‌گذاری سطری موجودی └── 4. انطباق کامل با مفسر
مدرن PHP 8.x و ساختاربندی شی‌گرای کلاس‌ها


### مقایسه مشخصه‌های فنی نسخه پایه و نسخه بازمهندسی‌شده:

| شاخص ارزیابی | نسخه اولیه (Legacy Code) | نسخه بازمهندسی‌شده (Silent-Galaxy) | مرجع و شواهد علمی |
| :--- | :--- | :--- | :--- |
| **امنیت دیتابیس** | الحاق مستقیم رشته‌های کاربر به SQL | پیاده‌سازی کامل Prepared Statements | راهنمای OWASP علیه SQLi |
| **رمزنگاری پسورد** | تابع منسوخ `md5($_POST['pwd'])` | استفاده از `PASSWORD_BCRYPT` | استاندارد NIST SP 800-63B |
| **مدیریت همزمانی** | خواندن و نوشتن غیراصل در انبار | تراکنش‌های ACID و قفل `FOR UPDATE` | اصول مهندسی تراکنش دیتابیس |
| **اعتبارسنجی رسانه** | بررسی پسوند سطحی فایل | ارزیابی هدر باینری و اعتبارسنجی MIME | راهنمای ایمن‌سازی سرور وب |
| **امنیت نشست‌ها** | استفاده از شناسه نشست استاتیک | فراخوانی `session_regenerate_id(true)` | جلوگیری از Session Fixation |

---

## ۳. پشته فناوری و پیش‌نیازها

* **زبان هسته و معماری:** PHP 8.1 / 8.2 بر پایه اصول شی‌گرایی (OOP)
* **پایگاه داده رابطه‌ای:** MariaDB 10.4+ / MySQL 8.0
* **محیط توسعه و وب‌سرور محلی:** پشته بومی XAMPP (Apache HTTP Server 2.4)
* **واسط کاربری و فریم‌ورک‌ها:** HTML5, CSS3, JavaScript (ES6+), jQuery, Bootstrap 4.6, AdminLTE v3
* **اکستنشن‌های الزامی PHP:** 
  * `php_pdo_mysql` و `php_mysqli` (ارتباط با بانک اطلاعاتی)
  * `php_gd` (پردازش تصاویر، تغییر ابعاد و ساخت بندانگشتی کالا)
  * `php_mbstring` (پردازش رشته‌های چندبایتی و کاراکترهای فارسی)

---

## ۴. راهنمای گام‌به‌گام نصب و راه‌اندازی بر بستر XAMPP

برای اجرای بی‌نقص پروژه در محیط آزمایشگاهی یا سیستم ارزیابی، مراحل زیر را به ترتیب طی نمایید:

### گام اول: کلون پروژه در دایرکتوری ریشه آپاچی
فایل‌های مخزن را مستقیماً در پوشه `htdocs` نرم‌افزار XAMPP مستقر سازید:
```bash
# رفتن به دایرکتوری htdocs ویندوز
cd C:\xampp\htdocs

# کلون مخزن پروژه
git clone https://github.com/Silent-Galaxy/cbpos.git

[!IMPORTANT] اطمینان حاصل کنید نام پوشه پروژه در htdocs دقیقاً cbpos باشد (مسیر
نهایی: C:\xampp\htdocs\cbpos).

گام دوم: فعال‌سازی ماژول گرافیکی GD در مفسر PHP

1.  فایل C:\xampp\php\php.ini را با یک ادیتور متنی باز کنید.
2.  عبارت extension=gd را جستجو نمایید.
3.  در صورت وجود سمی‌کالن (;) در ابتدای خط، آن را بردارید:
    extension=gd
4.  فایل را ذخیره نموده و سرویس آپاچی را از طریق XAMPP Control Panel یک بار
    Restart کنید.

گام سوم: پیکربندی و درون‌ریزی پایگاه داده

1.  از کنترل پنل XAMPP، سرویس‌های Apache و MySQL را در حالت Start قرار دهید.
2.  به پنل مدیریت دیتابیس در آدرس زیر وارد شوید:
    http://localhost/phpmyadmin/
3.  یک پایگاه داده جدید به نام دقیق cbpos_db با یونیکد utf8mb4_general_ci ایجاد
    کنید.
4.  وارد پایگاه داده cbpos_db شده، به تب Import بروید و فایل اسکیمای پروژه را
    بارگذاری نمایید:
    C:\xampp\htdocs\cbpos\database\cbpos_db.sql

گام چهارم: اعتبارسنجی اتصال پایگاه داده

تنظیمات اتصال در کلاس‌های مربوطه به طور پیش‌فرض برای پشته بومی XAMPP تنظیم
گردیده است:

define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "cbpos_db");

گام پنجم: ورود به سیستم و تست کارکردی

  - آدرس فروشگاه (ساید مشتری): http://localhost/cbpos/
  - آدرس پیشخوان ادمین (ساید مدیریت): http://localhost/cbpos/admin/

| نقش کاربری                 | نام کاربری                       | کلمه عبور پیش‌فرض | دسترسی‌ها                                    |
| :------------------------- | :------------------------------- | :---------------- | :------------------------------------------- |
| **مدیر کل سیستم (Admin)**  | `admin`                          | `admin123`        | کنترل کامل سفارشات، انبار، کاتالوگ و متادیتا |
| **مشتری فروشگاه (Client)** | ثبت‌نام اختیاری از منوی Register | تعیین توسط کاربر  | خرید آنلاین، ثبت سبد، مشاهده سابقه فاکتورها  |

۵. معماری ساختار فایل‌ها و دایرکتوری پروژه

cbpos/
├── admin/                      # کنترلرها و لایه نمایش سمت مدیریت سیستم
│   ├── home.php                # داشبورد تحلیلی و شاخص‌های آماری
│   ├── inc/                    # ماژول‌های سراسری فرانت‌اند ادمین (Header, Nav, Footer)
│   ├── inventory/              # مدیریت انبار فیزیکی، ثبت ورودی و اصلاح موجودی
│   ├── orders/                 # چرخه حیات سفارش‌ها، فاکتورها و وضعیت مرسوله‌ها
│   ├── product/                # تعریف کاتالوگ، برند، ویژگی‌ها و بارگذاری عکس
│   ├── system_info/            # تنظیمات پویای هویت بصری، متادیتا و اطلاعات تماس
│   └── index.php               # کنترلر اصلی ورود و دیسپچر پنل ادمین
├── classes/                    # هسته منطق شی‌گرایی و پردازش داده‌ها (Business Layer)
│   ├── DBConnection.php        # کپسوله‌سازی اتصال پایگاه داده و مدیریت نشست‌ها
│   ├── Login.php               # ماژول احراز هویت، اعتبارسنجی گذرواژه و توکن‌ها
│   ├── Master.php              # کنترلر متمرکز فرآیندهای CRUD اقلام و تراکنش‌ها
│   └── SystemSettings.php      # مدیریت متغیرهای سراسری سیستم
├── database/                   # اسناد پایگاه داده
│   └── cbpos_db.sql            # اسکریپت ساخت جداول، روابط و داده‌های پایه
├── dist/                       # دارایی‌های استاتیک فرانت‌اند (CSS, JS, Fonts, Vendors)
├── uploads/                    # مخزن امن ذخیره‌سازی تصاویر محصولات و برندها
├── cart.php                    # کنترلر و ماژول سبد خرید ناهمگام مشتری
├── checkout.php                # فرآیند نهایی‌سازی سفارش، محاسبه هزینه و صدور فاکتور
├── initialize.php              # تنظیمات بوت‌استرپینگ، روتینگ و لود ثابت‌های محیطی
├── index.php                   # نقطه ورود و صفحه اصلی پورتال فروشگاه
└── README.md                   # مستندات جامع مهندسی نرم‌افزار

۶. مجموعه ۱۰ دیاگرام استاندارد مهندسی نرم‌افزار (PlantUML)

کلیه دیاگرام‌های ذیل مطابق با آخرین استاندارد مدل‌سازی UML طراحی شده‌اند. کدهای
هر دیاگرام مستقلاً قابل کپی و اجرا در PlantUML Online Editor است.

دیاگرام ۱: نمودار موارد کاربرد جامع سامانه (Use Case Diagram)

کاربرد: تفکیک وظایف و انتزاع موارد کاربرد دو بازیگر اصلی (مشتری و مدیر) همراه با
روابط <<include>> و <<extend>>.

@startuml
skinparam actorStyle awesome
skinparam packageStyle rectangle
skinparam roundcorner 10
skinparam monochrome false
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

actor "مشتری فروشگاه (Client)" as Client #0D6EFD
actor "مدیر سامانه (Admin)" as Admin #DC3545
actor "درگاه پرداخت / مالی (Payment Gateway)" as Gateway #198754

rectangle "سامانه فروشگاه آنلاین محصولات آرایشی و بهداشتی (CBPOS)" {
  package "پورتال مشتریان" {
    usecase "مرور کاتالوگ و دسته‌بندی‌ها" as UC_Browse
    usecase "جستجو و فیلتر پیشرفته محصولات" as UC_Search
    usecase "مدیریت سبد خرید (افزودن/حذف/تغییر)" as UC_Cart
    usecase "ثبت نهایی سفارش و تسویه حساب" as UC_Checkout
    usecase "احراز هویت (ورود / ثبت‌نام)" as UC_Auth
    usecase "پیگیری وضعیت و تاریخچه سفارش‌ها" as UC_Track
    usecase "اعتبارسنجی موجودی لحظه‌ای کالا" as UC_CheckStock
  }

  package "پیشخوان مدیریت" {
    usecase "ورود امن به پنل مدیریت" as UC_AdminLogin
    usecase "مدیریت کاتالوگ و مشخصات کالا" as UC_ManageProducts
    usecase "مدیریت انبارداری (Stock-In / Out)" as UC_ManageInventory
    usecase "رسیدگی و تغییر وضعیت سفارشات" as UC_ManageOrders
    usecase "پیکربندی هویت و متادیتای سیستم" as UC_Config
    usecase "مشاهده داشبورد آماری و گزارش‌ها" as UC_Reports
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
UC_Checkout --> Gateway : انجام تراکنش مالی

Admin --> UC_AdminLogin
Admin --> UC_ManageProducts
Admin --> UC_ManageInventory
Admin --> UC_ManageOrders
Admin --> UC_Config
Admin --> UC_Reports

UC_ManageOrders ..> UC_ManageInventory : <<include>> بروزرسانی خودکار موجودی
@enduml

دیاگرام ۲: نمودار کلاس‌های کلیدی و دامنه شی‌گرایی (Class Diagram)

کاربرد: نمایش ساختار شی‌گرا، کلاس‌های دامنه، کنترلر مرکزی MasterAction، انتزاع
کاربران و روابط همبستگی.

@startuml
skinparam classAttributeIconSize 0
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

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
    + set_info(field: string, val: string): bool
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
    + total_amount: double
    + status: int
    + date_created: datetime
    + get_items(): array
}

User <|-- Administrator
User <|-- ClientCustomer
MasterAction --> DBConnection : بهره‌گیری از نشست دیتابیس
MasterAction ..> Product : مدیریت کاتالوگ
MasterAction ..> Order : مدیریت چرخه سفارش
Order "1" *-- "many" Product : شامل اقلام
@enduml

دیاگرام ۳: مدل داده‌ای و موجودیت-رابطه پایگاه داده (Entity Relationship Diagram - ERD)

کاربرد: نگاشت اسکیمای فیزیکی پایگاه داده بر اساس استاندارد نرمال‌سازی 3NF،
کلیدهای اصلی و روابط خارجی.

@startuml
skinparam linetype ortho
skinparam roundcorner 5
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

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

categories ||--o{ products : "طبقه‌بندی"
brands ||--o{ products : "تولید برند"
products ||--o{ inventory : "تنوع و موجودی"
clients ||--o{ cart : "مالکیت سبد"
inventory ||--o{ cart : "قلم سبد"
clients ||--o{ orders : "ثبت سفارش"
orders ||--|{ order_items : "شامل اقلام"
inventory ||--o{ order_items : "تخصیص انبار"
@enduml

دیاگرام ۴: نمودار توالی احراز هویت و امنیت نشست‌ها (Authentication Sequence Diagram)

کاربرد: تحلیل فرآیند ورود امن، مقابله با Session Fixation، اعتبارسنجی CSRF و
تطابق هش کلمه عبور.

@startuml
autonumber
skinparam roundcorner 5
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

actor "کاربر / مشتری" as User #0D6EFD
boundary "فرم ورود (Login UI)" as UI
control "کنترلر احراز هویت (Login.php)" as AuthCtrl
entity "پایگاه داده (MariaDB/MySQL)" as DB
control "مدیریت نشست (PHP Session Engine)" as SessionMgr

User -> UI: ورود نام کاربری و رمز عبور
activate UI
UI -> AuthCtrl: ارسال درخواست POST همراه با توکن امنیتی
activate AuthCtrl

AuthCtrl -> AuthCtrl: اعتبارسنجی توکن ضد جعل (Verify CSRF Token)
alt توکن معتبر نیست
    AuthCtrl --> UI: خطای عدم انطباق توکن امنیتی (403 Forbidden)
    UI --> User: نمایش هشدار نشست مشکوک
else توکن معتبر است
    AuthCtrl -> DB: پرس‌وجوی کاربر با Prepared Statement
    activate DB
    DB --> AuthCtrl: بازگردانی رکورد کاربر (هش رمز عبور)
    deactivate DB

    AuthCtrl -> AuthCtrl: ارزیابی هش پسورد با تابع password_verify
    alt رمز عبور منطبق نیست
        AuthCtrl --> UI: خطا: مشخصات ورود معتبر نمی‌باشد
        UI --> User: نمایش پیغام عدم احراز هویت
    else اطلاعات کاربری صحیح است
        AuthCtrl -> SessionMgr: بازتولید شناسه نشست (session_regenerate_id)
        activate SessionMgr
        SessionMgr --> AuthCtrl: شناسه نشست جدید و ایمن
        deactivate SessionMgr

        AuthCtrl -> SessionMgr: ثبت اطلاعات کاربر و رول در آرایه سراسری $_SESSION
        AuthCtrl --> UI: پاسخ موفقیت‌آمیز (HTTP 200 / Status: Success)
        deactivate AuthCtrl
        UI --> User: هدایت کاربر به پیشخوان کاربری
        deactivate UI
    end
end
@enduml

دیاگرام ۵: نمودار توالی ثبت سفارش، قفل‌گذاری موجودی و پرداخت (Checkout Sequence Diagram)

کاربرد: مدلسازی تراکنش‌های مالی، رزرو موجودی کالا و قفل اتمیک پایگاه داده جهت
جلوگیری از Overselling.

@startuml
autonumber
skinparam roundcorner 5
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

actor "مشتری (Client)" as Client #0D6EFD
boundary "فرم تسویه (Checkout Page)" as View
control "کنترلر سفارشات (Master.php)" as Controller
database "پایگاه داده (MySQL / MariaDB)" as DB
boundary "درگاه پرداخت (Payment Gateway)" as Gateway

Client -> View: تأیید آدرس گیرنده و شیوه پرداخت
activate View
View -> Controller: فراخوانی متد place_order(order_data)
activate Controller

Controller -> DB: آغاز تراکنش سیستمی (START TRANSACTION)
activate DB

loop بررسی تک‌تک اقلام سبد خرید
    Controller -> DB: استعلام موجودی با قفل سطری (SELECT ... FOR UPDATE)
    DB --> Controller: موجودی واقعی قلم کالا در انبار
    alt موجودی انبار کمتر از تعداد درخواستی است
        Controller -> DB: ابطال تراکنش (ROLLBACK)
        Controller --> View: خطای کسری موجودی کالا
        View --> Client: نمایش هشدار اتمام موجودی قلم انتخابی
    end
end

Controller -> DB: درج اطلاعات کلان سفارش در جدول orders
DB --> Controller: دریافت شناسه فاکتور (order_id)

loop درج اقلام در جدول order_items و اصلاح انبار
    Controller -> DB: ثبت ردیف اقلام خریداری‌شده
    Controller -> DB: کسر موجودی از جدول inventory
end

Controller -> DB: پاک‌سازی رکوردهای جاری کاربر از جدول cart
Controller -> DB: ثبت نهایی تراکنش (COMMIT TRANSACTION)
deactivate DB

Controller --> View: تأیید ثبت سفارش و صدور شماره پیگیری
deactivate Controller
View --> Client: نمایش فاکتور و رسید نهایی خرید
deactivate View
@enduml

دیاگرام ۶: نمودار فعالیت گردش کار خرید از سبد تا تسویه (Checkout Activity Diagram)

کاربرد: فرآیند گام‌به‌گام خرید از دید مشتری و پردازش‌های پشت صحنه سرور به تفکیک
خطوط شناوری.

@startuml
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

|مشتری فروشگاه|
start
:مشاهده کاتالوگ و صفحه جزئیات کالا;
:انتخاب مشخصه کالا (رنگ، سایز، اسانس);
:کلیک بر روی دکمه افزودن به سبد خرید;

|مفسر سرور و سیستم|
:بررسی وجود نشست معتبر کاربر;
if (کاربر وارد سیستم شده است؟) then (بله)
  :افزودن قلم به جدول دیتابیس سبد خرید;
else (خیر)
  :ذخیره‌سازی در سشن موقت و هدایت به لاگین;
endif

|مشتری فروشگاه|
:بازدید از سبد خرید و کلیک بر روی تسویه حساب;
:ورود نشانی تحویل و شیوه پرداخت;
:تأیید نهایی و ارسال فرم تسویه;

|مفسر سرور و سیستم|
:آغاز تراکنش امن اتمیک (DB Transaction);
:ارزیابی سطح موجودی واقعی در انبار;

if (موجودی اقلام در انبار کافی است؟) then (بله)
  :درج اطلاعات در جدول orders;
  :ایجاد ردیف‌های اقلام در order_items;
  :کسر اتوماتیک تعداد از جدول inventory;
  :حذف اقلام سفارش از سبد خرید;
  :تأیید تراکنش دیتابیس (Commit);
  |مشتری فروشگاه|
  :نمایش فاکتور فروش و کد پیگیری مرسوله;
  stop
else (خیر)
  |مفسر سرور و سیستم|
  :ابطال کامل تراکنش (Rollback);
  |مشتری فروشگاه|
  :نمایش پیغام کسری موجودی کالا در انبار;
  stop
endif
@enduml

دیاگرام ۷: نمودار فعالیت مدیریت زنجیره تأمین و انبارداری (Inventory Activity Diagram)

کاربرد: گردش کار انبارداری در پنل مدیریت، ثبت ورود محموله جدید کالا و هشدارهای
آستانه حداقل موجودی.

@startuml
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

start
:ورود مدیر به بخش مدیریت انبار (Inventory Management);
:مشاهده وضعیت موجودی کالاها و تنوع‌ها;

if (نوع عملیات انبارداری چیست؟) then (شارژ محموله جدید - Stock In)
  :انتخاب محصول و مشخص کردن تنوع (Variant);
  :ورود تعداد فیزیکی وارد شده و بهای واحد;
  :اعتبارسنجی مقادیر مثبت عددی;
  :درج سابقه شارژ انبار در جدول inventory;
  :افزایش شاخص موجودی آماده فروش;
else (تعدیل یا ابطال موجودی - Damaged / Expired)
  :ثبت علت تعدیل (آسیب‌دیدگی فیزیکی، انقضا، خطای انبارگردانی);
  :اعمال تراکنش کاهش تعداد از inventory;
endif

:بررسی حد آستانه حداقل موجودی کالا (Safety Stock);
if (موجودی کمتر از حد آستانه است؟) then (بله)
  :فعال‌سازی نشانگر هشدار قرمز در پیشخوان مدیر (Low Stock);
else (خیر)
  :نمایش وضعیت عادی عرضه کالا در کاتالوگ;
endif

:بروزرسانی شاخص‌های آماری انبار در داشبورد;
stop
@enduml

دیاگرام ۸: نمودار ماشین حالت چرخه حیات سفارش (Order Lifecycle State Machine)

کاربرد: مدلسازی انتقال حالت‌های معتبر سفارش، اعتبارسنجی گذارها و بازگردانی
خودکار کالا در صورت لغو سفارش.

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

state ثبت_شده_در_انتظار : وضعیت 0 (Pending)\nامکان ویرایش آدرس یا لغو توسط خریدار
state تایید_شده : وضعیت 1 (Confirmed)\nسفارش تایید مالی شده و به انبار ارسال گردید
state بسته‌بندی_شده : وضعیت 2 (Packed)\nفاکتور چاپ شده و بارکد مرسوله صادر شد
state ارسال_شده : وضعیت 3 (On_Delivery)\nبسته به حامل پستی/پیک تحویل داده شد
state تحویل_گردید : وضعیت 4 (Delivered)\nمشتری دریافت مرسوله را تأیید کرد
state لغو_شده : وضعیت 5 (Cancelled)\nموجودی به انبار بازگردانده می‌شود

ثبت_شده_در_انتظار --> تایید_شده : تأیید تراکنش مالی یا اپراتور
ثبت_شده_در_انتظار --> لغو_شده : انصراف خریدار / عدم تایید پرداخت

تایید_شده --> بسته‌بندی_شده : پردازش و بارکدگذاری در انبار
تایید_شده --> لغو_شده : اعلام عدم امکان تأمین فیزیکی

بسته‌بندی_شده --> ارسال_شده : تحویل مرسوله به شرکت پست/پیک
ارسال_شده --> تحویل_گردید : وصول تأییدیه دریافت مشتری

لغو_شده --> [*] : برگشت کالا به موجودی انبار (Restore Stock)
تحویل_گردید --> [*] : مختومه شدن چرخه مالی سفارش
@enduml

دیاگرام ۹: نمودار قطعات و معماری لایه‌ای سامانه (Component Diagram)

کاربرد: ساختاربندی اجزای سامانه به تفکیک لایه‌های ارائه (Presentation)، منطق
کسب‌وکار و دسترسی به داده.

@startuml
skinparam componentStyle uml2
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

package "لایه ارائه و فرانت‌اند (Presentation Layer)" {
  [قالب پورتال مشتریان - Storefront UI] as ClientUI
  [پیشخوان مدیریت - AdminLTE Dashboard] as AdminUI
  [موتور ارتباط ناهمگام - AJAX Engine] as AjaxEngine
}

package "لایه منطق تجاری (Business Logic Layer)" {
  [کنترلر احراز هویت - Login Module] as AuthComp
  [موتور مدیریت کاتالوگ - Catalog Master] as CatalogComp
  [کنترلر سفارشات - Order Engine] as OrderComp
  [مدیر تنظیمات سیستم - System Settings] as ConfigComp
}

package "لایه دسترسی و یکپارچگی داده (Data Access Layer)" {
  [کلاس اتصال دیتابیس - DBConnection] as DBLayer
  [ماژول فشرده‌سازی عکس - GD Image Handler] as ImgHandler
  interface "MySQL Driver (mysqli/PDO)" as DriverInterface
}

database "لایه ذخیره‌سازی و پایگاه داده (Storage Layer)" {
  folder "سیستم فایل محلی سرور" {
    [دایرکتوری بارگذاری فایل‌ها - /uploads/] as UploadStore
  }
  database "بانک اطلاعاتی رابطه‌ای (MariaDB)" {
    [اسکیمای جداول - cbpos_db] as Tables
  }
}

ClientUI ..> AjaxEngine : ارسال اکشن‌های کاربری
AdminUI ..> AjaxEngine : دستورات پنل ادمین

AjaxEngine ..> AuthComp : اعتبارسنجی نشست
AjaxEngine ..> CatalogComp : درخواست اقلام
AjaxEngine ..> OrderComp : ثبت سفارش

CatalogComp ..> ImgHandler : بهینه‌سازی و ذخیره عکس
ImgHandler ..> UploadStore : انتقال تصویر به فایل‌سیستم

AuthComp ..> DBLayer : استعلام اطلاعات کاربر
CatalogComp ..> DBLayer : عملیات CRUD کالاها
OrderComp ..> DBLayer : کنترل تراکنش و قفل انبار
ConfigComp ..> DBLayer : فراخوانی تنظیمات

DBLayer ..> DriverInterface : پروتکل ارتباطی با دیتابیس
DriverInterface ..> Tables : اجرای کوئری‌های بهینه‌سازی‌شده
@enduml

دیاگرام ۱۰: نمودار استقرار بستر سخت‌افزاری و نرم‌افزاری در XAMPP (Deployment Diagram)

کاربرد: نمایش زیرساخت استقرار سامانه بر بستر پشته محلی XAMPP، ارتباطات پروتکل و
پورت‌های شبکه.

@startuml
skinparam node {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
}
skinparam artifactBackgroundColor #FFFFFF
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Segoe UI", "Tahoma"

node "کلاینت کاربری / دستگاه متقاضی (Client Station)" as ClientStation {
  artifact "مرورگر مدرن وب\n(Chrome, Firefox, Safari)" as WebBrowser
}

node "سرور میزبانی محلی (Local Server - XAMPP Environment)" as XamppNode {
  node "وب‌سرور آپاچی (Apache 2.4 - Port 80 / 443)" as ApacheServer {
    artifact "ماژول بازنویسی آدرس\n(mod_rewrite)" as ModRewrite
    artifact "مدیریت امنیت نشست\n(Session Security Module)" as SecModule
  }

  node "موتور اجرایی زبان (PHP 8.x Runtime Engine)" as PHPRuntime {
    artifact "پردازشگر تصاویر (GD Library Extension)" as GDLib
    artifact "درایور ارتباط دیتابیس (mysqli / PDO Driver)" as MysqlDriver
    artifact "هسته کدهای فروشگاه\n(CBPOS Application Codebase)" as AppCode
  }

  node "سرور بانک اطلاعاتی (MariaDB Engine - Port 3306)" as DBEngine {
    database "پایگاه داده پروژه\n(cbpos_db Schema)" as DBCBPOS
  }

  folder "سیستم فایل هارد دیسک (Local Storage)" {
    file "مسیر ریشه کدهای برنامه\n(C:/xampp/htdocs/cbpos/)" as AppDir
    file "مخزن تصاویر بارگذاری شده\n(C:/xampp/htdocs/cbpos/uploads/)" as UploadsDir
  }
}

WebBrowser -- ApacheServer : ارتباط وب [HTTP/HTTPS - Port 80]
ApacheServer -- PHPRuntime : مفسر کدهای سمت سرور (mod_php)
AppCode -- GDLib : بهینه‌سازی تصاویر کالاها
AppCode -- MysqlDriver : استعلام داده
MysqlDriver -- DBEngine : پروتکل سوکت محلی TCP/IP [Port 3306]
DBEngine -- DBCBPOS : خواندن/نوشتن در دیسک
PHPRuntime -- AppDir : بارگذاری فایل‌های سورس پروژه
PHPRuntime -- UploadsDir : بارگذاری و دسترسی تصاویر
@enduml

۷. ماتریس تحلیل امنیتی بر پایه استاندارد OWASP Top 10

یکی از دستاوردهای علمی این پروژه، شناسایی و برطرف‌سازی ریشه‌ای آسیب‌پذیری‌های
امنیتی رایج است:

+-------------------------+-----------------------------------+-----------------------------------+
| آسیب‌پذیری استاندارد     | وضعیت در کد پایه (Insecure)       | مکانیزم دفاعی در این پروژه (Secure)|
+-------------------------+-----------------------------------+-----------------------------------+
| A03: Injection (SQLi)   | رشته خام در کوئری:                | استفاده از کوئری پارامتریک:       |
|                         | WHERE user = '$_POST[user]'       | prepare("WHERE user = ?")         |
+-------------------------+-----------------------------------+-----------------------------------+
| A02: Cryptographic      | الگوریتم شکسته شده:               | استاندارد ایمن BCRYPT:            |
|      Failures           | md5($_POST['pass'])               | password_hash($pass, BCRYPT)      |
+-------------------------+-----------------------------------+-----------------------------------+
| A07: Identification &   | شناسه سشن استاتیک پس از لاگین     | بازتولید سشن و ویژگی‌های کوکی:    |
|      Authentication     | و مستعد Session Fixation          | session_regenerate_id(true)       |
+-------------------------+-----------------------------------+-----------------------------------+
| A01: Broken Access      | عدم اعتبارسنجی نوع فایل در آپلود  | بررسی فرمت MIME و بازتولید رندوم  |
|      Control            | و امکان بارگذاری وب‌شل PHP        | نام فایل و حذف دسترسی Execute     |
+-------------------------+-----------------------------------+-----------------------------------+

۸. گالری تصاویر محیط برنامه (رابط کاربری کاربر و پنل مدیریت)

[!NOTE] برای نمایش تصاویر در گزارش نهایی، اسکرین‌شات‌های تهیه شده از مسیر
http://localhost/cbpos/ را در پوشه docs/screenshots/ ذخیره نمایید.

بخش اول: رابط کاربری مشتری و فروشگاه آنلاین (Storefront)

| کاتالوگ فروشگاه و فیلترینگ اقلام                              | مدیریت سبد خرید ناهمگام (AJAX Cart)                              |
| :-----------------------------------------------------------: | :--------------------------------------------------------------: |
| ![کاتالوگ محصولات](docs/screenshots/client-catalog.png)       | ![سبد خرید آنلاین](docs/screenshots/client-cart.png)             |
| *مرور محصولات بر اساس نشان تجاری و دسته‌بندی با نمایش موجودی* | *محاسبه دینامیک هزینه‌ها، کنترل سقف سفارش و به‌روزرسانی لحظه‌ای* |

| فرم نهایی‌سازی سفارش و تسویه                             | پیشخوان پیگیری وضعیت سفارشات                            |
| :------------------------------------------------------: | :-----------------------------------------------------: |
| ![صفحه تسویه حساب](docs/screenshots/client-checkout.png) | ![تاریخچه سفارشات](docs/screenshots/client-orders.png)  |
| *ورود اطلاعات نشانی پستی، انتخاب درگاه و ثبت کد پیگیری*  | *رهگیری فرآیند ۵ مرحله‌ای پردازش مرسوله و نمایش فاکتور* |

بخش دوم: پیشخوان مرکزی مدیریت و کنترل انبار (Admin Dashboard)

| داشبورد آماری و شاخص‌های تحلیلی                               | ماژول مدیریت کاتالوگ محصولات                                 |
| :-----------------------------------------------------------: | :----------------------------------------------------------: |
| ![داشبورد آماری ادمین](docs/screenshots/admin-dashboard.png)  | ![مدیریت محصولات ادمین](docs/screenshots/admin-products.png) |
| *نمایش کل فروش، سفارش‌های جاری و کالاهای در معرض اتمام انبار* | *تعریف اقلام، افزودن تنوع‌ها، قیمت‌گذاری و مدیریت برندها*    |

| ماژول مدیریت انبار و زنجیره تأمین                       | کنترل وضعیت و پردازش سفارشات                                |
| :-----------------------------------------------------: | :---------------------------------------------------------: |
| ![مدیریت انبار](docs/screenshots/admin-inventory.png)   | ![کنترل سفارشات](docs/screenshots/admin-orders.png)         |
| *ثبت شارژ انبار (Stock-In)، کنترل کسری و آستانه موجودی* | *تغییر وضعیت گام‌به‌گام فاکتورها، لغو سفارش و برگشت موجودی* |

۹. تحلیل مهندسی پایگاه داده و نرمال‌سازی

طراحی بانک اطلاعاتی cbpos_db جهت ممانعت از ایجاد آنومالی‌های درج، حذف و ویرایش
(Insert, Delete, Update Anomalies)، به طور کامل به سطح فرم سوم نرمال (3NF)
رسانده شده است:

1.  فرم اول نرمال (1NF): تمام فیلدها اتمیک بوده و هیچ ویژگی چندمقداری (نظیر
    ذخیره آرایه‌ای ویژگی‌ها در یک فیلد) در جداول وجود ندارد. تنوع محصولات به
    ردیف‌های جدول مستقل inventory تفکیک شده است.
2.  فرم دوم نرمال (2NF): کلیه فیلدهای غیرکلید، وابستگی تابعی کامل به کلید اصلی
    جدول دارند و هیچ‌گونه وابستگی جزئی (Partial Dependency) وجود ندارد.
3.  فرم سوم نرمال (3NF): وابستگی‌های تعدیلی (Transitive Dependency) میان فیلدهای
    غیرکلیدی حذف گردیده و مشخصاتی نظیر دسته‌بندی و نشان تجاری از جدول محصول
    تفکیک و به جداول مستقل با ارتباط کلید خارجی متصل شده‌اند.

۱۰. ارزیابی نهایی و چشم‌انداز توسعه آتی

سامانه CBPOS در بستر پژوهشی و عملیاتی دانشکده فنی و حرفه‌ای شهید چمران رشت،
نشان‌دهنده یک چرخه کامل از تحلیل نیازها، بازمهندسی نرم‌افزار، استقرار در محیط
محلی آپاچی و ارزیابی شواهد‌محور اصول ایمنی نرم‌افزار است.

برنامه‌های توسعه در فازهای آتی:

  - توسعه واسط‌های برنامه‌نویسی نرم‌افزار (RESTful API): جهت پیاده‌سازی
    اپلیکیشن‌های موبایل بومی کلاینت بر پایه Flutter.
  - اتصال به شبکه پرداخت شاپرک: راه‌اندازی درگاه‌های پرداخت اینترنتی آنلاین
    مستقیم شتابی و واسط.
  - موتور هوشمند پیشنهاد کالا: به‌کارگیری الگوریتم‌های یادگیری ماشین جهت تحلیل
    سلایق خریداران و پیشنهاد محصولات پوستی مکمل.

پایان گزارش و مستندات فنی پروژه کارشناسی مهندسی نرم‌افزار
دانشکده فنی و حرفه‌ای شهید چمران رشت - پاییز ۱۴۰۵
دانشجو: امیرعلی صالح پور | استاد راهنما: جناب استاد عباس حیدری پاشاکی
