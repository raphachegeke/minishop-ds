# MiniShop - Laravel E-commerce

MiniShop is a simple e-commerce web application built with **Laravel 12**.  
It includes an admin panel for managing products and a customer-facing catalog with a responsive design using Bootstrap.

---

## Features
- Admin dashboard for managing products (CRUD)
- Customer-facing product catalog
- Responsive design (Bootstrap 5)
- Form validation for products
- Flash messages for actions (success/error)

---

## Requirements
- PHP >= 8.1
- Composer
- SQLite / MySQL (or other supported DB)
- Laravel 12

---

## Setup Instructions

1. Clone the repository:
```bash
git clone https://github.com/raphachegeke/minishop-ds.git
cd minishop
```

2. Install PHP dependencies:
```bash
composer install
```

3. Copy .env.example to .env and configure your database:
```bash
cp .env.example .env
```

For quick testing, you can use SQLite.
For production, set up MySQL and update .env accordingly.

4. Generate application key:
```bash
php artisan key:generate
```

5. Run database migrations and seed the admin user:
```bash
php artisan migrate --seed
```

6. Start the development server:
```bash
php artisan serve
```
App will be available at http://127.0.0.1:8000

Admin Login
```bash
Email: admin@minishop.com

Password: password123
```

Access admin dashboard at /admin/dashboard