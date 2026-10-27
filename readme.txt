# 🛍️ سامانه مدیریت و فروشگاه آنلاین محصولات آرایشی و بهداشتی (CBPOS)
### Cosmetics & Beauty Products Online Store

---

## 👨‍🎓 مشخصات پروژه و شناسنامه علمی
* **عنوان پروژه:** طراحی و پیاده‌سازی سامانه مدیریت و فروشگاه آنلاین محصولات آرایشی و بهداشتی با رویکرد شیءگرا (CBPOS)
* **دانشجو:** امیرعلی صالح پور
* **استاد راهنما:** جناب آقای مهندس عباس حیدری پاشاکی
* **مقطع و رشته تحصیلی:** کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر - نرم‌افزار (دوره روزانه)
* **دانشگاه:** آموزشکده فنی و حرفه‌ای پسران رشت (شهید چمران رشت)
* **مخزن گیت‌هاب:** [https://github.com/Silent-Galaxy/cbpos](https://github.com/Silent-Galaxy/cbpos)
* **تاریخ پیگیری و ارزیابی:** آبان ماه ۱۴۰۵ ($1405/08$)

---

## 📝 چکیده و مقدمه
سامانه **CBPOS** یک بستر تحت وب تجارت الکترونیک (E-Commerce) بهینه‌شده برای کسب‌وکارهای حوزه محصولات آرایشی و بهداشتی است. این سیستم با هدف تسهیل فرایند خرید برای مشتریان و ساده‌سازی مدیریت انبار، سفارش‌ها و فروش برای مدیران طراحی شده است. 

این پروژه بر پایه نسخه اولیه از منبع Open-Source (SourceCodester) توسعه یافته و با اعمال **تفکر نقادانه (Critical Thinking)** و **شواهد علمی مهندسی نرم‌افزار**، از نظر معماری کد، امنیت (رفع آسیب‌پذیری‌های SQL Injection و Cross-Site Scripting)، بهینه‌سازی پایگاه داده و رابط کاربری بازطراحی و ارتقاء یافته است.

---

## 🔬 ارزیابی نقادانه و بازطراحی (Critical Analysis & Refactoring)

در تحلیل اولیه کد پایه دریافت شده از مرجع اولیه، نقاط ضعف کلیدی زیر شناسایی و در نسخه بازطراحی‌شده برطرف گردید:

1. **امنیتی (Security):**
   * *مشکلا اولیه:* عدم اعتبارسنجی ورودی‌ها و وجود پتانسیل حملات SQL Injection و Stored/Reflected XSS.
   * *راهکار پیاده‌سازی‌شده:* استفاده از Prepared Statements در تعاملات دیتابیس، ایمن‌سازی توابع خروجی با `htmlspecialchars()` و فیلتر کردن پارامترهای GET/POST.
2. **معماری نرم‌افزار (Architecture):**
   * *مشکل اولیه:* درهم‌تنیدگی کدهای HTML و PHP در برخی ماژول‌ها.
   * *راهکار پیاده‌سازی‌شده:* اعمال الگوی طراحی شیءگرا (OOP)، جداسازی منطق کسب‌وکار (Business Logic) از لایه نمایش و استفاده از کلاس‌های متمرکز مدیریت دیتابیس (`DBConnection`).
3. **کارایی و دیتابیس (Performance & Database):**
   * *راهکار پیاده‌سازی‌شده:* کلیدهای خارجی و کلیدهای اصلی انبار بهینه‌سازی شده و کوئری‌های سنگین گزارش‌گیری فروش بازنویسی شدند.

---

## 🛠️ تکنولوژی‌ها و پشته فن‌آوری (Tech Stack)

* **Backend:** PHP 8.x (Object-Oriented Programming - OOP)
* **Database:** MySQL 8.x / MariaDB
* **Local Web Server Environment:** XAMPP Control Panel v3.3+ (Apache 2.4)
* **Frontend:** HTML5, CSS3, JavaScript (ES6), jQuery, Bootstrap 4/5, AdminLTE v3 Template
* **External APIs / Modules:** PayPal REST API Integration, PHP GD Library (پردازش تصویر)

---

## 🚀 راهنمای نصب و راه‌اندازی روی محیط XAMPP

برای اجرای پروژه روی سیستم محلی (Localhost) مراحل زیر را دنبال کنید:

### ۱. فعال‌سازی کتابخانه GD در PHP
برای پردازش و آپلود تصاویر محصولات، لازم است ماژول `gd` فعال باشد:
1. فایل `php.ini` را از مسیر `xampp/php/php.ini` یا از طریق پنل XAMPP (دکمه Config مقابل Apache) باز کنید.
2. عبارت `;extension=gd` را جستجو کرده و علامت `;` را از ابتدای آن بردارید:
   ```ini
   extension=gd
   ```
3. فایل را ذخیره کرده و سرویس Apache را ریستارت کنید.

### ۲. استقرار کدهای پروژه
1. مخزن گیت‌هاب را کلون کرده یا فایل ZIP آن را دانلود کنید:
   ```bash
   git clone https://github.com/Silent-Galaxy/cbpos.git
   ```
2. پوشه `cbpos` را در مسیر زیر کپی کنید:
   * **XAMPP:** `C:/xampp/htdocs/cbpos`

### ۳. تنظیمات پایگاه داده (MySQL)
1. برنامه **XAMPP Control Panel** را باز کرده و سرویس‌های **Apache** و **MySQL** را اجرا کنید.
2. مرورگر خود را باز کرده و به آدرس `http://localhost/phpmyadmin` بروید.
3. یک پایگاه داده جدید با نام `cbpos_db` و Collation برابر با `utf8mb4_unicode_ci` بسازید.
4. فایل `cbpos_db.sql` واقع در پوشه `database/` پروژه را در دیتابیس جدید `IMPORT` کنید.

### ۴. دسترسی به سامانه
* **بخش عمومی / سمت مشتری (Client Side):**
  * `http://localhost/cbpos/`
* **بخش مدیریت / سمت ادمین (Admin Panel):**
  * `http://localhost/cbpos/admin`

---

## 📊 دیاگرام‌های تحلیلی و مهندسی سیستم (PlantUML Diagrams)

کد‌های زیر طبق استانداردهای رسمی UML طراحی شده‌اند. می‌توانید این کدها را مستقیماً در [PlantUML Online Editor](https://editor.plantuml.com/) وارد کرده و خروجی باکیفیت دریافت نمایید.

---

### ۱. دیاگرام موارد کاربری (Use Case Diagram)
> **توضیح:** این دیاگرام تعاملات کاربران (مشتری و مدیر) با قابلیت‌های مختلف سامانه CBPOS را نشان می‌دهد.

```plantuml
@startuml
skinparam actorStyle hollow
skinparam packageStyle rectangle
skinparam theme vivid

left to right direction

actor "مشتری (Customer)" as customer
actor "مدیر سامانه (Admin)" as admin

rectangle "سامانه فروشگاه آنلاین CBPOS" {
    usecase "مرور و جستجوی محصولات" as UC1
    usecase "مدیریت سبد خرید" as UC2
    usecase "ثبت سفارش و پرداخت" as UC3
    usecase "ثبت‌نام و ورود به حساب" as UC4
    usecase "پیگیری وضعیت سفارش" as UC5
    
    usecase "مدیریت برندها و دسته‌بندی‌ها" as UC6
    usecase "مدیریت محصولات و متغیرها" as UC7
    usecase "مدیریت موجودی انبار" as UC8
    usecase "مدیریت و تغییر وضعیت سفارشات" as UC9
    usecase "مشاهده گزارشات فروش" as UC10
}

customer --> UC1
customer --> UC2
customer --> UC3
customer --> UC4
customer --> UC5

admin --> UC6
admin --> UC7
admin --> UC8
admin --> UC9
admin --> UC10
@enduml
```

---

### ۲. دیاگرام کلاس‌ها (Class Diagram)
> **توضیح:** ساختار شیءگرای سیستم و ارتباطات بین موجودیت‌ها (Entities) را نمایش می‌دهد.

```plantuml
@startuml
skinparam classAttributeIconSize 0
skinparam theme class

class DBConnection {
    - host: string
    - user: string
    - pass: string
    - dbname: string
    + connect(): mysqli
}

class Product {
    - id: int
    - category_id: int
    - brand_id: int
    - name: string
    - description: string
    - status: int
    + getProducts(): array
    + saveProduct(): bool
    + deleteProduct(): bool
}

class Inventory {
    - id: int
    - product_id: int
    - quantity: int
    - price: float
    + updateStock(): bool
    + getStock(): int
}

class Order {
    - id: int
    - client_id: int
    - total_amount: float
    - payment_status: int
    - status: int
    + createOrder(): bool
    + updateStatus(): bool
    + generateReport(): array
}

class Client {
    - id: int
    - firstname: string
    - lastname: string
    - email: string
    - password: string
    + register(): bool
    + login(): bool
    + updateProfile(): bool
}

DBConnection <.. Product
Product "1" -- "1" Inventory : has >
Product "1" -- "*" Order : included in >
Client "1" -- "*" Order : places >
@enduml
```

---

### ۳. دیاگرام توالی: ثبت سفارش و پرداخت (Sequence Diagram - Order & Checkout)
> **توضیح:** تعامل بین مشتری، فرانت‌اند، بک‌اند، دیتابیس و درگاه پرداخت در فرایند ثبت سفارش.

```plantuml
@startuml
skinparam sequenceMessageAlign center
autonumber

actor "مشتری" as Client
participant "رابط کاربری (UI)" as UI
participant "کنترلر سفارش (Order Controller)" as Controller
participant "پایگاه داده (MySQL)" as DB
participant "درگاه پرداخت (PayPal API)" as Gateway

Client -> UI: تایید سبد خرید و اقدام به پرداخت
UI -> Controller: ارسال درخواست ثبت سفارش (AJAX)
Controller -> DB: چک کردن موجودی انبار
DB --> Controller: تایید موجودی
Controller -> Gateway: ایجاد تراکنش پرداخت
Gateway --> UI: هدایت کاربر به صفحه پرداخت
Client -> Gateway: ورود اطلاعات حساب و تایید
Gateway --> Controller: ارسال کال‌بک تایید پرداخت
Controller -> DB: ثبت سفارش + به‌روزرسانی موجودی انبار
DB --> Controller: تایید ثبت داده‌ها
Controller --> UI: نمایش پیام موفقیت و فاکتور
UI --> Client: نمایش شماره پیگیری سفارش
@enduml
```

---

### ۴. دیاگرام توالی: مدیریت موجودی انبار توسط مدیر (Sequence Diagram - Inventory Management)
> **توضیح:** فرایند ثبت و به‌روزرسانی موجودی جدید کالاهای آرایشی در بخش مدیریت.

```plantuml
@startuml
skinparam sequenceMessageAlign center
autonumber

actor "مدیر (Admin)" as Admin
participant "پنل مدیریت (Admin Panel)" as UI
participant "کلاس انبار (Inventory Class)" as Inv
participant "پایگاه داده (MySQL)" as DB

Admin -> UI: ورود به بخش مدیریت انبار
UI -> Inv: دریافت لیست محصولات و موجودی فعلی
Inv -> DB: کوئری دریافت داده‌های انبار
DB --> Inv: بازگرداندن رکوردها
Inv --> UI: نمایش جدول موجودی
Admin -> UI: وارد کردن مقدار جدید موجودی و قیمت
UI -> Inv: ارسال فرم (save_inventory)
Inv -> DB: اجرای کوئری UPDATE / INSERT
DB --> Inv: تایید به‌روزرسانی
Inv --> UI: پیام موفقیت عملیات
UI --> Admin: بهینه‌سازی و به‌روزرسانی جدول انبار
@enduml
```

---

### ۵. دیاگرام فعالیت: فرایند خرید مشتری (Activity Diagram - Customer Journey)
> **توضیح:** جریان تصمیم‌گیری و مراحل طی‌شده توسط کاربر از ورود به سایت تا پایان خرید.

```plantuml
@startuml
start
:ورود به فروشگاه CBPOS;
:مرور محصولات آرایشی و بهداشتی;
if (محصول مورد نظر یافت شد؟) then (بله)
  :مشاهده جزئیات محصول و انتخاب متغیر;
  :افزودن به سبد خرید;
else (خیر)
  :استفاده از جستجو و فیلتر برند/دسته‌بندی;
endif

:ورود به صفحه سبد خرید;
if (کاربر وارد حساب شده؟) then (خیر)
  :ثبت‌نام یا ورود به حساب کاربری;
else (بله)
endif

:تایید آدرس ارسال و جزئیات فاکتور;
:انتخاب روش پرداخت;
:پرداخت آنلاین;

if (تراکنش موفق بود؟) then (بله)
  :کاهش موجودی انبار در سیستم;
  :صدور فاکتور و نمایش کد پیگیری;
  stop
else (خیر)
  :نمایش خطای پرداخت;
  :بازگشت به صفحه انتخاب روش پرداخت;
  detach
endif
@enduml
```

---

### ۶. دیاگرام فعالیت: پردازش سفارش توسط ادمین (Activity Diagram - Admin Order Processing)
> **توضیح:** چرخه کاری مدیر برای بررسی، تایید و ارسال سفارشات دریافت شده.

```plantuml
@startuml
start
:ورود مدیر به پنل مدیریت;
:بررسی لیست سفارشات جدید;
:انتخاب سفارش مورد نظر;

if (سفارش لغو شده توسط کاربر؟) then (بله)
  :تغییر وضعیت به "Cancelled";
  :بازگرداندن موجودی به انبار;
  stop
else (خیر)
  :تایید پرداخت و ثبت وضعیت "Packed";
  :تحویل کالا به پست/پیک;
  :تغییر وضعیت به "Shipped";
  :ثبت کد رهگیری پستی;
  :تغییر وضعیت نهایی به "Delivered";
  stop
endif
@enduml
```

---

### ۷. دیاگرام رابطه موجودیت‌ها (ER Diagram / Database Schema)
> **توضیح:** ساختار جداول دیتابیس `cbpos_db` و کلیدهای اصلی/خارجی.

```plantuml
@startuml
skinparam linetype ortho

entity "category_list" as category {
    * id : INT (PK)
    --
    name : TEXT
    description : TEXT
    status : TINYINT
    date_created : DATETIME
}

entity "brand_list" as brand {
    * id : INT (PK)
    --
    name : TEXT
    status : TINYINT
    date_created : DATETIME
}

entity "product_list" as product {
    * id : INT (PK)
    --
    * category_id : INT (FK)
    * brand_id : INT (FK)
    name : TEXT
    description : TEXT
    status : TINYINT
    date_created : DATETIME
}

entity "inventory_list" as inventory {
    * id : INT (PK)
    --
    * product_id : INT (FK)
    quantity : INT
    price : FLOAT
    date_created : DATETIME
}

entity "order_list" as order {
    * id : INT (PK)
    --
    * client_id : INT (FK)
    total_amount : FLOAT
    paid : TINYINT
    status : TINYINT
    date_created : DATETIME
}

category ||--o{ product
brand ||--o{ product
product ||--o{ inventory
product ||--o{ order
@enduml
```

---

### ۸. دیاگرام اجزا (Component Diagram)
> **توضیح:** معماری ماژولار و اجزای تشکیل‌دهنده سامانه CBPOS.

```plantuml
@startuml
package "CBPOS Application" {
    [UI Component (Bootstrap/AdminLTE)] as UI
    [Auth Module] as Auth
    [Product & Category Module] as ProdMod
    [Inventory Control Module] as InvMod
    [Order Processing Engine] as OrderEng
    [Database Access Layer (OOP)] as DAL
}

database "MySQL (cbpos_db)" as DB
cloud "PayPal Payment Gateway" as Payment

UI --> Auth
UI --> ProdMod
UI --> InvMod
UI --> OrderEng

Auth --> DAL
ProdMod --> DAL
InvMod --> DAL
OrderEng --> DAL
OrderEng --> Payment

DAL --> DB
@enduml
```

---

### ۹. دیاگرام استقرار (Deployment Diagram)
> **توضیح:** معماری سخت‌افزاری و نرم‌افزاری اجرای سیستم روی محيط local/XAMPP.

```plantuml
@startuml
node "Client Device (PC / Mobile Browser)" {
    component "Web Browser (Chrome/Firefox)" as Browser
}

node "Local Server (XAMPP Environment)" {
    node "Apache Web Server" {
        component "PHP 8.x Engine (OOP Codebase)" as PHP
    }
    
    node "Database Server" {
        database "MySQL Database (cbpos_db)" as MariaDB
    }
}

cloud "External Services" {
    node "PayPal Gateway API" as ExternalAPI
}

Browser -- PHP : HTTP / HTTPS (Port 80/443)
PHP -- MariaDB : SQL Query (Port 3306)
PHP -- ExternalAPI : REST API (TLS/HTTPS)
@enduml
```

---

### ۱۰. دیاگرام ماشین حالت سفارش (State Machine Diagram)
> **توضیح:** تغییر وضعیت یک سفارش از زمان ثبت اولیه تا تحویل به مشتری.

```plantuml
@startuml
[*] --> Pending : ثبت اولیه سفارش توسط مشتری
Pending --> Paid : پرداخت موفقیت‌آمیز آنلاین
Pending --> Cancelled : لغو توسط کاربر یا عدم پرداخت

Paid --> Processing : تایید توسط مدیر سامانه
Processing --> Packed : آماده‌سازی کالا در انبار
Packed --> OutForDelivery : تحویل به سیستم ارسال/پست

OutForDelivery --> Delivered : تحویل موفق به مشتری
Delivered --> [*]
Cancelled --> [*]
@enduml
```

---

## 📸 گالری تصاویر و محیط برنامه (System Screenshots)

*(تصاویر زیر پس از راه‌اندازی پروژه روی آدرس‌های `http://localhost/cbpos/` و `http://localhost/cbpos/admin` جای‌گذاری می‌شوند)*

| بخش مشتری (Public User Side) | پنل مدیریت (Admin Dashboard Side) |
| :---: | :---: |
| ![صفحه اصلی فروشگاه](docs/screenshots/user_home.png) | ![داشبورد ادمین](docs/screenshots/admin_dashboard.png) |
| *صفحه اصلی و لیست محصولات* | *مدیریت آمار و خلاصه وضعیت فروشگاه* |
| ![صفحه جزئیات محصول](docs/screenshots/product_detail.png) | ![مدیریت سفارشات](docs/screenshots/admin_orders.png) |
| *مشاهده مشخصات و افزودن به سبد خرید* | *بررسی، تایید و تغییر وضعیت سفارش‌ها* |

---

## 🔬 ارزیابی علمی و نتیجه‌گیری
پروژه **CBPOS** نمونه‌ای استاندارد از بکارگیری اصول مهندسی نرم‌افزار، الگوی طراحی شیءگرا (OOP)، پایگاه داده نرمال‌سازی شده و ایمن‌سازی نرم‌افزارهای تحت وب است. توسعه و بازطراحی این پروژه، تسلط بر مهارتهای برنامه نویسی تحت وب، طراحی دیتابیس و تحلیل دیاگرام‌های UML را به اثبات می‌رساند.

---
**ارائه‌شده جهت ارزیابی پروژه نهایی دوره کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر نرم‌افزار**  
**دانشگاه چمران رشت - پاییز ۱۴۰۵**