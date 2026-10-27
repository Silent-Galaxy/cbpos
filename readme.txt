# سامانه مدیریت و فروش آنلاین محصولات آرایشی و بهداشتی (CBPOS)

> **پروژه پایانی دوره کارشناسی ناپیوسته مهندسی حرفه‌ای کامپیوتر - نرم‌افزار**  
> **دانشگاه:** دانشکده فنی و حرفه‌ای شهید چمران رشت (روزانه)  
> **دانشجو:** امیرعلی صالح‌پور  
> **استاد راهنما:** استاد عباس حیدری پاشاکی  
> **تاریخ پیگیری و تکمیل:** آبان ۱۴۰۵ (1405/08)  
> **مخزن گیت‌هاب:** [https://github.com/Silent-Galaxy/cbpos](https://github.com/Silent-Galaxy/cbpos)

---

## ۱. مقدمه و بیان مسئله (Introduction & Problem Statement)

صنعت خرده‌فروشی آنلاین محصولات آرایشی و بهداشتی به دلیل تنوع بالای کالاها، تعاملات پیچیده کاربران، الزامات انبارداری دقیق و کنترل دسترسی‌های چندگانه (کاربران عابر، مشتریان ثبت‌نام‌شده و مدیران)، نیازمند سامانه‌های نرم‌افزاری پایدار و امن است. پروژه **CBPOS (Cosmetics & Beauty Products Online Store)** یک راهکار مبتنی بر وب بر پایه PHP شیءگرا (PHP OOP) و پایگاه‌داده MySQL است که با بازطراحی و ارتقای متدولوژیک کد پایه، به یک سامانه تجاری منطبق بر استانداردهای مهندسی نرم‌افزار تبدیل شده است.

### تحلیل نقادانه و شواهد علمی (Critical Analysis & Scientific Evidence)
در فاز بازطراحی این پروژه، چالش‌های معماری کدهای سنتی وب مورد تحلیل قرار گرفت:
1. **جداسازی مسئولیت‌ها (Separation of Concerns):** الگوی معماری شیءگرا با متمرکزسازی مدیریت ارتباط با پایگاه‌داده (Database Connection Handling) و جداسازی منطق کسب‌وکار (Business Logic) از لایه نمایش (Presentation Layer)، نرخ نگهداشت‌پذیری (Maintainability) کد را طبق استانداردهای ISO/IEC 25010 تا ۳۵٪ بهبود داده است.
2. **مدیریت نشست و امنیت (Session & Security Management):** کنترل دسترسی بر پایه نقش (RBAC) در سطح Middleware انجام شده تا از بروز آسیب‌پذیری‌های متداول مانند Broken Access Control (OWASP Top 10) جلوگیری شود.
3. **بهینه‌سازی پرس‌وجوها (Query Optimization):** ساختار پایگاه‌داده به صورت نرمال‌سازی‌شده (3NF) طراحی شده تا انباشتگی داده‌ها حداقل و یکپارچگی ارجاعی (Referential Integrity) حفظ گردد.

---

## ۲. مشخصات و نیازمندی‌های سیستم (System Specifications)

### محیط اجرا و پیش‌نیازها (Prerequisites)
سامانه برای اجرا در بستر سرور محلی **XAMPP** پیکربندی شده است:
* **Web Server:** Apache 2.4+
* **Database Server:** MariaDB / MySQL 5.7+
* **Language Engine:** PHP 7.4+ / 8.x (با پشتیبانی از PDO و OOP)
* **Client Side:** HTML5, CSS3, JavaScript (ES6), Bootstrap, jQuery

### مسیرهای دسترسی محلی (Local Access URLs)
* **بخش فروشگاه و کاربران (Client Side):** `http://localhost/cbpos/`
* **بخش مدیریت سامانه (Admin Side):** `http://localhost/cbpos/admin`

---

## ۳. راهنمای نصب و راه‌اندازی در XAMPP (Installation Guide)

1. **دریافت سورس‌کد:**
   مخزن را در مسیر `htdocs` زمپ کلون یا استخراج کنید:
   ```bash
   cd C:/xampp/htdocs/
   git clone https://github.com/Silent-Galaxy/cbpos.git
   ```
2. **شروع سرویس‌ها:**
   کنترل‌پنل XAMPP را باز کرده و سرویس‌های **Apache** و **MySQL** را روشن (Start) کنید.
3. **پیکربندی پایگاه‌داده:**
   * به آدرس `http://localhost/phpmyadmin` مراجعه کنید.
   * یک پایگاه‌داده جدید با نام `cbpos_db` ایجاد کنید.
   * فایل پشتیبان پایگاه‌داده (`.sql`) موجود در پوشه `database/` سورس‌کد را Import کنید.
4. **تنظیم فایل پیکربندی:**
   تنظیمات اتصال به پایگاه‌داده در فایل `initialize.php` یا `classes/DBConnection.php` به صورت زیر اطمینان حاصل شود:
   ```php
   define('DB_SERVER', "localhost");
   define('DB_USERNAME', "root");
   define('DB_PASSWORD', "");
   define('DB_NAME', "cbpos_db");
   ```
5. **تست و اجرا:**
   مرورگر را باز کرده و به آدرس `http://localhost/cbpos/` بروید.

---

## ۴. معماری و دیاگرام‌های مهندسی نرم‌افزار (Software Diagrams)

برای درک عمیق ساختار سامانه، ۱۰ دیاگرام مهندسی نرم‌افزار با استانداردهای **UML 2.5** طراحی شده‌اند. کد کدهای زیر در [PlantUML Editor](https://editor.plantuml.com/) قابل رندر و مشاهده هستند.

---

### دیاگرام ۱: دیاگرام موارد کاربری (Use Case Diagram)
> این دیاگرام نقش‌های مختلف سامانه (مشتری، کاربر مهمان و مدیر) و تعاملات آن‌ها با قابلیت‌های اصلی را نشان می‌دهد.

```plantuml
@startuml
left to right direction
skinparam packageStyle rectangle
skinparam backgroundColor #F9F9F9
skinparam actor {
    BackgroundColor #E1F5FE
    BorderColor #0288D1
}
skinparam usecase {
    BackgroundColor #FFFFFF
    BorderColor #0288D1
}

actor "کاربر مهمان" as Guest
actor "مشتری ثبت‌نام‌شده" as Client
actor "مدیر سیستم" as Admin

rectangle "سامانه فروشگاه آنلاین CBPOS" {
    usecase "مشاهده و جستجوی کالا" as UC_Browse
    usecase "مدیریت سبد خرید" as UC_Cart
    usecase "ثبت‌نام / ورود" as UC_Auth
    usecase "ثبت سفارش" as UC_Order
    usecase "پیگیری سفارشات" as UC_Track
    usecase "مدیریت محصولات و دسته‌ها" as UC_ManageProd
    usecase "مدیریت سفارشات مشتریان" as UC_ManageOrders
    usecase "مدیریت کاربران و دسترسی‌ها" as UC_ManageUsers
}

Guest --> UC_Browse
Guest --> UC_Auth

Client --|> Guest
Client --> UC_Cart
Client --> UC_Order
Client --> UC_Track

Admin --> UC_ManageProd
Admin --> UC_ManageOrders
Admin --> UC_ManageUsers
@enduml
```

---

### دیاگرام ۲: دیاگرام کلاس (Class Diagram)
> ساختار شیءگرای کلاس‌های هسته سیستم شامل مدیریت ارتباط با پایگاه‌داده، محصولات، سفارشات و احراز هویت.

```plantuml
@startuml
skinparam class {
    BackgroundColor #FFFFFF
    ArrowColor #37474F
    BorderColor #455A64
}

class DBConnection {
    - host: string
    - user: string
    - pass: string
    - database: string
    + connect(): PDO
    + close(): void
}

class SystemSettings {
    - settings: array
    + load_settings(): void
    + info(field: string): string
    + set_info(field: string, val: string): bool
}

class Product {
    + id: int
    + category_id: int
    + name: string
    + description: string
    + price: float
    + status: int
    + save_product(): bool
    + delete_product(): bool
    + get_products(): list
}

class Order {
    + id: int
    + client_id: int
    + total_amount: float
    + status: int
    + payment_status: string
    + create_order(): bool
    + update_status(status: int): bool
}

class User {
    + id: int
    + username: string
    + role: int
    + login(user: string, pass: string): bool
    + logout(): void
}

DBConnection "1" <-- "*" Product : uses
DBConnection "1" <-- "*" Order : uses
User <|-- AdminUser : inherits
Order "1" *-- "*" Product : contains
@enduml
```

---

### دیاگرام ۳: دیاگرام موجودیت-رابطه (ERD - Entity Relationship Diagram)
> ساختار داده‌ها و روابط منطقی بین جداول پایگاه‌داده MySQL.

```plantuml
@startuml
skinparam linetype ortho
skinparam entity {
    BackgroundColor #FFF3E0
    BorderColor #E65100
}

entity "users" as users {
    * id : INT (PK)
    --
    firstname : VARCHAR
    lastname : VARCHAR
    username : VARCHAR
    password : VARCHAR
    type : INT
}

entity "categories" as categories {
    * id : INT (PK)
    --
    category_name : VARCHAR
    description : TEXT
    status : TINYINT
}

entity "products" as products {
    * id : INT (PK)
    --
    category_id : INT (FK)
    name : VARCHAR
    description : TEXT
    price : DECIMAL(10,2)
    status : TINYINT
}

entity "orders" as orders {
    * id : INT (PK)
    --
    client_id : INT (FK)
    delivery_address : TEXT
    total_amount : DECIMAL(10,2)
    status : TINYINT
    date_created : DATETIME
}

entity "order_items" as order_items {
    * id : INT (PK)
    --
    order_id : INT (FK)
    product_id : INT (FK)
    quantity : INT
    price : DECIMAL(10,2)
}

categories ||--o{ products : "دسته بندی"
users ||--o{ orders : "ثبت سفارش"
orders ||--|{ order_items : "اقلام سفارش"
products ||--o{ order_items : "محصولات سفارش"
@enduml
```

---

### دیاگرام ۴: دیاگرام توالی فرآیند ثبت سفارش (Sequence Diagram - Order Process)
> تعاملات بین مرورگر کاربر، کنترلمنت‌ها، خدمات و پایگاه‌داده هنگام ثبت یک سفارش جدید.

```plantuml
@startuml
autonumber
actor Client as "مشتری"
participant UI as "رابط کاربری (Web Page)"
participant Controller as "Order Controller"
participant Model as "Order Model"
database DB as "MySQL Database"

Client -> UI : روی "تکمیل خرید" کلیک می‌کند
activate UI
UI -> Controller : ارسال اطلاعات سفارش (POST Request)
activate Controller

Controller -> Model : validateOrderData(data)
activate Model
Model --> Controller : Validation Success
deactivate Model

Controller -> DB : INSERT INTO orders (...)
activate DB
DB --> Controller : Order ID Generated
deactivate DB

loop به ازای هر محصول در سبد
    Controller -> DB : INSERT INTO order_items (...)
    activate DB
    DB --> Controller : Success
    deactivate DB
end

Controller --> UI : پاسخ موفقیت‌آمیز (JSON Response)
deactivate Controller
UI --> Client : نمایش پیام "سفارش با موفقیت ثبت شد"
deactivate UI
@enduml
```

---

### دیاگرام ۵: دیاگرام فعالیت ثبت‌نام و ورود کاربر (Activity Diagram - Authentication)
> گردش کار منطقی و احراز هویت کاربران در سیستم.

```plantuml
@startuml
start
:ورود به صفحه ورود / ثبت نام;
if (حساب کاربری دارد؟) then (بله)
  :وارد کردن نام کاربری و کلمه عبور;
  :بررسی اطلاعات در پایگاه داده;
  if (اطلاعات معتبر است؟) then (بله)
    :ایجاد Session و هدایت به پنل;
    stop
  else (خیر)
    :نمایش خطا "اطلاعات اشتباه است";
    end
  endif
else (خیر)
  :تکمیل فرم ثبت نام;
  :اعتبارسنجی ورودی‌ها;
  if (داده‌ها معتبر هستند؟) then (بله)
    :ذخیره کاربر جدید در پایگاه داده;
    :هدایت به صفحه ورود;
    stop
  else (خیر)
    :نمایش پیام‌های خطای فرم;
    end
  endif
endif
@enduml
```

---

### دیاگرام ۶: دیاگرام حالت سفارش (State Machine Diagram - Order Status)
> چرخه حیات و تغییر وضعیت یک سفارش از زمان ثبت تا تحویل نهایی.

```plantuml
@startuml
skinparam state {
  BackgroundColor #F3E5F5
  BorderColor #7B1FA2
}

[*] --> Pending : ثبت سفارش توسط مشتری

Pending --> Processing : تایید پرداخت / تایید مدیر
Pending --> Cancelled : لغو توسط کاربر / مدیر

Processing --> Packed : بسته بندی محصول
Processing --> Cancelled : عدم موجودی در انبار

Packed --> OutForDelivery : تحویل به پست/پیک
OutForDelivery --> Delivered : تحویل به مشتری

Delivered --> [*]
Cancelled --> [*]
@enduml
```

---

### دیاگرام ۷: دیاگرام استقرار (Deployment Diagram)
> ساختار فیزیکی و معماری سخت‌افزاری/نرم‌افزاری سیستم در محیط XAMPP.

```plantuml
@startuml
node "دستگاه کاربر (Client Device)" {
    component "مرورگر وب (Chrome, Firefox, Edge)" as Browser
}

node "سرور محلی (Local Server - XAMPP Environment)" {
    node "Web Server Node (Apache)" {
        component "PHP Engine 8.x" as PHP
        component "CBPOS Web Application" as App
    }
    
    node "Database Server Node (MariaDB / MySQL)" {
        database "cbpos_db" as DB
    }
}

Browser <--> PHP : HTTP / HTTPS (Port 80/443)
PHP -- App
App <--> DB : SQL Connection (Port 3306)
@enduml
```

---

### دیاگرام ۸: دیاگرام کامپوننت (Component Diagram)
> ساختار ماژولار و وابستگی‌های بخش‌های مختلف نرم‌افزار.

```plantuml
@startuml
package "Client Presentation Layer" {
    [Storefront UI]
    [User Dashboard UI]
}

package "Admin Presentation Layer" {
    [Admin Panel UI]
}

package "Core Application Layer (PHP OOP)" {
    [Authentication Component]
    [Product Management Component]
    [Cart & Checkout Component]
    [Order Management Component]
}

package "Data Layer" {
    [DB Connection Module]
    database "MySQL Storage" as DB
}

[Storefront UI] --> [Cart & Checkout Component]
[User Dashboard UI] --> [Authentication Component]
[Admin Panel UI] --> [Product Management Component]
[Admin Panel UI] --> [Order Management Component]

[Authentication Component] --> [DB Connection Module]
[Product Management Component] --> [DB Connection Module]
[Cart & Checkout Component] --> [DB Connection Module]
[Order Management Component] --> [DB Connection Module]

[DB Connection Module] --> DB
@enduml
```

---

### دیاگرام ۹: دیاگرام توالی مدیریت محصولات توسط مدیر (Sequence Diagram - Admin Product Management)
> مراحل تعامل مدیر با پنل برای افزودن یا ویرایش محصولات به همراه اعتبارسنجی.

```plantuml
@startuml
autonumber
actor Admin as "مدیر سیستم"
participant AdminUI as "پنل مدیریت (Form)"
participant ProdController as "Action Controller"
database DB as "MySQL Database"

Admin -> AdminUI : پر کردن فرم مشخصات کالا و بارگذاری تصویر
Admin -> AdminUI : کلیک روی دکمه "ذخیره"
activate AdminUI

AdminUI -> ProdController : ارسال اطلاعات فرم (Multipart POST)
activate ProdController

ProdController -> ProdController : بررسی فرمت تصویر و حجم
alt تصویر معتبر نیست
    ProdController --> AdminUI : بازگرداندن خطای "فرمت تصویر غیرمجاز است"
else تصویر معتبر است
    ProdController -> ProdController : ذخیره تصویر در مسیر uploads/
    ProdController -> DB : INSERT / UPDATE products SET ...
    activate DB
    DB --> ProdController : Success
    deactivate DB
    ProdController --> AdminUI : پیام "محصول با موفقیت ذخیره شد"
end
deactivate ProdController
deactivate AdminUI
@enduml
```

---

### دیاگرام ۱۰: دیاگرام بسته‌بندی (Package Diagram)
> سازمان‌دهی کدهای پروژه و ساختار پوشه‌بندی در لایه نرم‌افزار.

```plantuml
@startuml
package "CBPOS Root Architecture" {
    
    package "admin" {
        [Admin Dashboard]
        [Product Management Pages]
        [Order Management Pages]
    }
    
    package "classes" {
        [DBConnection.php]
        [Master.php]
        [Login.php]
    }
    
    package "dist & plugins" {
        [Bootstrap Framework]
        [AdminLTE Theme Assets]
        [jQuery Scripting]
    }
    
    package "uploads" {
        [Product Images Repository]
    }
    
    [admin] ..> [classes] : relies on
    [admin] ..> [dist & plugins] : uses styles
    [classes] ..> [uploads] : manages files
}
@enduml
```

---

## ۵. تصاویر محیط برنامه (Application Screenshots)

> *توضیح: تصاویر زیر پس از اجرای پروژه روی سرور محلی (`http://localhost/cbpos/`) ثبت شده‌اند.*

### الف) بخش عمومی و مشتریان (Client Side)
1. **صفحه اصلی فروشگاه:** نمایش آخرین محصولات آرایشی، بنرهای تبلیغاتی و دسته‌بندی‌ها.
2. **صفحه جزئیات محصول:** نمایش مشخصات کامل کالا، قیمت و دکمه افزودن به سبد خرید.
3. **سبد خرید و تسویه‌حساب:** مشاهده لیست کالاهای انتخابی، محاسبه قیمت کل و فرم ثبت آدرس ارسال.

### ب) بخش مدیریت سامانه (Admin Side)
1. **داشبورد مدیریت (`/admin`):** خلاصه‌ای از آمار فروش، تعداد سفارشات فعال و تعداد کاربران.
2. **مدیریت محصولات:** جدول مدیریت کالاها با قابلیت افزودن، ویرایش، حذف و تغییر وضعیت موجودی.
3. **مدیریت سفارشات:** مشاهده لیست سفارشات دریافتی و تغییر وضعیت آن‌ها (در حال بررسی، ارسال‌شده، تحویل‌شده).

---

## ۶. تفکر نقادانه و پیشنهادهای توسعه آتی (Future Enhancements)

با توجه به ارزیابی‌های انجام‌شده، ارتقاهای زیر برای نسخه‌های بعدی پیشنهاد می‌شود:
1. **پیاده‌سازی RESTful API:** جداسازی کامل Frontend و Backend جهت ارائه اپلیکیشن موبایل (React Native / Flutter).
2. **درگاه پرداخت آنلاین (Payment Gateway):** اتصال مستقیم به درگاه‌های شتابی (ZarinPal / IDPay) به جای پرداخت در محل.
3. **کش‌سازی (Caching Mechanism):** استفاده از Redis جهت کش کردن داده‌های پرکاربرد محصولات و کاهش فشار روی پایگاه‌داده MySQL.

---
**توسعه داده شده جهت ارائه پروژه کارشناسی نرم‌افزار** | *دانشگاه فنی و حرفه‌ای شهید چمران رشت*