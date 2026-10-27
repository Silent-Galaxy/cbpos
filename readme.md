# سامانه مدیریت و فروشگاه برخط محصولات آرایشی و بهداشتی (CBPOS)

> **Cosmetics & Beauty Product Online Store — PHP OOP / XAMPP / MySQL**

این پروژه به‌عنوان **پایان‌نامه / پروژه کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر — گرایش نرم‌افزار** تهیه شده است. هدف اصلی پروژه، باز مهندسی نرم‌افزار، تحلیل نقادانه کد موجود، ارتقای امنیت، بهبود معماری و مستندسازی مهندسی نرم‌افزار بر اساس شواهد فنی و استانداردهای رایج توسعه وب است.

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=flat-square)
![MySQL](https://img.shields.io/badge/Database-MariaDB%2FMySQL-4479A1?style=flat-square)
![XAMPP](https://img.shields.io/badge/Stack-XAMPP-FFB733?style=flat-square)
![PlantUML](https://img.shields.io/badge/Diagrams-PlantUML-6B8DD6?style=flat-square)
![Architecture](https://img.shields.io/badge/Architecture-OOP%20MVC%2Dlike-2C3E50?style=flat-square)

---

## اطلاعات پروژه

| مشخصه | اطلاعات |
|---|---|
| **نام پروژه** | سامانه مدیریت و فروشگاه برخط محصولات آرایشی و بهداشتی (CBPOS) |
| **دانشجو** | امیرعلی صالح پور |
| **استاد راهنما** | جناب استاد عباس حیدری پاشاکی |
| **مقطع و رشته** | کارشناسی ناپیوسته — مهندسی حرفه‌ای کامپیوتر (نرم‌افزار) |
| **دانشگاه** | دانشکده فنی و حرفه‌ای شهید چمران رشت — دوره روزانه |
| **تاریخ ارزیابی و دفاع** | آبان‌ماه ۱۴۰۵ / 1405/08 |
| **مخزن توسعه پروژه** | [Silent-Galaxy/cbpos](https://github.com/Silent-Galaxy/cbpos) |
| **منبع پایه و هسته اولیه** | [Cosmetics and Beauty Product Online Store — SourceCodester](https://www.sourcecodester.com/php/15181/cosmetics-and-beauty-product-online-store-phpoop-free-source-code.html) |
| **بستر اجرا** | XAMPP — Apache + MySQL/MariaDB + PHP OOP |
| **آدرس سمت کاربر** | `http://localhost/cbpos/` |
| **آدرس سمت مدیریت** | `http://localhost/cbpos/admin/` |

---

## فهرست مطالب

1. [چکیده و معرفی سیستم](#۱-چکیده-و-معرفی-سیستم)
2. [تحلیل نقادانه، مهندسی معکوس و باز مهندسی نرم‌افزار](#۲-تحلیل-نقادانه-مهندسی-معکوس-و-باز-مهندسی-نرم‌افزار)
3. [معماری و قابلیت‌های کارکردی سیستم](#۳-معماری-و-قابلیت‌های-کارکردی-سیستم)
4. [پیش‌نیازها و راهنمای راه‌اندازی روی XAMPP](#۴-پیش‌نیازها-و-راهنمای-راه‌اندازی-روی-xampp)
5. [ساختار فایل‌ها و ماژول‌های پروژه](#۵-ساختار-فایل‌ها-و-ماژول‌های-پروژه)
6. [مجموعه ۱۰ دیاگرام مهندسی نرم‌افزار با PlantUML](#۶-مجموعه-۱۰-دیاگرام-مهندسی-نرم‌افزار-با-plantuml)
7. [ارزیابی امنیتی و انطباق با OWASP Top 10](#۷-ارزیابی-امنیتی-و-انطباق-با-owasp-top-10)
8. [گالری تصاویر محیط برنامه](#۸-گالری-تصاویر-محیط-برنامه)
9. [چک‌لیست آزمون‌های پذیرش و دفاع](#۹-چک‌لیست-آزمون‌های-پذیرش-و-دفاع)
10. [محدودیت‌ها، نتیجه‌گیری و توسعه آتی](#۱۰-محدودیت‌ها-نتیجه‌گیری-و-توسعه-آتی)
11. [منابع و مستندات](#۱۱-منابع-و-مستندات)

---

## ۱. چکیده و معرفی سیستم

سامانه **CBPOS** یک فروشگاه آنلاین تحت وب برای مدیریت و فروش محصولات آرایشی، بهداشتی و مراقبت پوستی است. این سیستم با معماری شی‌گرا در PHP و پایگاه داده MySQL/MariaDB توسعه یافته و بر بستر **XAMPP** قابل اجراست.

پروژه حاضر صرفاً یک نصب ساده سورس آماده نیست؛ بلکه یک **پژوهش مهندسی نرم‌افزار** است که در آن کد پایه از منبع عمومی SourceCodester استخراج، مهندسی معکوس، تحلیل نقادانه و سپس بازسازی شده است. فرآیند اصلی پروژه شامل موارد زیر است:

- شناسایی نقاط ضعف معماری و امنیتی نسخه اولیه
- جایگزینی کوئری‌های ناامن با Prepared Statements
- ارتقای ذخیره‌سازی رمز عبور از الگوریتم‌های منسوخ به `password_hash()` با BCRYPT
- بهبود مدیریت نشست‌ها و مقابله با Session Fixation
- کنترل بهتر بارگذاری فایل‌ها و اعتبارسنجی MIME Type
- تحلیل گردش کار سفارش، موجودی انبار و فرآیند تسویه
- مستندسازی با ۱۰ دیاگرام استاندارد مهندسی نرم‌افزار

سیستم دارای دو سطح کاربری اصلی است:

### ۱.۱. پورتال مشتریان — Storefront

- مشاهده کاتالوگ محصولات
- فیلتر بر اساس دسته‌بندی و برند
- جستجوی کالا
- مشاهده موجودی بر اساس تنوع محصول — Variant
- مدیریت سبد خرید
- ثبت سفارش و پرداخت/ثبت روش پرداخت
- پیگیری وضعیت سفارشات
- مدیریت پروفایل کاربری

### ۱.۲. پیشخوان مدیریت — Admin Dashboard

- ورود امن مدیران
- داشبورد آماری فروش و موجودی
- مدیریت دسته‌بندی‌ها
- مدیریت برندها
- مدیریت محصولات
- مدیریت موجودی انبار — Stock In / Stock Out
- مدیریت سفارشات و تغییر وضعیت آن‌ها
- مدیریت کاربران مدیریتی
- تنظیمات اطلاعات عمومی فروشگاه
- گزارش‌گیری فروش

---

## ۲. تحلیل نقادانه، مهندسی معکوس و باز مهندسی نرم‌افزار

یکی از اهداف مهم این پروژه در سطح کارشناسی، نشان دادن توانایی **تحلیل انتقادی کد موجود** و ارتقای آن بر اساس شواهد فنی است. نسخه پایه پروژه از SourceCodester دریافت شد و سپس فرآیند باز مهندسی روی آن انجام گرفت.

### ۲.۱. خلاصه فرآیند باز مهندسی

```text
[نسخه پایه SourceCodester]
        │
        ├── نقایص امنیتی احتمالی: SQL Injection، XSS، هش ضعیف
        ├── coupling نسبتاً بالا در برخی بخش‌ها
        ├── ریسک همزمانی در عملیات موجودی
        └── نیاز به مستندسازی مهندسی نرم‌افزار
        │
        ▼
[تحلیل نقادانه + مهندسی معکوس]
        │
        ├── بازبینی جریان داده
        ├── شناسایی موجودیت‌های کلیدی
        ├── بررسی چرخه حیات سفارش
        └── ارزیابی ریسک‌های امنیتی
        │
        ▼
[باز مهندسی و بهبودهای مهندسی‌شده]
        │
        ├── Prepared Statements
        ├── password_hash / password_verify
        ├── session_regenerate_id
        ├── اعتبارسنجی فایل‌ها
        ├── تحلیل تراکنش موجودی
        └── مستندسازی با PlantUML
```

### ۲.۲. جدول تحلیل شواهدمحور نقاط ضعف و اقدامات اصلاحی

| ردیف | مشخصه در نسخه اولیه / Legacy | ریسک مهندسی یا امنیتی | اقدام اصلاحی در پروژه حاضر | شاهد فنی / استاندارد |
|---:|---|---|---|---|
| ۱ | استفاده از مقادیر ورودی مستقیم در SQL | SQL Injection | استفاده از Prepared Statements و bind parameter | OWASP A03:2021 — Injection |
| ۲ | ذخیره رمز عبور با MD5 یا روش‌های ضعیف | شکست رمزنگاری، Rainbow Table | استفاده از `password_hash()` با `PASSWORD_BCRYPT` و `password_verify()` | PHP Manual — Password Hashing |
| ۳ | رندر مستقیم ورودی کاربر بدون escape | Stored / Reflected XSS | پاکسازی ورودی و escape خروجی | OWASP A03:2021 — Injection / XSS |
| ۴ | عدم کنترل دقیق همزمانی در کسر موجودی | Overselling و مغایرت انبار | تحلیل تراکنش، قفل ردیف با `FOR UPDATE` و Rollback در خطا | اصل ACID در پایگاه داده |
| ۵ | بارگذاری فایل بدون بررسی واقعی نوع فایل | اجرای فایل مخرب / RCE | بررسی MIME Type، محدودیت پسوند، تغییر نام تصادفی فایل | OWASP File Upload Guidance |
| ۶ | مدیریت نشست ساده پس از ورود | Session Fixation / Hijacking | `session_regenerate_id(true)` و تنظیمات امن کوکی | OWASP Session Management |
| ۷ | مستندسازی فنی ناقص | کاهش قابلیت نگهداری | تهیه ۱۰ دیاگرام UML/PlantUML و ساختار ماژولار | IEEE / SWEBOK — Software Design |

### ۲.۳. دیدگاه نقادانه درباره محدودیت‌های نسخه پایه

نسخه پایه برای آموزش و راه‌اندازی سریع مناسب است، اما برای استفاده واقعی در محیط تولید کافی نیست. دلایل:

- امنیت کافی برای داده‌های واقعی کاربران ندارد.
- درگاه پرداخت واقعی به‌صورت پیش‌فرض پیکربندی نشده است.
- مدیریت همزمانی موجودی نیازمند تراکنش‌های دقیق‌تر است.
- تست خودکار واحد یا یکپارچه‌سازی ندارد.
- مستندسازی معماری و دیاگرام‌های رسمی ارائه نمی‌کند.

بنابراین پروژه حاضر با رویکرد **تحلیل، بهبود و مستندسازی** ارائه شده است.

---

## ۳. معماری و قابلیت‌های کارکردی سیستم

### ۳.۱. معماری کلی

سیستم بر پایه الگوی نزدیک به MVC و معماری لایه‌ای پیاده‌سازی شده است:

```text
Presentation Layer
│
├── Storefront UI
├── Admin Dashboard
└── AJAX / Static Assets

Business Logic Layer
│
├── Login / Authentication
├── Catalog / Master Actions
├── Cart / Checkout Engine
└── System Settings

Data Access Layer
│
├── DBConnection Wrapper
├── MySQLi / PDO Driver
└── Image Handler / Upload Service

Persistence Layer
│
├── MySQL / MariaDB — cbpos_db
└── Local File Storage — /uploads
```

### ۳.۲. قابلیت‌های سمت مشتری

- ثبت‌نام و ورود کاربر
- مشاهده صفحه اصلی فروشگاه
- مرور محصولات
- فیلتر محصولات بر اساس دسته
- فیلتر محصولات بر اساس برند
- جستجوی محصول
- مشاهده جزئیات محصول
- مشاهده تنوع‌ها و موجودی
- افزودن به سبد خرید
- ویرایش تعداد اقلام سبد
- حذف کالا از سبد
- ثبت سفارش
- انتخاب روش پرداخت
- مشاهده تاریخچه سفارشات
- لغو سفارش در وضعیت مجاز
- مدیریت پروفایل و رمز عبور

### ۳.۳. قابلیت‌های سمت مدیریت

- ورود امن مدیر
- داشبورد آماری
- مدیریت دسته‌بندی‌ها: CRUD
- مدیریت برندها: CRUD
- مدیریت محصولات: CRUD
- مدیریت موجودی و تنوع کالاها
- ثبت ورود کالا به انبار — Stock In
- ثبت خروج یا تعدیل موجودی — Stock Out / Adjustment
- مدیریت سفارشات
- مشاهده جزئیات سفارش
- تغییر وضعیت سفارش
- علامت‌گذاری سفارش به‌عنوان پرداخت‌شده
- مدیریت کاربران مدیریتی
- ویرایش اطلاعات حساب مدیر
- تنظیمات اطلاعات فروشگاه
- گزارش فروش تاریخ‌وار

---

## ۴. پیش‌نیازها و راهنمای راه‌اندازی روی XAMPP

این پروژه به‌طور خاص برای اجرا روی **XAMPP** تنظیم شده است.

### ۴.۱. نیازمندی‌های نرم‌افزاری

- XAMPP
- Apache
- MySQL یا MariaDB
- PHP نسخه ۷.۴ تا ۸.۲ — پیشنهادی: PHP 8.x
- ماژول GD Library فعال در `php.ini`
- مرورگر مدرن: Chrome، Firefox یا Edge
- Git — اختیاری، برای clone کردن مخزن

### ۴.۲. گام اول: قرار دادن پروژه در htdocs

اگر Git دارید:

```bash
cd C:/xampp/htdocs/
git clone https://github.com/Silent-Galaxy/cbpos.git
```

ساختار باید به این شکل باشد:

```text
C:/xampp/htdocs/cbpos/
```

اگر از ZIP استفاده می‌کنید، فایل فشرده را استخراج کرده و پوشه پروژه را با نام `cbpos` داخل `htdocs` قرار دهید.

### ۴.۳. گام دوم: فعال‌سازی GD Library

فایل زیر را باز کنید:

```text
C:/xampp/php/php.ini
```

عبارت زیر را جستجو کنید:

```ini
;extension=gd
```

سمیکالن ابتدای خط را حذف کنید تا به این شکل شود:

```ini
extension=gd
```

سپس Apache را از طریق XAMPP Control Panel Restart کنید.

### ۴.۴. گام سوم: اجرای Apache و MySQL

در XAMPP Control Panel:

- Apache را Start کنید.
- MySQL را Start کنید.

### ۴.۵. گام چهارم: ساخت پایگاه داده

به آدرس زیر بروید:

```text
http://localhost/phpmyadmin/
```

مراحل:

1. روی **New** کلیک کنید.
2. نام دیتابیس را دقیقاً设置为:

```text
cbpos_db
```

3. Collation پیشنهادی:

```text
utf8mb4_general_ci
```

4. دیتابیس را Create کنید.

### ۴.۶. گام پنجم: Import فایل SQL

وارد دیتابیس `cbpos_db` شوید.

به تب **Import** بروید.

فایل زیر را انتخاب کنید:

```text
C:/xampp/htdocs/cbpos/database/cbpos_db.sql
```

سپس دکمه **Go** یا **Import** را بزنید.

### ۴.۷. گام ششم: بررسی تنظیمات اتصال به دیتابیس

معمولاً تنظیمات پیش‌فرض XAMPP به این شکل است:

```php
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "cbpos_db");
```

در صورت نیاز، این مقادیر را در فایل‌های پیکربندی پروژه بررسی کنید.

### ۴.۸. گام هفتم: دسترسی به سیستم

سمت کاربر:

```text
http://localhost/cbpos/
```

سمت مدیریت:

```text
http://localhost/cbpos/admin/
```

### ۴.۹. اطلاعات پیش‌فرض ورود

| بخش | نام کاربری | رمز عبور | نقش |
|---|---|---|---|
| مدیریت | `admin` | `admin123` | مدیر کل سیستم |
| مشتری | از طریق Register ثبت‌نام کنید | رمز انتخابی کاربر | مشتری فروشگاه |

> تذکر امنیتی: این اطلاعات فقط برای محیط توسعه محلی XAMPP است. در محیط واقعی حتماً رمزها تغییر کنند.

### ۴.۱۰. عیب‌یابی رایج

| مشکل | علت احتمالی | راه‌حل |
|---|---|---|
| خطای اتصال به دیتابیس | MySQL روشن نیست یا نام دیتابیس اشتباه است | MySQL را Start کنید و `cbpos_db` را بررسی کنید |
| تصاویر آپلود نمی‌شوند | GD Library غیرفعال است | در `php.ini` خط `extension=gd` را فعال کنید |
| صفحه 404 نمایش داده می‌شود | پوشه پروژه نام دیگری دارد | پوشه باید دقیقاً `cbpos` نام داشته باشد |
| رمز admin کار نمی‌کند | SQL import نشده یا داده پایه وجود ندارد | فایل `cbpos_db.sql` را مجدد Import کنید |
| خطای MIME فایل | آپلود فایل غیرمجاز است | فقط فرمت‌های مجاز تصویر مانند JPG، PNG، WEBP استفاده شود |
| مشکل نمایش فارسی | Encoding نامناسب | دیتابیس با `utf8mb4` و صفحات با UTF-8 ذخیره شوند |

---

## ۵. ساختار فایل‌ها و ماژول‌های پروژه

```text
cbpos/
├── admin/                         # پنل مدیریت
│   ├── home.php                   # داشبورد مدیریتی
│   ├── inc/                       # هدر، منو، فوتر ادمین
│   ├── inventory/                 # مدیریت موجودی انبار
│   ├── orders/                    # مدیریت سفارشات
│   ├── product/                   # مدیریت محصولات
│   ├── system_info/               # تنظیمات اطلاعات فروشگاه
│   └── index.php                  # ورود به پنل مدیریت
│
├── classes/                       # لایه منطق شی‌گرا
│   ├── DBConnection.php           # اتصال امن به دیتابیس
│   ├── Login.php                  # احراز هویت و مدیریت نشست
│   ├── Master.php                 # عملیات CRUD و فرآیندهای اصلی
│   └── SystemSettings.php         # تنظیمات سیستم
│
├── database/                      # اسکریپت پایگاه داده
│   └── cbpos_db.sql
│
├── dist/                          # فایل‌های استاتیک CSS/JS/Fonts
├── libs/                          # کتابخانه‌ها و افزونه‌ها
├── uploads/                       # تصاویر محصولات و برندها
│
├── docs/
│   ├── screenshots/               # اسکرین‌شات محیط برنامه
│   └── diagrams/                  # خروجی دیاگرام‌های PlantUML
│
├── index.php                      # صفحه اصلی فروشگاه
├── initialize.php                 # مقداردهی اولیه و تنظیمات
├── cart.php                       # سبد خرید
├── checkout.php                   # تسویه و ثبت سفارش
├── products.php                   # لیست و فیلتر محصولات
└── README.md                      # مستند نهایی پروژه
```

---

## ۶. مجموعه ۱۰ دیاگرام مهندسی نرم‌افزار با PlantUML

کدهای زیر با **PlantUML** نوشته شده‌اند. برای مشاهده، هر بلوک کد را در سایت زیر قرار دهید:

🔗 [https://editor.plantuml.com/](https://editor.plantuml.com/)

برای گزارش نهایی، خروجی `SVG` یا `PNG` هر دیاگرام را در پوشه `docs/diagrams/` ذخیره کنید.

---

### دیاگرام ۱: نمودار موارد کاربرد سامانه — Use Case Diagram

این دیاگرام تعاملات مشتری، مدیر و ماژول پرداخت را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۱: نمودار موارد کاربرد سامانه CBPOS
skinparam roundcorner 12
skinparam shadowing false
skinparam actorStyle awesome
skinparam packageStyle rectangle
skinparam defaultFontName "Arial"

actor "مشتری (Client)" as Client #0D6EFD
actor "مدیر (Admin)" as Admin #DC3545
actor "ماژول پرداخت / سیستم" as Payment #198754

rectangle "CBPOS: فروشگاه آنلاین محصولات آرایشی و بهداشتی" {
  package "تعاملات مشتری" {
    usecase "مرور کاتالوگ و فیلتر محصولات" as UC_Browse
    usecase "جستجو بر اساس دسته/برند" as UC_Search
    usecase "مشاهده موجودی تنوع کالا" as UC_Stock
    usecase "مدیریت سبد خرید" as UC_Cart
    usecase "احراز هویت / ثبت‌نام" as UC_Auth
    usecase "ثبت نهایی سفارش" as UC_Checkout
    usecase "پیگیری سفارشات" as UC_Track
  }

  package "مدیریت و زنجیره تأمین" {
    usecase "ورود امن به پنل مدیریت" as UC_AdminLogin
    usecase "مدیریت دسته، برند و محصول" as UC_Products
    usecase "مدیریت موجودی (Stock In/Out)" as UC_Inventory
    usecase "مدیریت وضعیت سفارشات" as UC_Orders
    usecase "پیکربندی اطلاعات سامانه" as UC_Settings
    usecase "گزارشگیری فروش" as UC_Reports
  }
}

Client --> UC_Browse
Client --> UC_Search
Client --> UC_Stock
Client --> UC_Cart
Client --> UC_Auth
Client --> UC_Checkout
Client --> UC_Track

UC_Browse ..> UC_Search : <<extend>>
UC_Checkout ..> UC_Auth : <<include>>
UC_Checkout ..> UC_Stock : <<include>>
UC_Checkout --> Payment : پردازش/ثبت پرداخت

Admin --> UC_AdminLogin
Admin --> UC_Products
Admin --> UC_Inventory
Admin --> UC_Orders
Admin --> UC_Settings
Admin --> UC_Reports

UC_Orders ..> UC_Inventory : <<include>>
@enduml
```

---

### دیاگرام ۲: نمودار کلاس‌های کلیدی و دامنه شی‌گرا — Class Diagram

این دیاگرام ساختار کلاس‌های اصلی، روابط آن‌ها و تفکیک لایه منطق تجاری از لایه داده را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۲: نمودار کلاس‌های کلیدی و دامنه شی‌گرا
skinparam roundcorner 10
skinparam shadowing false
skinparam classAttributeIconSize 0
skinparam defaultFontName "Arial"

package "لایه خدمات و دسترسی به داده" {
  class DBConnection {
    - host: string
    - username: string
    - password: string
    - database: string
    + conn: mysqli
    + __construct()
    + __destruct()
    + query(sql: string, params: array): mysqli_result
  }

  class Login {
    - session: array
    + login(username: string, password: string): bool
    + logout(): void
    + isLoggedIn(): bool
    + regenerateSession(): void
  }

  class Master {
    + saveCategory(data: array): int
    + saveBrand(data: array): int
    + saveProduct(data: array): int
    + saveInventory(data: array): int
    + addToCart(clientId: int, inventoryId: int, qty: float): int
    + placeOrder(clientId: int, orderData: array): int
    + updateOrderStatus(orderId: int, status: int): bool
  }

  class SystemSettings {
    - settings: array
    + load(): void
    + get(field: string): string
    + set(field: string, value: string): bool
  }
}

package "دامنه کسب‌وکار" {
  abstract class User {
    # id: int
    # firstname: string
    # lastname: string
    # username: string
    # passwordHash: string
    # dateAdded: datetime
    + {abstract} authenticate(): bool
    + {abstract} save(): int
  }

  class Administrator {
    - role: int
    + manageUsers(): bool
    + manageSystem(): bool
  }

  class ClientCustomer {
    - email: string
    - contact: string
    - deliveryAddress: text
    - status: int
    + register(): int
    + updateProfile(): bool
    + viewOrders(): array
  }

  class Category {
    + id: int
    + name: string
    + description: text
    + status: int
  }

  class Brand {
    + id: int
    + name: string
    + imagePath: string
    + status: int
  }

  class Product {
    + id: int
    + categoryId: int
    + brandId: int
    + name: string
    + description: text
    + status: int
    + getVariants(): array
    + getTotalStock(): float
  }

  class Inventory {
    + id: int
    + productId: int
    + variant: string
    + quantity: float
    + price: float
    + lockForUpdate(): bool
  }

  class Cart {
    + id: int
    + clientId: int
    + inventoryId: int
    + quantity: float
    + calculateSubtotal(): float
  }

  class Order {
    + id: int
    + clientId: int
    + deliveryAddress: text
    + paymentMethod: string
    + totalAmount: float
    + status: int
    + paid: int
    + addItem(item: OrderItem): void
    + cancel(): bool
  }

  class OrderItem {
    + id: int
    + orderId: int
    + inventoryId: int
    + quantity: float
    + price: float
  }
}

User <|-- Administrator
User <|-- ClientCustomer

Login --> DBConnection : استفاده از
Master --> DBConnection : استفاده از
SystemSettings --> DBConnection : خواندن/نوشتن تنظیمات

Category "1" -- "0..*" Product : طبقه‌بندی می‌کند
Brand "1" -- "0..*" Product : تولید می‌کند
Product "1" -- "0..*" Inventory : دارای تنوع/موجودی است
ClientCustomer "1" -- "0..*" Cart : سبد خرید دارد
Inventory "1" -- "0..*" Cart : در سبد انتخاب می‌شود
ClientCustomer "1" -- "0..*" Order : سفارش ثبت می‌کند
Order "1" *-- "1..*" OrderItem : شامل اقلام است
Inventory "1" -- "0..*" OrderItem : ارجاع داده می‌شود

Master ..> Product : مدیریت کاتالوگ
Master ..> Inventory : مدیریت موجودی
Master ..> Order : پردازش سفارش
@enduml
```

---

### دیاگرام ۳: مدل داده‌ای موجودیت–رابطه پایگاه داده — ERD

این دیاگرام جداول اصلی پایگاه داده `cbpos_db`، کلیدهای اصلی/خارجی و روابط بین موجودیت‌ها را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۳: مدل داده‌ای ERD پایگاه داده cbpos_db
skinparam linetype ortho
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Arial"

entity "system_info" as sys #E8F5E9 {
  * id : int <<PK>>
  --
  meta_field : text
  meta_value : text
}

entity "users" as users #E3F2FD {
  * id : int <<PK>>
  --
  firstname : varchar(250)
  lastname : varchar(250)
  username : text
  password : text
  avatar : text
  type : tinyint(1)
  date_added : datetime
}

entity "clients" as clients #E3F2FD {
  * id : int <<PK>>
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

entity "categories" as categories #FFF3E0 {
  * id : int <<PK>>
  --
  category : varchar(250)
  description : text
  status : tinyint(1)
  delete_flag : tinyint(1)
  date_created : datetime
}

entity "brands" as brands #FFF3E0 {
  * id : int <<PK>>
  --
  name : varchar(250)
  description : text
  image_path : text
  status : tinyint(1)
  delete_flag : tinyint(1)
  date_created : datetime
}

entity "products" as products #FCE4EC {
  * id : int <<PK>>
  --
  category_id : int <<FK>>
  brand_id : int <<FK>>
  name : varchar(250)
  description : text
  status : tinyint(1)
  delete_flag : tinyint(1)
  date_created : datetime
}

entity "inventory" as inventory #F3E5F5 {
  * id : int <<PK>>
  --
  product_id : int <<FK>>
  quantity : double
  price : float
  variant : varchar(250)
  date_created : datetime
}

entity "cart" as cart #FFFDE7 {
  * id : int <<PK>>
  --
  client_id : int <<FK>>
  inventory_id : int <<FK>>
  quantity : double
  date_created : datetime
}

entity "orders" as orders #FFEBEE {
  * id : int <<PK>>
  --
  client_id : int <<FK>>
  delivery_address : text
  total_amount : double
  payment_method : varchar(100)
  status : tinyint(1)
  paid : tinyint(1)
  date_created : datetime
}

entity "order_items" as order_items #FFEBEE {
  * id : int <<PK>>
  --
  order_id : int <<FK>>
  inventory_id : int <<FK>>
  quantity : double
  price : double
  date_created : datetime
}

categories ||--o{ products : "طبقه‌بندی می‌کند"
brands ||--o{ products : "تولید می‌کند"
products ||--o{ inventory : "موجودی دارد"
clients ||--o{ cart : "مالک سبد است"
inventory ||--o{ cart : "در سبد قرار می‌گیرد"
clients ||--o{ orders : "ثبت می‌کند"
orders ||--|{ order_items : "شامل می‌شود"
inventory ||--o{ order_items : "در اقلام سفارش ارجاع می‌شود"

note right of orders
  وضعیت‌های سفارش:
  0=Pending, 1=Confirmed,
  2=Packed, 3=Shipped,
  4=Delivered, 5=Cancelled
end note

note left of inventory
  کنترل موجودی بر پایه
  Variant انجام می‌شود.
end note
@enduml
```

---

### دیاگرام ۴: نمودار توالی احراز هویت و امنیت نشست — Authentication Sequence Diagram

این دیاگرام فرآیند ورود کاربر، بررسی CSRF، اعتبارسنجی رمز با هش امن و بازتولید شناسه نشست را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۴: توالی احراز هویت و امنیت نشست
autonumber
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Arial"

actor "کاربر / مشتری" as User #0D6EFD
boundary "فرم ورود (Login UI)" as UI
control "Login.php" as Auth
database "پایگاه داده" as DB
control "Session Manager" as Session

User -> UI : ارسال username, password, csrf_token
activate UI
UI -> Auth : validate(credentials)
activate Auth

Auth -> Auth : بررسی CSRF Token
alt توکن نامعتبر
  Auth --> UI : 403 Forbidden
  UI --> User : نمایش خطای امنیتی
else توکن معتبر
  Auth -> DB : SELECT با Prepared Statement
  activate DB
  DB --> Auth : رکورد کاربر + password hash
  deactivate DB

  Auth -> Auth : password_verify()
  alt رمز نادرست
    Auth --> UI : Invalid credentials
    UI --> User : نمایش پیام خطا
  else رمز صحیح
    Auth -> Session : session_regenerate_id(true)
    activate Session
    Session --> Auth : نشست جدید ساخته شد
    deactivate Session

    Auth -> Session : ذخیره user_id و role
    Auth --> UI : Login Success
    UI --> User : هدایت به داشبورد مربوطه
  end
end

deactivate Auth
deactivate UI
@enduml
```

---

### دیاگرام ۵: نمودار توالی ثبت سفارش، قفل موجودی و پرداخت — Checkout Sequence Diagram

این دیاگرام فرآیند atomic ثبت سفارش، بررسی موجودی، کسر انبار، پاک‌سازی سبد و COMMIT/ROLLBACK را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۵: توالی ثبت سفارش، قفل موجودی و پرداخت
autonumber
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Arial"

actor "مشتری" as Client #0D6EFD
boundary "صفحه تسویه (Checkout)" as View
control "Master.php / Order Engine" as Controller
database "MySQL / MariaDB" as DB
participant "درگاه پرداخت / ماژول مالی" as Gateway #198754

Client -> View : تأیید آدرس و روش پرداخت
activate View
View -> Controller : place_order(order_data, cart_items)
activate Controller

Controller -> DB : START TRANSACTION
activate DB

loop بررسی هر قلم سبد خرید
  Controller -> DB : SELECT quantity FROM inventory WHERE id=? FOR UPDATE
  DB --> Controller : موجودی فعلی
end

alt موجودی همه اقلام کافی است
  Controller -> DB : INSERT INTO orders (...)
  DB --> Controller : order_id
  loop درج اقلام و کسر موجودی
    Controller -> DB : INSERT INTO order_items (...)
    Controller -> DB : UPDATE inventory SET quantity = quantity - ? WHERE id=?
  end
  Controller -> DB : DELETE FROM cart WHERE client_id=?
  Controller -> DB : COMMIT
  deactivate DB

  alt روش پرداخت آنلاین
    Controller -> Gateway : ایجاد ارجاع/تراکنش پرداخت
    Gateway --> Controller : وضعیت اولیه پرداخت
  end

  Controller --> View : سفارش ثبت شد + شماره پیگیری
  View --> Client : نمایش رسید و وضعیت سفارش
else موجودی ناکافی است
  Controller -> DB : ROLLBACK
  deactivate DB
  Controller --> View : خطای اتمام موجودی
  View --> Client : نمایش هشدار و ویرایش سبد
end

deactivate Controller
deactivate View
@enduml
```

---

### دیاگرام ۶: نمودار فعالیت گردش کار خرید از سبد تا تسویه — Checkout Activity Diagram

این دیاگرام جریان خرید مشتری را از انتخاب محصول تا صدور فاکتور یا خطای موجودی نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۶: فعالیت گردش کار خرید از سبد تا تسویه
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Arial"

|Client|
start
:مشاهده محصول و انتخاب Variant;
:افزودن به سبد خرید;

|Server|
if (کاربر وارد شده است؟) then (بله)
  :ذخیره/به‌روزرسانی رکورد در جدول cart;
else (خیر)
  :ذخیره موقت در نشست یا هدایت به ورود;
endif

|Client|
:بازدید سبد خرید;
:کلیک بر تسویه حساب;
:وارد کردن آدرس تحویل و روش پرداخت;
:نهایی‌سازی سفارش;

|Server|
:START TRANSACTION;
:بررسی موجودی اقلام با FOR UPDATE;

if (موجودی همه اقلام کافی است؟) then (بله)
  :INSERT INTO orders;
  :INSERT INTO order_items;
  :UPDATE inventory و کسر موجودی;
  :DELETE FROM cart;
  :COMMIT;
  |Client|
  :نمایش فاکتور و کد پیگیری;
  stop
else (خیر)
  |Server|
  :ROLLBACK;
  |Client|
  :نمایش خطای کسری موجودی;
  stop
endif
@enduml
```

---

### دیاگرام ۷: نمودار فعالیت مدیریت زنجیره تأمین و انبارداری — Inventory Activity Diagram

این دیاگرام فرآیند Stock In، Stock Out، تعدیل موجودی و هشدار کمبود کالا را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۷: فعالیت مدیریت زنجیره تأمین و انبارداری
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Arial"

|Admin|
start
:ورود به منوی مدیریت انبار;
:مشاهده فهرست کالاها و موجودی تنوع‌ها;

if (نوع عملیات؟) then (Stock In)
  :انتخاب محصول و Variant;
  :ثبت تعداد ورودی، قیمت خرید/فروش;
  |System|
  :اعتبارسنجی مقادیر مثبت;
  |DB|
  :ثبت سابقه ورود کالا;
  :افزایش quantity در inventory;
else (Stock Out / Adjustment)
  :ثبت دلیل تعدیل (خرابی، انقضا، مغایرت);
  |System|
  :اعتبارسنجی و کنترل حد مجاز;
  |DB|
  :ثبت سابقه تعدیل;
  :کاهش quantity در inventory;
endif

|System|
:محاسبه موجودی کل و مقایسه با Safety Stock;

if (موجودی کمتر از آستانه است؟) then (بله)
  :فعال‌سازی هشدار Low Stock در داشبورد;
else (خیر)
  :حفظ وضعیت نرمال عرضه;
endif

|Admin|
:مشاهده شاخص‌های به‌روزشده داشبورد;
stop
@enduml
```

---

### دیاگرام ۸: نمودار ماشین حالت چرخه حیات سفارش — Order Lifecycle State Machine

این دیاگرام وضعیت‌های معتبر سفارش و گذار بین آن‌ها را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۸: ماشین حالت چرخه حیات سفارش
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Arial"
skinparam state {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
  ArrowColor #2C3E50
  StartColor #198754
  EndColor #DC3545
}

state "ثبت‌شده (Pending)" as Pending
state "تأییدشده (Confirmed)" as Confirmed
state "بسته‌بندی‌شده (Packed)" as Packed
state "ارسال‌شده (Shipped)" as Shipped
state "تحویل‌شده (Delivered)" as Delivered
state "لغوشده (Cancelled)" as Cancelled

Pending : entry / انتظار بررسی مدیر و پرداخت
Confirmed : entry / ارجاع به واحد انبار
Packed : entry / آماده‌سازی بسته‌بندی و بارکد
Shipped : entry / صدور کد رهگیری مرسوله
Delivered : entry / تأیید دریافت مشتری
Cancelled : entry / بازگردانی اقلام به موجودی انبار

[*] --> Pending : مشتری سفارش را تکمیل می‌کند
Pending --> Confirmed : تأیید مدیر / موفقیت پرداخت
Pending --> Cancelled : لغو توسط مشتری یا عدم تأیید
Confirmed --> Packed : آماده‌سازی فیزیکی کالا
Confirmed --> Cancelled : عدم امکان تأمین موجودی
Packed --> Shipped : تحویل مرسوله به پست/پیک
Shipped --> Delivered : مشتری دریافت را تأیید می‌کند
Cancelled --> [*] : بستن چرخه لغو
Delivered --> [*] : بستن چرخه مالی و تحویل
@enduml
```

---

### دیاگرام ۹: نمودار قطعات و معماری لایه‌ای سامانه — Component Diagram

این دیاگرام جداسازی لایه ارائه، منطق تجاری، دسترسی به داده و ماندگاری را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۹: معماری قطعات و لایه‌های سامانه
skinparam componentStyle uml2
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Arial"

package "لایه ارائه (Presentation)" #E3F2FD {
  [پرتال مشتری (Storefront UI)] as ClientUI
  [پیشخوان مدیریت (Admin Dashboard)] as AdminUI
  [AJAX / Static Assets] as Ajax
}

package "لایه منطق کسب‌وکار (Business Logic)" #FFF3E0 {
  [کنترلر احراز هویت (Login)] as Auth
  [موتور کاتالوگ (Master)] as Catalog
  [موتور سبد و سفارش (Checkout)] as Order
  [تنظیمات سامانه (SystemSettings)] as Config
}

package "لایه دسترسی به داده (Data Access)" #F3E5F5 {
  [پوشش پایگاه داده (DBConnection)] as DBLayer
  [پردازشگر تصویر (GD Handler)] as ImgHandler
  interface "MySQLi / PDO Driver" as Driver
}

artifact "Local File Storage (/uploads)" as UploadStore #FFFDE7

database "پایگاه داده (cbpos_db)" #FFEBEE {
  [جداول نرمال‌شده MySQL/MariaDB] as Tables
}

ClientUI ..> Ajax
AdminUI ..> Ajax

Ajax ..> Auth : درخواست‌های ورود/نشست
Ajax ..> Catalog : فیلتر و مشاهده کالا
Ajax ..> Order : سبد و تسویه

Catalog ..> ImgHandler : آپلود/بازتولید تصویر
ImgHandler ..> UploadStore : ذخیره فایل

Auth ..> DBLayer
Catalog ..> DBLayer
Order ..> DBLayer
Config ..> DBLayer

DBLayer ..> Driver
Driver ..> Tables
@enduml
```

---

### دیاگرام ۱۰: نمودار استقرار بستر سخت‌افزاری و نرم‌افزاری در XAMPP — Deployment Diagram

این دیاگرام توپولوژی اجرای پروژه روی localhost، Apache، PHP، MariaDB/MySQL و file system را نشان می‌دهد.

```plantuml
@startuml
title دیاگرام ۱۰: استقرار سامانه بر بستر XAMPP
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Arial"
skinparam node {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
}

node "کلاینت (مرورگر وب)" as Client #E3F2FD {
  artifact "Chrome / Firefox / Edge" as Browser
}

node "سرور محلی XAMPP" as Server #FFFDE7 {
  node "Apache HTTP Server (Port 80/443)" as Apache #FFEBEE {
    artifact "mod_rewrite" as Rewrite
    artifact "Session Security / Headers" as Security
  }

  node "PHP Runtime (PHP 8.x)" as PHP #F3E5F5 {
    artifact "GD Library" as GD
    artifact "MySQLi / PDO Extension" as Driver
    artifact "CBPOS Application Code" as App
  }

  node "MariaDB / MySQL (Port 3306)" as DBNode #E8F5E9 {
    database "cbpos_db" as Schema
  }

  folder "File System" #FFF3E0 {
    file "C:/xampp/htdocs/cbpos" as AppDir
    file "C:/xampp/htdocs/cbpos/uploads" as UploadDir
  }
}

Browser --> Apache : HTTP/HTTPS Request
Apache --> PHP : mod_php / FastCGI
App --> GD : پردازش تصویر
App --> Driver : ارتباط با دیتابیس
Driver --> Schema : TCP/IP [Port 3306]
PHP --> AppDir : خواندن کدهای برنامه
PHP --> UploadDir : خواندن/نوشتن رسانه‌ها
Security --> Apache : افزودن هدرهای امنیتی
@enduml
```

---

## ۷. ارزیابی امنیتی و انطباق با OWASP Top 10

در این پروژه، تلاش شده است تا مهم‌ترین ریسک‌های امنیتی اپلیکیشن‌های وب تحت PHP مورد توجه قرار بگیرند.

### ۷.۱. مقابله با SQL Injection

رویکرد ناامن نمونه:

```php
// ناامن — فقط برای نمایش مفهوم
$query = "SELECT * FROM users WHERE username = '" . $_POST['username'] . "'";
```

رویکرد بهبودیافته:

```php
$stmt = $conn->prepare("SELECT id, password, type FROM users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
```

### ۷.۲. ذخیره‌سازی امن رمز عبور

به‌جای الگوریتم‌های منسوخ مانند MD5، از توابع امن PHP استفاده می‌شود:

```php
$hashed = password_hash($password, PASSWORD_BCRYPT);

if (password_verify($inputPassword, $storedHash)) {
    // رمز صحیح است
}
```

### ۷.۳. امنیت نشست

پس از ورود موفق:

```php
session_regenerate_id(true);
```

همچنین تنظیمات پیشنهادی کوکی:

```php
ini_set('session.cookie_httponly', 1);
ini_set('session.cookie_samesite', 'Strict');
ini_set('session.use_strict_mode', 1);
```

### ۷.۴. بارگذاری امن فایل

برای تصاویر محصولات:

- بررسی پسوند مجاز
- بررسی MIME Type واقعی
- محدودیت حجم فایل
- تغییر نام تصادفی فایل
- غیرفعال کردن اجرای PHP در پوشه `uploads/`

مثال مفهومی:

```php
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimeType = finfo_file($finfo, $tmpPath);
finfo_close($finfo);

$allowed = [
    'image/jpeg',
    'image/png',
    'image/webp'
];

if (!in_array($mimeType, $allowed, true)) {
    die("نوع فایل مجاز نیست.");
}
```

### ۷.۵. جدول انطباق با OWASP Top 10 — 2021

| ریسک OWASP | وضعیت در پروژه | توضیح |
|---|---|---|
| A01 Broken Access Control | بهبود نسبی | کنترل نقش مدیر/مشتری در لایه ورود و پنل ادمین |
| A02 Cryptographic Failures | بهبود | استفاده از `password_hash` به‌جای MD5 |
| A03 Injection | بهبود | استفاده از Prepared Statements |
| A04 Insecure Design | تحلیل شده | دیاگرام‌های حالة سفارش، موجودی و checkout تهیه شده |
| A05 Security Misconfiguration | نیازمند توجه در production | در XAMPP محلی قابل قبول، ولی برای سرور واقعی باید hardening شود |
| A06 Vulnerable Components | محدود | کتابخانه‌های شخص ثالث باید به‌روزرسانی شوند |
| A07 Identification and Authentication Failures | بهبود | regenerate session، verify password، CSRF check |
| A08 Software and Data Integrity Failures | نسبی | اعتبارسنجی آپلود فایل و کنترل ورودی |
| A09 Logging and Monitoring | محدود | برای پروژه دانشجویی لاگ کامل پیاده‌سازی نشده |
| A10 SSRF | کم‌ریسک | در نسخه محلی کمتر کاربرد دارد |

---

## ۸. گالری تصاویر محیط برنامه

پس از اجرای پروژه روی XAMPP، اسکرین‌شات‌های زیر تهیه و در پوشه `docs/screenshots/` قرار داده شوند.

### ۸.۱. سمت کاربر — Storefront

| کاتالوگ محصولات | سبد خرید |
|---|---|
| ![کاتالوگ محصولات](docs/screenshots/client-catalog.png) | ![سبد خرید](docs/screenshots/client-cart.png) |
| *مرور محصولات آرایشی، برندها و دسته‌بندی‌ها* | *مشاهده اقلام انتخابی و محاسبه مبلغ کل* |

| صفحه تسویه | تاریخچه سفارشات |
|---|---|
| ![تسویه حساب](docs/screenshots/client-checkout.png) | ![سفارشات مشتری](docs/screenshots/client-orders.png) |
| *ورود آدرس، انتخاب روش پرداخت و ثبت نهایی* | *مشاهده وضعیت سفارش‌ها و پیگیری* |

### ۸.۲. سمت مدیریت — Admin Dashboard

| داشبورد مدیریتی | مدیریت محصولات |
|---|---|
| ![داشبورد ادمین](docs/screenshots/admin-dashboard.png) | ![مدیریت محصولات](docs/screenshots/admin-products.png) |
| *نمایش شاخص‌های فروش، سفارش‌ها و موجودی* | *افزودن، ویرایش و حذف محصولات* |

| مدیریت انبار | مدیریت سفارشات |
|---|---|
| ![مدیریت انبار](docs/screenshots/admin-inventory.png) | ![مدیریت سفارشات](docs/screenshots/admin-orders.png) |
| *Stock In / Stock Out و کنترل Variantها* | *تغییر وضعیت سفارش و رسیدگی به پرداخت* |

> اگر هنوز اسکرین‌شات‌ها را اضافه نکرده‌اید، می‌توانید موقتاً این بخش را با توضیح «در نسخه نهایی گزارش، تصاویر اضافه خواهد شد» تحویل دهید؛ اما برای دفاع نهایی حتماً تصاویر واقعی از `http://localhost/cbpos/` و `http://localhost/cbpos/admin/` اضافه کنید.

---

## ۹. چک‌لیست آزمون‌های پذیرش و دفاع

برای نشان دادن کیفیت مهندسی پروژه، موارد زیر به‌عنوان آزمون‌های دستی پیشنهاد می‌شوند.

| شناسه آزمون | سناریو | ورودی | نتیجه مورد انتظار |
|---|---|---|---|
| TC-01 | ورود مدیر | `admin / admin123` | هدایت به داشبورد ادمین |
| TC-02 | ثبت‌نام مشتری | فرم Register با داده معتبر | ایجاد حساب و امکان ورود |
| TC-03 | افزودن به سبد | انتخاب محصول و Variant | ثبت رکورد در `cart` |
| TC-04 | ثبت سفارش موفق | موجودی کافی | ایجاد `order` و `order_items` و کسر موجودی |
| TC-05 | ثبت سفارش با موجودی ناکافی | تعداد بیشتر از موجودی | Rollback و پیام خطا |
| TC-06 | تغییر وضعیت سفارش | مدیر وضعیت را Confirm/Packed/Shipped می‌کند | به‌روزرسانی `orders.status` |
| TC-07 | لغو سفارش | سفارش Pending لغو شود | بازگشت موجودی در صورت پیاده‌سازی سیاست لغو |
| TC-08 | SQL Injection | ورودی `' OR 1=1 --` در فرم لاگین | ورود موفق نباشد |
| TC-09 | آپلود فایل مخرب | فایل PHP با پسوند تصویر | رد شدن توسط اعتبارسنجی MIME/پسوند |
| TC-10 | گزارش فروش | بازه تاریخ معتبر | نمایش گزارش تاریخ‌وار |

### نمونه پرسش‌های دفاع

1. چرا از Prepared Statements استفاده شده است؟
2. تفاوت `password_hash` با MD5 چیست؟
3. Session Fixation چگونه رخ می‌دهد و `session_regenerate_id` چه می‌کند؟
4. اگر دو کاربر همزمان آخرین موجودی یک کالا را بخرند، چه اتفاقی می‌افتد؟
5. نقش جدول `order_items` چیست؟
6. چرا موجودی بر اساس Variant مدیریت می‌شود؟
7.差异 بین Stock In و Stock Out چیست؟
8. چرا دیاگرام ERD برای درک پایگاه داده مهم است؟
9. معماری لایه‌ای چه مزیتی دارد؟
10. این سیستم برای محیط production چه کمبودهایی دارد؟

---

## ۱۰. محدودیت‌ها، نتیجه‌گیری و توسعه آتی

### ۱۰.۱. محدودیت‌های فعلی

- اجرای پروژه بر بستر محلی XAMPP است.
- درگاه پرداخت واقعی بانکی متصل نشده است.
- تست خودکار واحد و یکپارچه‌سازی کامل ندارد.
- سیستم لاگ‌گیری و مانیتورینگ پیشرفته پیاده‌سازی نشده است.
- برای استفاده تجاری واقعی نیاز به hardening، backup، HTTPS و مدیریت خطا دارد.

### ۱۰.۲. نتیجه‌گیری

پروژه CBPOS در این نسخه، از یک سورس آموزشی پایه فراتر رفته و به یک نمونه تحلیل‌شده، مستندسازی‌شده و بهبودیافته تبدیل شده است. مهم‌ترین دستاوردهای پروژه عبارتند از:

- مهندسی معکوس سیستم موجود
- شناسایی ریسک‌های امنیتی و معماری
- بهبود فرآیندهای احراز هویت و ثبت سفارش
- مستندسازی با ۱۰ دیاگرام حرفه‌ای
- ارائه راهنمای راه‌اندازی دقیق روی XAMPP
- آماده‌سازی بستر برای توسعه‌های آینده

### ۱۰.۳. توسعه آتی

1. اتصال به درگاه پرداخت واقعی ایرانی مانند شاپرک/زرین‌پال/آیدی‌پی
2. پیاده‌سازی RESTful API برای اپلیکیشن موبایل
3. افزودن سیستم تخفیف، کوپن و کمپین فروش
4. پیاده‌سازی تست‌های PHPUnit و Pest
5. افزودن لاگ‌گیری مرکزی و پنل مانیتورینگ
6. بهبود سئو و تولید صفحه محصول پویا
7. افزودن موتور پیشنهاد محصول بر اساس خریدهای قبلی
8. مهاجرت به Framework مدرن مانند Laravel در نسخه‌های آینده

---

## ۱۱. منابع و مستندات

- مخزن پروژه:  
  [https://github.com/Silent-Galaxy/cbpos](https://github.com/Silent-Galaxy/cbpos)

- منبع پایه سورس‌کد:  
  [https://www.sourcecodester.com/php/15181/cosmetics-and-beauty-product-online-store-phpoop-free-source-code.html](https://www.sourcecodester.com/php/15181/cosmetics-and-beauty-product-online-store-phpoop-free-source-code.html)

- ویرایشگر آنلاین PlantUML:  
  [https://editor.plantuml.com/](https://editor.plantuml.com/)

- مستندات PHP — Password Hashing:  
  [https://www.php.net/manual/en/function.password-hash.php](https://www.php.net/manual/en/function.password-hash.php)

- مستندات PHP — MySQLi Prepared Statements:  
  [https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php](https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php)

- مستندات PHP — session_regenerate_id:  
  [https://www.php.net/manual/en/function.session-regenerate-id.php](https://www.php.net/manual/en/function.session-regenerate-id.php)

- OWASP Top Ten 2021:  
  [https://owasp.org/www-project-top-ten/](https://owasp.org/www-project-top-ten/)

- OWASP Session Management Cheat Sheet:  
  [https://cheatsheetseries.owasp.org/cheatsheets/Session_Management_Cheat_Sheet.html](https://cheatsheetseries.owasp.org/cheatsheets/Session_Management_Cheat_Sheet.html)

- OWASP File Upload Cheat Sheet:  
  [https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html](https://cheatsheetseries.owasp.org/cheatsheets/File_Upload_Cheat_Sheet.html)

---

## تهیه‌کننده

**دانشجو:** امیرعلی صالح پور  
**استاد راهنما:** جناب استاد عباس حیدری پاشاکی  
**دانشکده فنی و حرفه‌ای شهید چمران رشت**  
**مقطع:** کارشناسی ناپیوسته — مهندسی حرفه‌ای کامپیوتر، گرایش نرم‌افزار  
**تاریخ:** آبان‌ماه ۱۴۰