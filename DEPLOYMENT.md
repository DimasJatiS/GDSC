# Deployment Guide

This document describes how to deploy the Menu Catalog API.

## Requirements

- PHP 8.2+
- Composer
- MySQL 8+
- Web server (Nginx/Apache) or PaaS (Railway/Render)

## Environment Variables

Important `.env` settings:

```env
<!-- APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com -->

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=GDSC
DB_USERNAME=root
DB_PASSWORD=

GEMINI_API_KEY=your-gemini-api-key
GEMINI_MODEL=gemini-2.0-flash
```

## Build & Optimize

```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force
```

## Railway Example

1. Create a new Railway project.
2. Add a MySQL plugin.
3. Deploy the GitHub repository.
4. Configure environment variables in the Railway dashboard.
5. Run migrations via shell:

```bash
php artisan migrate --force
```

## Render Example

- Build command:

```bash
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
```

- Start command:

```bash
php artisan serve --host 0.0.0.0 --port $PORT
```

## Logs & Monitoring

- Application logs: `storage/logs/laravel.log`
- Each internal error returns a JSON with `error_id` that maps to log entries.
