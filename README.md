# Defect Tracking Portal

A Laravel 9 application with a Bootstrap-based admin theme and an initial product-defect workflow. It includes defect listing and CRUD controller logic alongside theme pages for dashboards and application screens. The project appears to be an early work in progress: confirm the routes, database migrations, and screens before relying on it as a complete product.

## Stack

- PHP 8.0.2+
- Laravel 9
- MySQL (configured through Laravel environment variables)
- Vite, Bootstrap 5, Sass

## Local setup

Requirements: PHP and Composer, Node.js and npm, and a local MySQL database.

```bash
git clone https://github.com/shamas92/laravel.git
cd laravel
composer install
npm install
cp .env.example .env
php artisan key:generate
```

Edit `.env` with your local database name, username, and password, then initialize the schema if migrations are available:

```bash
php artisan migrate
npm run build
php artisan serve
```

Open the local URL printed by `php artisan serve`. For frontend development, use `npm run dev` in a second terminal.

## Current application areas

- Theme routes are grouped under `/light-menu` and `/dark-menu`
- Dashboard examples include analytics and sales pages
- Product-defect screens use the `defects` model and `defectController`
- A small `/barebone` route demonstrates a standalone view

Check `routes/`, `database/migrations/`, and `resources/views/` to understand which functions are implemented. The checked-in project does not provide a complete feature or deployment guide yet.

## Security

Use `.env.example` as a template and keep your real `.env` file private. Set `APP_DEBUG=false` in production, configure a least-privilege database account, and use unique application keys and credentials.
