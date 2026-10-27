# 🧴 CBPOS — سامانه مدیریت و فروشگاه برخط محصولات آرایشی و بهداشتی

<p align="center">
  <img src="https://img.shields.io/badge/Project-Bachelor%20Thesis-0D6EFD?style=for-the-badge" alt="Bachelor Thesis">
  <img src="https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Database-MariaDB%2FMySQL-003545?style=for-the-badge&logo=mysql&logoColor=white" alt="Database">
  <img src="https://img.shields.io/badge/Stack-XAMPP-FB7A24?style=for-the-badge" alt="XAMPP">
  <img src="https://img.shields.io/badge/Diagrams-PlantUML-6B4FBB?style=for-the-badge" alt="PlantUML">
</p>

<p align="center">
  <strong>
    Cosmetics & Beauty Product Online Store — CBPOS
  </strong>
</p>

<p align="center">
  پروژه پایانی دوره کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر — گرایش نرم‌افزار<br>
  دانشکده فنی و حرفه‌ای شهید چمران رشت (روزانه)
</p>

---

## 📌 مشخصات پروژه

| مشخصه | اطلاعات |
|:---|:---|
| **نام پروژه** | سامانه مدیریت و فروشگاه برخط محصولات آرایشی و بهداشتی (CBPOS) |
| **دانشجو** | امیرعلی صالح‌پور |
| **استاد راهنما** | جناب آقای عباس حیدری‌پاشاکی |
| **مقطع و رشته** | کارشناسی ناپیوسته — مهندسی حرفه‌ای کامپیوتر (نرم‌افزار) |
| **دانشگاه** | دانشکده فنی و حرفه‌ای شهید چمران رشت (روزانه) |
| **تاریخ ارزیابی / دفاع** | آبان‌ماه ۱۴۰ (1405/08) |
| **مخزن توسعه** | [Silent-Galaxy/cbpos](https://github.com/Silent-Galaxy/cbpos) |
| **منبع پایه / هسته اولیه** | [SourceCodester — Cosmetics and Beauty Product Online Store](https://www.sourcecodester.com/php/15181/cosmetics-and-beauty-product-online-store-phpoop-free-source-code.html) |
| **بستر اجرا** | XAMPP (Apache + MariaDB/MySQL + PHP OOP) |
| **آدرس سمت کاربر** | `http://localhost/cbpos/` |
| **آدرس سمت مدیریت** | `http://localhost/cbpos/admin/` |

---

## 📑 فهرست مطالب

1. [چکیده و معرفی سامانه](#1-چکیده-و-معرفی-سامانه)
2. [تحلیل نقادانه، مهندسی معکوس و بازمهندسی نرم‌افزار](#2-تحلیل-نقادانه-مهندسی-معکوس-و-بازمهندسی-نرمافزار)
3. [معماری و قابلیت‌های کارکردی](#3-معماری-و-قابلیتهای-کارکردی)
4. [راهنمای گام‌به‌گام راه‌اندازی روی XAMPP](#4-راهنمای-گامبهگام-راهاندازی-روی-xampp)
5. [ساختار فایل‌ها و ماژول‌ها](#5-ساختار-فایلها-و-ماژولها)
6. [مجموعه ۱۰ دیاگرام مهندسی نرم‌افزار (PlantUML)](#6-مجموعه-۱۰-دیاگرام-مهندسی-نرمافزار-plantuml)
7. [ارزیابی امنیتی و نگاشت به OWASP Top 10](#7-ارزیابی-امنیتی-و-نگاشت-به-owasp-top-10)
8. [گالری تصاویر محیط برنامه](#8-گالری-تصاویر-محیط-برنامه)
9. [محدودیت‌ها، چالش‌ها و چشم‌انداز توسعه آتی](#9-محدودیتها-چالشها-و-چشمانداز-توسعه-آتی)
10. [نتیجه‌گیری](#10-نتیجهگیری)
11. [منابع و ارجاعات](#11-منابع-و-ارجاعات)

---

## 1. چکیده و معرفی سامانه

**CBPOS** یک سامانه تحت وب فروشگاهی برای مدیریت و فروش آنلاین محصولات آرایشی، بهداشتی و مراقبت پوستی است. این پروژه با رویکرد **بازمهندسی نرم‌افزار (Software Re-engineering)** بر روی یک کد پایه PHP/OOP توسعه یافته و هدف اصلی آن، تبدیل یک نمونه اولیه آموزشی به یک سیستم قابل دفاع در سطح کارشناسی است؛ سیستمی که هم از نظر **کارکردی**، هم از نظر **امنیتی** و هم از نظر **مستندسازی مهندسی نرم‌افزار** قابل ارزیابی باشد.

سامانه دارای دو لایه کاربری مستقل است:

### 👤 1.1. پورتال مشتریان (Storefront / Client-Side)

- مرور کاتالوگ محصولات بر اساس دسته‌بندی و برند
- جستجوی کالا
- مشاهده موجودی لحظه‌ای بر اساس تنوع محصول (Variant)
- مدیریت سبد خرید
- ثبت سفارش و تکمیل اطلاعات تحویل
- مشاهده تاریخچه و وضعیت سفارش‌ها

### 🛠️ 1.2. پیشخوان مدیریت (Admin Dashboard)

- ورود امن مدیران
- مدیریت محصولات، برندها و دسته‌بندی‌ها
- مدیریت موجودی انبار (Stock In / Stock Out)
- مدیریت چرخه حیات سفارش‌ها
- مشاهده داشبورد آماری و گزارش‌های ساده
- تنظیمات اطلاعات عمومی فروشگاه

---

## 2. تحلیل نقادانه، مهندسی معکوس و بازمهندسی نرم‌افزار

یکی از ارکان مهم پروژه‌های کارشناسی، صرفاً «اجرا کردن کد» نیست؛ بلکه توانایی **تحلیل انتقادی**، **شناسایی نقاط ضعف معماری/امنیتی** و **ارائه اصلاحات مستند** است. در این پروژه، کد پایه از SourceCodester دریافت شد و سپس فرآیند مهندسی معکوس و بازمهندسی روی آن انجام گرفت.

### 2.1. خلاصه وضعیت نسخه پایه (Legacy)

نسخه اولیه دارای مشکلات معماری و امنیتی زیر بود:

| # | مشکل در نسخه پایه | ریسک مهندسی / امنیتی |
|:---:|:---|:---|
| 1 | استفاده از کوئری‌های متنی خام در SQL | آسیب‌پذیری تزریق SQL (SQL Injection) |
| 2 | ذخیره رمز عبور با MD5 بدون Salt | شکست راحت هش‌ها و حملات Rainbow Table |
| 3 | رندر مستقیم ورودی کاربر بدون Sanitization | XSS ذخیره‌شده و بازتابی |
| 4 | عدم کنترل همزمانی در کسر موجودی | Overselling و مغایرت انبار در خرید همزمان |
| 5 | آپلود ناامن تصویر بدون بررسی MIME/Content | احتمال آپلود فایل مخرب و RCE |
| 6 | جفت‌شدگی بالا بین لایه نمایش و منطق داده | کاهش Readability، Testability و Maintainability |

### 2.2. اقدامات اصلاحی انجام‌شده در نسخه بازمهندسی‌شده

| # | اصلاح مهندسی‌شده | هدف علمی / استاندارد مرتبط |
|:---:|:---|:---|
| 1 | استفاده از Prepared Statements / Parameterized Queries | mitigation SQL Injection — OWASP A03:2021 |
| 2 | جایگزینی MD5 با `password_hash()` و الگوریتم BCRYPT | Cryptographic Failure Mitigation — OWASP A02:2021 |
| 3 | اعتبارسنجی و پاکسازی ورودی‌ها + Escape خروجی | XSS Mitigation |
| 4 | استفاده از تراکنش پایگاه داده و قفل ردیف (`FOR UPDATE`) در فرآیند سفارش | ACID Compliance و کنترل Race Condition |
| 5 | بررسی پسوند، MIME Type، حجم فایل و تولید نام یکتا برای آپلود | Secure File Upload |
| 6 | جداسازی نسبی لایه‌های Presentation / Business Logic / Data Access | Separation of Concerns و SRP |

### 2.3. ماتریس شواهد قابل ارائه برای دفاع

برای اینکه پروژه صرفاً ادعا نباشد، شواهد زیر پیشنهاد می‌شود در زمان دفاع ارائه شوند:

| ادعای پروژه | شاهد فنی | محل بررسی |
|:---|:---|:---|
| جلوگیری از SQL Injection | استفاده از `prepare()` و `bind_param()` | کلاس‌های مرتبط با ورود، ثبت‌نام و عملیات CRUD |
| ذخیره امن رمز عبور | وجود `password_hash()` هنگام ثبت و `password_verify()` هنگام ورود | ماژول احراز هویت |
| محافظت از نشست | فراخوانی `session_regenerate_id(true)` پس از لاگین موفق | کنترلر ورود |
| کنترل موجودی در سفارش | شروع تراکنش، اعتبارسنجی موجودی، Commit/Rollback | فرآیند Checkout |
| امنیت آپلود تصویر | بررسی نوع فایل، حجم، تغییر نام یکتا | ماژول مدیریت محصولات |
| مستندسازی مهندسی نرم‌افزار | ۱۰ دیاگرام UML/PlantUML | بخش دیاگرام‌های همین README |

---

## 3. معماری و قابلیت‌های کارکردی

### 3.1. معماری کلی

سامانه بر پایه معماری لایه‌ای ساده اما قابل دفاع طراحی شده است:

```text
Presentation Layer
        ↓
Business Logic / Controllers
        ↓
Data Access Layer (DBConnection / mysqli)
        ↓
Persistence Layer (MySQL/MariaDB + Local File Storage)
```

### 3.2. قابلیت‌های سمت مشتری

- نمایش محصولات بر اساس دسته و برند
- فیلتر و جستجوی ساده
- مشاهده تنوع‌های کالا و موجودی هر Variant
- افزودن به سبد خرید
- ویرایش تعداد اقلام سبد
- ثبت سفارش با آدرس تحویل
- انتخاب شیوه پرداخت (در نسخه فعلی عمدتاً شبیه‌سازی/فاکتور داخلی)
- مشاهده تاریخچه سفارش‌ها

### 3.3. قابلیت‌های سمت مدیریت

- داشبورد مدیریتی
- مدیریت کاربران مدیر
- مدیریت دسته‌بندی‌ها
- مدیریت برندها
- مدیریت محصولات
- مدیریت موجودی و تنوع کالاها
- مدیریت سفارش‌ها و تغییر وضعیت آن‌ها
- تنظیمات اطلاعات فروشگاه

---

## 4. راهنمای گام‌به‌گام راه‌اندازی روی XAMPP

> این پروژه به‌طور خاص برای اجرای محلی روی **XAMPP** تنظیم و تست شده است.

### 4.1. پیش‌نیازها

- XAMPP با پشتیبانی از PHP نسخه 7.4 تا 8.2
- MySQL/MariaDB فعال
- مرورگر مدرن (Chrome / Firefox / Edge)
- Git (اختیاری؛ در صورت نبود Git می‌توانید ZIP را دانلود و Extract کنید)
- فعال بودن افزونه GD در PHP برای پردازش تصاویر

---

### 4.2. گام اول: قرار دادن پروژه در `htdocs`

#### روش الف) با Git

```bash
cd C:/xampp/htdocs
git clone https://github.com/Silent-Galaxy/cbpos.git
```

#### روش ب) بدون Git

1. از مخزن GitHub گزینه **Code → Download ZIP** را بزنید.
2. فایل ZIP را Extract کنید.
3. پوشه حاصل را دقیقاً با نام `cbpos` در مسیر زیر قرار دهید:

```text
C:/xampp/htdocs/cbpos
```

> ⚠️ اگر نام پوشه چیز دیگری باشد، آدرس `http://localhost/cbpos/` کار نخواهد کرد.

---

### 4.3. گام دوم: فعال‌سازی Apache و MySQL

1. XAMPP Control Panel را باز کنید.
2. سرویس‌های زیر را Start کنید:
   - Apache
   - MySQL / MariaDB

---

### 4.4. گام سوم: فعال‌سازی GD Library در PHP

1. فایل زیر را باز کنید:

```text
C:/xampp/php/php.ini
```

2. عبارت زیر را جستجو کنید:

```ini
;extension=gd
```

3. سمیکالن ابتدای خط را حذف کنید تا به شکل زیر درآید:

```ini
extension=gd
```

4. فایل را ذخیره کنید.
5. Apache را از XAMPP Control Panel Restart کنید.

---

### 4.5. گام چهارم: ساخت پایگاه داده و Import اسکریپت

1. به آدرس زیر بروید:

```text
http://localhost/phpmyadmin/
```

2. یک دیتابیس جدید با نام دقیق زیر بسازید:

```text
cbpos_db
```

3. Collation پیشنهادی:

```text
utf8mb4_general_ci
```

4. وارد دیتابیس `cbpos_db` شوید.
5. به تب **Import** بروید.
6. فایل SQL پروژه را از مسیر زیر انتخاب و Import کنید:

```text
C:/xampp/htdocs/cbpos/database/cbpos_db.sql
```

---

### 4.6. گام پنجم: بررسی تنظیمات اتصال به دیتابیس

معمولاً در فایل‌های پیکربندی پروژه، مقادیر زیر استفاده می‌شوند:

```php
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "cbpos_db");
```

اگر رمز root در XAMPP شما تغییر کرده باشد، باید `DB_PASSWORD` را اصلاح کنید.

---

### 4.7. گام ششم: دسترسی به سامانه

#### سمت کاربر

```text
http://localhost/cbpos/
```

#### سمت مدیریت

```text
http://localhost/cbpos/admin/
```

---

### 4.8. اطلاعات ورود پیش‌فرض

| نقش | نام کاربری / ایمیل | رمز عبور |
|:---|:---|:---|
| مدیر کل سیستم | `admin` | `admin123` |
| مشتری | از طریق منوی Register ثبت‌نام کنید | رمز دلخواه کاربر |

> 🔐 توصیه امنیتی: پس از اجرای اولیه، حتماً رمز پیش‌فرض ادمین را تغییر دهید.

---

### 4.9. عیب‌یابی رایج

| مشکل | علت احتمالی | راه‌حل |
|:---|:---|:---|
| خطای 404 در `http://localhost/cbpos/` | نام پوشه پروژه اشتباه است | پوشه باید دقیقاً `cbpos` نام داشته باشد |
| خطای اتصال به دیتابیس | MySQL روشن نیست یا رمز root تغییر کرده | سرویس MySQL را Start کنید و پیکربندی را بررسی کنید |
| تصاویر آپلود نمی‌شوند | GD فعال نیست یا پوشه `uploads` writable نیست | `extension=gd` را فعال کنید و دسترسی پوشه را بررسی کنید |
| حروف فارسی به‌هم‌ریخته نمایش داده می‌شود | انکودینگ دیتابیس/جدول مناسب نیست | از `utf8mb4` استفاده کنید |
| Apache روی پورت 80 اجرا نمی‌شود | IIS یا برنامه دیگری پورت 80 را اشغال کرده | سرویس مزاحم را ببندید یا پورت Apache را تغییر دهید |

---

## 5. ساختار فایل‌ها و ماژول‌ها

```text
cbpos/
├── admin/                  # پنل مدیریت
│   ├── home.php            # داشبورد مدیریتی
│   ├── inc/                # هدر، منو و کامپوننت‌های ادمین
│   ├── inventory/          # مدیریت موجودی انبار
│   ├── orders/             # مدیریت سفارش‌ها
│   ├── product/            # مدیریت محصولات
│   ├── system_info/        # تنظیمات اطلاعات فروشگاه
│   └── index.php           # ورود مدیران
│
├── classes/                # لایه منطق شیءگرا و دسترسی به داده
│   ├── DBConnection.php    # اتصال به پایگاه داده
│   ├── Login.php           # احراز هویت و مدیریت نشست
│   ├── Master.php          # عملیات CRUD و فرآیندهای مرکزی
│   └── SystemSettings.php  # تنظیمات سیستمی
│
├── database/               # اسکریپت پایگاه داده
│   └── cbpos_db.sql
│
├── dist/                   # فایل‌های استاتیک CSS/JS/Fonts
├── libs/                   # کتابخانه‌ها و افزونه‌های جانبی
├── uploads/                # تصاویر بارگذاری‌شده محصولات
│
├── index.php               # صفحه اصلی فروشگاه
├── initialize.php          # مقداردهی اولیه و تنظیمات عمومی
├── cart.php                # سبد خرید
├── checkout.php            # تسویه و ثبت سفارش
├── products.php            # لیست و فیلتر محصولات
└── README.md               # مستند پروژه
```

---

## 6. مجموعه ۱۰ دیاگرام مهندسی نرم‌افزار (PlantUML)

> 💡 **نحوه استفاده:**  
> کد هر دیاگرام در بخش `<details>` آمده است. برای نمایش حرفه‌ای در GitHub:
>
> 1. کد PlantUML را کپی کنید.
> 2. در [PlantUML Web Editor](https://editor.plantuml.com/) Paste کنید.
> 3. خروجی PNG یا SVG بگیرید.
> 4. فایل را در مسیر `docs/diagrams/` با نام پیشنهادی ذخیره کنید.
> 5. README به‌صورت خودکار تصویر را نمایش خواهد داد.

---

### دیاگرام ۱: نمودار موارد کاربرد جامع سامانه (Use Case Diagram)

این دیاگرام تعاملات دو بازیگر اصلی **مشتری** و **مدیر** را به‌همراه سیستم پرداخت/فاکتور نشان می‌دهد و روابط `include` و `extend` را مشخص می‌کند.

![دیاگرام ۱: Use Case Diagram](docs/diagrams/01-use-case.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۱: Use Case Diagram</summary>

```plantuml
@startuml
left to right direction
skinparam actorStyle awesome
skinparam packageStyle rectangle
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Tahoma"
skinparam usecase {
  BackgroundColor #E8F4FF
  BorderColor #0D6EFD
  ArrowColor #495057
}

actor "مشتری (Client)" as Client #0D6EFD
actor "مدیر (Admin)" as Admin #DC3545
actor "سیستم پرداخت / فاکتور (Payment System)" as Payment #198754

rectangle "CBPOS: فروشگاه آنلاین محصولات آرایشی و بهداشتی" {
  package "تعاملات مشتری" {
    usecase "مرور کاتالوگ و فیلتر محصولات" as UC_Browse
    usecase "جستجو بر اساس برند/دسته" as UC_Search
    usecase "مشاهده موجودی تنوع کالا" as UC_Stock
    usecase "مدیریت سبد خرید" as UC_Cart
    usecase "احراز هویت / ثبت‌نام" as UC_Auth
    usecase "ثبت سفارش و تسویه" as UC_Checkout
    usecase "پیگیری وضعیت سفارش" as UC_Track
  }

  package "مدیریت و انبار" {
    usecase "ورود امن پنل مدیریت" as UC_AdminLogin
    usecase "مدیریت محصولات و برندها" as UC_Products
    usecase "مدیریت موجودی (Stock In/Out)" as UC_Inventory
    usecase "مدیریت چرخه سفارش‌ها" as UC_Orders
    usecase "پیکربندی اطلاعات فروشگاه" as UC_Settings
    usecase "گزارش‌گیری فروش" as UC_Reports
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
UC_Checkout --> Payment : پردازش مالی / صدور فاکتور

Admin --> UC_AdminLogin
Admin --> UC_Products
Admin --> UC_Inventory
Admin --> UC_Orders
Admin --> UC_Settings
Admin --> UC_Reports

UC_Orders ..> UC_Inventory : <<include>>
@enduml
```

</details>

---

### دیاگرام ۲: نمودار کلاس‌های کلیدی و دامنه شیءگرا (Class Diagram)

این دیاگرام ساختار شیءگرای پروژه، کلاس‌های دسترسی به داده، کنترلرها و موجودیت‌های دامنه را نشان می‌دهد. هدف آن نمایش تفکیک مسئولیت‌ها بر پایه اصول SRP و SoC است.

![دیاگرام ۲: Class Diagram](docs/diagrams/02-class-diagram.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۲: Class Diagram</summary>

```plantuml
@startuml
skinparam classAttributeIconSize 0
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Tahoma"
skinparam class {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
  ArrowColor #2C3E50
}

class DBConnection {
  - host: String
  - username: String
  - password: String
  - database: String
  + conn: mysqli
  + __construct()
  + __destruct()
  + query(sql: String, params: array): mysqli_result
  + beginTransaction(): bool
  + commit(): bool
  + rollback(): bool
}

class SystemSettings {
  - settings: array
  + load(): void
  + get(field: String): String
  + set(field: String, value: String): bool
}

abstract class User {
  # id: int
  # firstname: String
  # lastname: String
  # username: String
  # passwordHash: String
  # dateAdded: datetime
  + {abstract} login(username: String, password: String): bool
  + {abstract} logout(): void
  + sanitize(input: String): String
}

class Administrator {
  - role: int
  + saveUser(data: array): int
  + deleteUser(id: int): bool
  + listUsers(): array
}

class ClientCustomer {
  - email: String
  - contact: String
  - address: Text
  - status: int
  + register(data: array): bool
  + updateProfile(data: array): bool
  + getOrderHistory(): array
}

class MasterAction {
  - db: DBConnection
  + saveCategory(data: array): int
  + saveBrand(data: array): int
  + saveProduct(data: array): int
  + saveInventory(data: array): int
  + addToCart(clientId: int, inventoryId: int, qty: double): int
  + updateCartQuantity(cartId: int, qty: double): bool
  + placeOrder(clientId: int, orderData: array): int
  + updateOrderStatus(orderId: int, status: int): bool
}

class Product {
  + id: int
  + categoryId: int
  + brandId: int
  + name: String
  + description: Text
  + status: int
  + getVariants(): array
  + getCurrentStock(): int
}

class Inventory {
  + id: int
  + productId: int
  + variant: String
  + quantity: double
  + price: double
  + lockForUpdate(): bool
  + deduct(qty: double): bool
}

class Cart {
  + id: int
  + clientId: int
  + inventoryId: int
  + quantity: double
  + clear(): bool
}

class Order {
  + id: int
  + clientId: int
  + deliveryAddress: Text
  + paymentMethod: String
  + totalAmount: double
  + status: int
  + paid: int
  + getItems(): array
  + markPaid(): bool
}

class OrderItem {
  + id: int
  + orderId: int
  + inventoryId: int
  + quantity: double
  + price: double
}

User <|-- Administrator
User <|-- ClientCustomer

MasterAction --> DBConnection : uses
MasterAction ..> Product : manages
MasterAction ..> Inventory : manages
MasterAction ..> Cart : manages
MasterAction ..> Order : processes

Product "1" --> "0..*" Inventory : has variants
Cart "many" --> "1" Inventory : references
Order "1" *-- "many" OrderItem : contains
OrderItem "many" --> "1" Inventory : references
ClientCustomer "1" --> "many" Order : places
ClientCustomer "1" --> "many" Cart : owns
SystemSettings --> DBConnection : loads from
@enduml
```

</details>

---

### دیاگرام ۳: مدل داده‌ای و موجودیت–رابطه پایگاه داده (ERD)

این دیاگرام ساختار نرمال‌شده جداول پایگاه داده، کلیدهای اصلی/خارجی و روابط بین موجودیت‌های اصلی سامانه را نشان می‌دهد.

![دیاگرام ۳: ERD](docs/diagrams/03-erd.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۳: Entity Relationship Diagram</summary>

```plantuml
@startuml
skinparam linetype ortho
skinparam roundcorner 5
skinparam shadowing false
skinparam defaultFontName "Tahoma"
skinparam entity {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
}

entity "system_info" as sys {
  * id : int <<PK>>
  --
  meta_field : text
  meta_value : text
}

entity "users" as users {
  * id : int <<PK>>
  --
  firstname : varchar(250)
  lastname : varchar(250)
  username : text
  password : text
  avatar : text
  type : tinyint
  date_added : datetime
}

entity "clients" as clients {
  * id : int <<PK>>
  --
  firstname : varchar(250)
  lastname : varchar(250)
  gender : varchar(20)
  contact : varchar(50)
  email : text
  password : text
  default_delivery_address : text
  status : tinyint
  date_created : datetime
}

entity "categories" as categories {
  * id : int <<PK>>
  --
  category : varchar(250)
  description : text
  status : tinyint
  delete_flag : tinyint
  date_created : datetime
}

entity "brands" as brands {
  * id : int <<PK>>
  --
  name : varchar(250)
  description : text
  image_path : text
  status : tinyint
  delete_flag : tinyint
  date_created : datetime
}

entity "products" as products {
  * id : int <<PK>>
  --
  category_id : int <<FK>>
  brand_id : int <<FK>>
  name : varchar(250)
  description : text
  status : tinyint
  delete_flag : tinyint
  date_created : datetime
}

entity "inventory" as inventory {
  * id : int <<PK>>
  --
  product_id : int <<FK>>
  quantity : double
  price : double
  variant : varchar(250)
  date_created : datetime
}

entity "cart" as cart {
  * id : int <<PK>>
  --
  client_id : int <<FK>>
  inventory_id : int <<FK>>
  quantity : double
  date_created : datetime
}

entity "orders" as orders {
  * id : int <<PK>>
  --
  client_id : int <<FK>>
  delivery_address : text
  total_amount : double
  payment_method : varchar(100)
  status : tinyint
  paid : tinyint
  date_created : datetime
}

entity "order_items" as order_items {
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
clients ||--o{ orders : "سفارش ثبت می‌کند"
orders ||--|{ order_items : "شامل اقلام است"
inventory ||--o{ order_items : "به فاکتور ارجاع می‌شود"
@enduml
```

</details>

---

### دیاگرام ۴: نمودار توالی احراز هویت و امنیت نشست‌ها (Authentication Sequence Diagram)

این دیاگرام فرآیند ورود کاربر/مدیر را با تأکید بر CSRF، Prepared Statement، `password_verify()` و جلوگیری از Session Fixation نشان می‌دهد.

![دیاگرام ۴: Authentication Sequence Diagram](docs/diagrams/04-authentication-sequence.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۴: Authentication Sequence Diagram</summary>

```plantuml
@startuml
autonumber
skinparam roundcorner 5
skinparam shadowing false
skinparam defaultFontName "Tahoma"
skinparam sequence {
  ArrowColor #2C3E50
  LifeLineBorderColor #2C3E50
  ParticipantBackgroundColor #F8F9FA
}

actor "کاربر / مشتری" as User #0D6EFD
boundary "فرم ورود (Login UI)" as UI
control "Login.php\n(Auth Controller)" as AuthCtrl
database "MySQL / MariaDB" as DB
control "Session Engine" as Session

User -> UI : Username, Password, CSRF Token
activate UI
UI -> AuthCtrl : POST login request
activate AuthCtrl

AuthCtrl -> AuthCtrl : Verify CSRF token

alt Invalid CSRF token
  AuthCtrl --> UI : 403 Security token mismatch
  UI --> User : Show security error
else Valid token
  AuthCtrl -> DB : SELECT user by username (Prepared Statement)
  activate DB
  DB --> AuthCtrl : User record + password hash
  deactivate DB

  AuthCtrl -> AuthCtrl : password_verify(input, hash)

  alt Wrong password
    AuthCtrl --> UI : Invalid username/password
    UI --> User : Show login error
  else Correct credentials
    AuthCtrl -> Session : session_regenerate_id(true)
    activate Session
    Session --> AuthCtrl : New secure session ID
    deactivate Session

    AuthCtrl -> Session : Store userId, role, csrf token
    AuthCtrl --> UI : Success + redirect URL
    UI --> User : Redirect to dashboard/store
  end
end

deactivate AuthCtrl
deactivate UI
@enduml
```

</details>

---

### دیاگرام ۵: نمودار توالی ثبت سفارش، قفل‌گذاری موجودی و پرداخت (Checkout Sequence Diagram)

این دیاگرام یکی از مهم‌ترین بخش‌های پروژه است؛ زیرا یکپارچگی داده‌ها در فرآیند کسر موجودی و ثبت سفارش را با تراکنش ACID نشان می‌دهد.

![دیاگرام ۵: Checkout Sequence Diagram](docs/diagrams/05-checkout-sequence.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۵: Checkout Sequence Diagram</summary>

```plantuml
@startuml
autonumber
skinparam roundcorner 5
skinparam shadowing false
skinparam defaultFontName "Tahoma"
skinparam sequence {
  ArrowColor #2C3E50
  ParticipantBackgroundColor #F8F9FA
}

actor "مشتری (Client)" as Client #0D6EFD
boundary "Checkout Page" as View
control "Master.php\n(Order Controller)" as Controller
database "MySQL / MariaDB" as DB
boundary "Payment / Invoice Module" as Gateway

Client -> View : Confirm address + payment method
activate View
View -> Controller : place_order(orderData, cartItems)
activate Controller

Controller -> DB : START TRANSACTION
activate DB

loop For each cart item
  Controller -> DB : SELECT quantity FROM inventory WHERE id=? FOR UPDATE
  DB --> Controller : current stock
  Controller -> Controller : check stock >= requested qty
end

alt All items available
  Controller -> DB : INSERT INTO orders (...)
  DB --> Controller : order_id

  loop For each order item
    Controller -> DB : INSERT INTO order_items (...)
    Controller -> DB : UPDATE inventory SET quantity = quantity - ?
  end

  Controller -> DB : DELETE FROM cart WHERE client_id=?
  Controller -> DB : COMMIT TRANSACTION

  Controller --> View : Success + invoice number
  View -> Gateway : Generate receipt / tracking code
  Gateway --> View : Payment/reference status
  View --> Client : Show final purchase receipt

else Insufficient stock
  Controller -> DB : ROLLBACK TRANSACTION
  Controller --> View : Error: out of stock
  View --> Client : Show stock shortage message
end

deactivate DB
deactivate Controller
deactivate View
@enduml
```

</details>

---

### دیاگرام ۶: نمودار فعالیت گردش کار خرید از سبد تا تسویه (Checkout Activity Diagram)

این دیاگرام با Swimlane، مسئولیت‌های مشتری، سرور PHP و پایگاه داده را در فرآیند خرید تفکیک می‌کند.

![دیاگرام ۶: Checkout Activity Diagram](docs/diagrams/06-checkout-activity.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۶: Checkout Activity Diagram</summary>

```plantuml
@startuml
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Tahoma"

|Client|
start
:View product details and select variant;
:Add product to cart;

|PHP Web Server|
if (Valid user session?) then (yes)
  :Save cart record in database;
else (no)
  :Store temporary session or redirect to login;
endif

|Client|
:Open shopping cart;
:Proceed to checkout;
:Enter delivery address and payment method;
:Confirm final order;

|PHP Web Server|
:Begin database transaction;

|Database|
:Lock inventory rows using FOR UPDATE;

|PHP Web Server|
if (All requested stocks are sufficient?) then (yes)
  :Insert order into orders table;
  :Insert order items into order_items table;
  :Deduct quantities from inventory table;
  :Remove purchased items from cart table;
  :Commit transaction;

  |Client|
  :Show receipt, order ID and tracking status;
  stop

else (no)
  |PHP Web Server|
  :Rollback transaction;

  |Client|
  :Show out-of-stock error and ask to edit cart;
  stop
endif
@enduml
```

</details>

---

### دیاگرام ۷: نمودار فعالیت مدیریت زنجیره تأمین و انبارداری (Inventory Activity Diagram)

این دیاگرام فرآیند Stock In / Stock Out، کنترل تنوع کالا و هشدار موجودی کم را نشان می‌دهد.

![دیاگرام ۷: Inventory Activity Diagram](docs/diagrams/07-inventory-activity.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۷: Inventory Activity Diagram</summary>

```plantuml
@startuml
skinparam roundcorner 10
skinparam shadowing false
skinparam defaultFontName "Tahoma"

|Admin|
start
:Login to admin panel;
:Open inventory management module;
:View product list with variants and stock levels;

if (Operation type?) then (Stock In)
  :Select product and variant;
  :Enter incoming quantity and price;
  
  |PHP Server|
  :Validate positive numeric values;
  
  |Database|
  :Insert/update inventory record;
  :Increase total stock;

else (Stock Out / Adjustment)
  :Select product and variant;
  :Enter adjustment reason (damage, expiry, audit mismatch);
  :Enter outgoing quantity;
  
  |PHP Server|
  :Validate quantity and business rules;
  
  |Database|
  :Decrease inventory quantity;
endif

|PHP Server|
:Check safety stock threshold;

if (Stock below threshold?) then (yes)
  :Mark item as low stock warning;
else (no)
  :Keep normal availability status;
endif

|Admin|
:Refresh dashboard indicators and reports;
stop
@enduml
```

</details>

---

### دیاگرام ۸: نمودار ماشین حالت چرخه حیات سفارش (Order Lifecycle State Machine)

این دیاگرام وضعیت‌های معتبر سفارش و گذارهای مجاز بین آن‌ها را نشان می‌دهد؛ از ثبت اولیه تا تحویل یا لغو و بازگشت کالا به انبار.

![دیاگرام ۸: Order State Machine](docs/diagrams/08-order-state-machine.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۸: Order Lifecycle State Machine</summary>

```plantuml
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
skinparam defaultFontName "Tahoma"

[*] --> Pending : Customer completes order

state "0 | Pending\n(ثبت‌شده در انتظار)" as Pending
state "1 | Confirmed\n(تأییدشده)" as Confirmed
state "2 | Packed\n(بسته‌بندی‌شده)" as Packed
state "3 | Shipped\n(ارسال‌شده)" as Shipped
state "4 | Delivered\n(تحویل‌شده)" as Delivered
state "5 | Cancelled\n(لغوشده)" as Cancelled

Pending --> Confirmed : Sales operator confirms order
Pending --> Cancelled : Customer cancels or payment not approved
Confirmed --> Packed : Warehouse assigns barcode and packs items
Confirmed --> Cancelled : Physical supply not possible
Packed --> Shipped : Parcel handed to courier/postal service
Shipped --> Delivered : Customer confirms receipt
Cancelled --> [*] : Return items to inventory (Stock Restored)
Delivered --> [*] : Close financial cycle
@enduml
```

</details>

---

### دیاگرام ۹: نمودار قطعات و معماری لایه‌ای سامانه (Component Diagram)

این دیاگرام جداسازی لایه‌های رابط کاربری، منطق تجاری، دسترسی به داده و ماندگاری را نشان می‌دهد.

![دیاگرام ۹: Component Diagram](docs/diagrams/09-component-diagram.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۹: Component Diagram</summary>

```plantuml
@startuml
skinparam componentStyle uml2
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Tahoma"
skinparam package {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
}

package "Presentation Layer" {
  [Storefront UI] as ClientUI
  [Admin Dashboard] as AdminUI
  [AJAX / Fetch Engine] as Ajax
}

package "Business Logic Layer" {
  [Login Controller] as Auth
  [Catalog Master] as Catalog
  [Cart & Checkout Controller] as OrderEngine
  [System Settings Controller] as Config
}

package "Data Access Layer" {
  [DBConnection Wrapper] as DBLayer
  [Image Handler (GD)] as Img
  interface "MySQLi / PDO Driver" as Driver
}

package "Persistence Layer" {
  folder "Local File Storage" {
    [Upload Directory] as UploadStore
  }
  database "cbpos_db (MariaDB/MySQL)" as RDBMS
}

ClientUI ..> Ajax : sends user events
AdminUI ..> Ajax : sends admin commands
Ajax ..> Auth : login/session actions
Ajax ..> Catalog : product requests
Ajax ..> OrderEngine : cart/checkout actions
Catalog ..> Img : resize/optimize images
Img ..> UploadStore : stores media files
Auth ..> DBLayer : validates users
Catalog ..> DBLayer : reads/writes catalog data
OrderEngine ..> DBLayer : order transactions
Config ..> DBLayer : loads system settings
DBLayer ..> Driver : establishes DB connection
Driver ..> RDBMS : executes SQL queries
@enduml
```

</details>

---

### دیاگرام ۱۰: نمودار استقرار بستر سخت‌افزاری و نرم‌افزاری در XAMPP (Deployment Diagram)

این دیاگرام توپولوژی اجرای محلی پروژه روی XAMPP را نشان می‌دهد: مرورگر کلاینت، Apache، PHP Runtime، MariaDB/MySQL و File System.

![دیاگرام ۱۰: Deployment Diagram](docs/diagrams/10-deployment-diagram.png)

<details>
<summary>📐 کد PlantUML — دیاگرام ۱۰: Deployment Diagram</summary>

```plantuml
@startuml
skinparam node {
  BackgroundColor #F8F9FA
  BorderColor #2C3E50
}
skinparam artifactBackgroundColor #FFFFFF
skinparam roundcorner 8
skinparam shadowing false
skinparam defaultFontName "Tahoma"

node "Client PC / Mobile" as Client {
  artifact "Modern Browser\n(Chrome / Firefox / Edge)" as Browser
}

node "XAMPP Local Server" as XAMPP {
  node "Apache HTTP Server\n(Port 80/443)" as Apache {
    artifact "mod_rewrite" as Rewrite
    artifact "Session Security Module" as Sec
  }

  node "PHP Runtime\n(Zend Engine 7.4 - 8.2)" as PHP {
    artifact "GD Library" as GD
    artifact "MySQLi / PDO Driver" as Driver
    artifact "CBPOS PHP OOP Codebase" as App
  }

  node "MariaDB / MySQL Server\n(Port 3306)" as DBServer {
    database "cbpos_db" as DBSchema
  }

  folder "Local File System" {
    file "CBPOS Application Directory" as AppDir
    file "Uploads Directory" as UploadDir
  }
}

Browser --> Apache : HTTP / HTTPS
Apache --> PHP : executes PHP scripts
App --> GD : image processing
App --> Driver : SQL queries
Driver --> DBServer : TCP/IP Port 3306
DBServer --> DBSchema : database I/O
PHP --> AppDir : reads application source
PHP --> UploadDir : reads/writes product images
@enduml
```

</details>

---

## 7. ارزیابی امنیتی و نگاشت به OWASP Top 10

در این پروژه تلاش شده است که مهم‌ترین ریسک‌های امنیتی اپلیکیشن‌های وب بر اساس چارچوب **OWASP Top 10** شناسایی و کاهش یابند.

### 7.1. A03: Injection — جلوگیری از SQL Injection

#### الگوی ناامن در کد پایه

```php
$query = "SELECT * FROM users WHERE username = '" . $_POST['username'] . "'";
```

#### الگوی اصلاح‌شده

```php
$stmt = $this->conn->prepare("SELECT id, password, type FROM users WHERE username = ?");
$stmt->bind_param("s", $sanitized_username);
$stmt->execute();
$result = $stmt->get_result();
```

---

### 7.2. A02: Cryptographic Failures — جایگزینی MD5 با BCRYPT

#### ذخیره امن رمز عبور

```php
$hashed_password = password_hash($raw_password, PASSWORD_BCRYPT);
```

#### اعتبارسنجی امن هنگام ورود

```php
if (password_verify($input_password, $hashed_password)) {
    // authentication successful
}
```

---

### 7.3. A07: Identification and Authentication Failures — امنیت نشست

اقدامات انجام‌شده/پیشنهادشده:

- فراخوانی `session_regenerate_id(true)` پس از ورود موفق
- استفاده از توکن CSRF در فرم‌های حساس
- تعیین کوکی نشست با ویژگی‌های `HttpOnly` و `SameSite`
- محدودسازی دسترسی صفحات ادمین به نقش کاربری مناسب

---

### 7.4. A05/A08 — امنیت آپلود فایل

در ماژول بارگذاری تصاویر محصولات:

- بررسی پسوند مجاز
- بررسی MIME Type واقعی فایل
- محدودسازی حجم فایل
- تولید نام یکتا برای فایل
- غیرفعال‌سازی اجرای PHP در پوشه `uploads/`

---

### 7.5. کنترل همزمانی موجودی (Race Condition Mitigation)

برای جلوگیری از فروش بیش از موجودی در درخواست‌های همزمان:

- شروع تراکنش پایگاه داده
- خواندن موجودی با قفل ردیف (`SELECT ... FOR UPDATE`)
- کسر موجودی فقط در صورت کافی بودن انبار
- Rollback در صورت خطا
- Commit فقط پس از موفقیت کامل عملیات

---

## 8. گالری تصاویر محیط برنامه

> 📷 پس از اجرای پروژه، اسکرین‌شات‌های زیر را در مسیر `docs/screenshots/` قرار دهید.

### 8.1. محیط کاربری / فروشگاه آنلاین

| نمایه کاتالوگ فروشگاه | سبد خرید مشتری |
|:---:|:---:|
| ![کاتالوگ محصولات](docs/screenshots/client-catalog.png) | ![سبد خرید](docs/screenshots/client-cart.png) |
| *مرور محصولات، برندها و دسته‌بندی‌ها* | *مشاهده اقلام انتخابی و جمع کل* |

| صفحه تسویه حساب | تاریخچه سفارش‌های مشتری |
|:---:|:---:|
| ![تسویه حساب](docs/screenshots/client-checkout.png) | ![سفارش‌های مشتری](docs/screenshots/client-orders.png) |
| *وارد کردن آدرس و ثبت نهایی سفارش* | *مشاهده وضعیت سفارش‌ها* |

---

### 8.2. محیط مدیریت / Admin Panel

| داشبورد مدیریتی | مدیریت محصولات |
|:---:|:---:|
| ![داشبورد ادمین](docs/screenshots/admin-dashboard.png) | ![مدیریت محصولات](docs/screenshots/admin-products.png) |
| *نمایش شاخص‌های فروش و موجودی* | *تعریف کالا، برند و دسته‌بندی* |

| مدیریت انبار | مدیریت سفارش‌ها |
|:---:|:---:|
| ![مدیریت انبار](docs/screenshots/admin-inventory.png) | ![مدیریت سفارش‌ها](docs/screenshots/admin-orders.png) |
| *Stock In / Stock Out و کنترل موجودی* | *تغییر وضعیت سفارش و پیگیری فرآیند* |

---

## 9. محدودیت‌ها، چالش‌ها و چشم‌انداز توسعه آتی

برای ارزیابی علمی و صادقانه پروژه، محدودیت‌های نسخه فعلی نیز باید شفاف بیان شوند.

### 9.1. محدودیت‌های نسخه فعلی

- اجرای پروژه بر بستر محلی XAMPP است و هنوز روی هاست واقعی/سرور تولیدی استقرار نیافته است.
- ماژول پرداخت به‌صورت داخلی/شبیه‌سازی‌شده است و به درگاه بانکی واقعی متصل نیست.
- تست بار و همزمانی بالا به‌صورت صنعتی انجام نشده است؛ اگرچه منطق تراکنش و قفل ردیف برای کاهش Race Condition لحاظ شده است.
- پوشش تست خودکار (Unit Test / Integration Test) کامل نیست.
- رابط کاربری موبایل کاملاً Responsive در سطح اپلیکیشن نative نیست.

### 9.2. چشم‌انداز توسعه آتی

1. **توسعه RESTful API**  
   جداسازی کامل Backend از Frontend برای امکان توسعه اپلیکیشن موبایل با Flutter یا React Native.

2. **اتصال به درگاه پرداخت واقعی**  
   پیاده‌سازی ماژول پرداخت سازگار با درگاه‌های بانکی/واسط‌های پرداخت ایرانی.

3. **سیستم پیشنهاد هوشمند محصول**  
   استفاده از الگوریتم‌های پیشنهاددهنده بر اساس خریدهای قبلی، دسته‌بندی و رفتار کاربران.

4. **گزارش‌گیری پیشرفته مالی و انبار**  
   افزودن نمودارهای فروش، کالاهای پرفروش، نرخ مرجوعی و تحلیل موجودی.

5. **بهبود امنیت و انطباق بیشتر با OWASP ASVS**  
   افزودن Rate Limiting، لاگینگ امن، مدیریت بهتر خطاها و تست نفوذ محدود.

---

## 10. نتیجه‌گیری

پروژه CBPOS در قالب یک کارشناسی ناپیوسته نرم‌افزار، صرفاً یک فروشگاه آنلاین ساده نیست؛ بلکه یک تمرین جامع در زمینه **مهندسی معکوس، بازمهندسی نرم‌افزار، طراحی شیءگرا، امنیت اپلیکیشن‌های وب و مستندسازی مهندسی نرم‌افزار** است.  
نقطه قوت اصلی این پروژه، تبدیل یک کد پایه آموزشی به سیستمی است که:

- ساختار داده‌ای مشخص‌تری دارد،
- ریسک‌های امنیتی مهم آن شناسایی و کاهش یافته‌اند،
- فرآیندهای کلیدی مانند احراز هویت، ثبت سفارش و مدیریت موجودی با دیاگرام مستند شده‌اند،
- و برای دفاع دانشگاهی قابل توضیح، قابل اجرا و قابل ارزیابی است.

---

## 11. منابع و ارجاعات

- [GitHub Repository — Silent-Galaxy/cbpos](https://github.com/Silent-Galaxy/cbpos)
- [SourceCodester — Cosmetics and Beauty Product Online Store (PHP/OOP)](https://www.sourcecodester.com/php/15181/cosmetics-and-beauty-product-online-store-phpoop-free-source-code.html)
- [PlantUML Web Editor](https://editor.plantuml.com/)
- [OWASP Top Ten](https://owasp.org/www-project-top-ten/)
- [PHP Manual — password_hash()](https://www.php.net/manual/en/function.password-hash.php)
- [PHP Manual — mysqli::prepare()](https://www.php.net/manual/en/mysqli.prepare.php)
- [PHP Manual — session_regenerate_id()](https://www.php.net/manual/en/function.session-regenerate-id.php)
- [Apache Friends — XAMPP](https://www.apachefriends.org/)

---

## 🎓 اطلاعات تکمیلی تحویل پروژه

| مورد | توضیح |
|:---|:---|
| **دانشجو** | امیرعلی صالح‌پور |
| **استاد راهنما** | جناب آقای عباس حیدری‌پاشاکی |
| **رشته / مقطع** | کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر — نرم‌افزار |
| **دانشگاه** | دانشکده فنی و حرفه‌ای شهید چمران رشت (روزانه) |
| **تاریخ پیگیری / ارزیابی** | آبان ۱۴۰ (1405/08) |
| **نوع پروژه** | بازمهندسی و توسعه سامانه فروشگاهی تحت وب |
| **بستر اجرای آموزش‌دیده** | XAMPP محلی |

---

> This project is prepared as an academic bachelor-level software engineering deliverable.  
> The initial core was derived from an open educational source and then analyzed, refactored, secured, and documented according to software engineering principles.