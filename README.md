# Menu Catalog API — Laravel + Gemini AI

A production-grade REST API built with **Laravel**, featuring:

- Full CRUD for Menu Items  
- Advanced filtering, sorting, and pagination  
- Full-text search  
- Category grouping  
- Automated AI enhancement using **Gemini 2.0 Flash**  
- Clean architecture (Form Requests, Resources, Services)  
- Global exception handler (standardized JSON errors)  
- API Response Wrapper (consistent structure)  
- Complete Postman test suite  

This project is part of the **GDGoC Backend Study Case 2025**.

## Features

### Core Features
- Create, read, update, delete menu items
- Search & filter with multiple parameters
- Pagination + sorting
- Group by category (count and list)

### AI Features (Gemini 2.0)
On menu creation, the system automatically generates:
- AI description  
- AI estimated calories  
- AI category suggestion  
- AI recipe steps (step-by-step instructions)

### Developer Experience
- Clean API Resources
- Form Request Validation
- API Response Wrapper helper
- Global Exception Handler
- Ready-to-import Swagger & Postman files

## Installation

```bash
git clone https://github.com/your/repo.git
cd repo
composer install
cp .env.example .env
php artisan key:generate
```

Configure database in `.env`:

```env
DB_DATABASE=yourdb
DB_USERNAME=root
DB_PASSWORD=
```

Run migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

## Documentation

- [`API_DOCUMENTATION.md`](API_DOCUMENTATION.md) — API reference  
- [`ARCHITECTURE.md`](ARCHITECTURE.md) — High-level design  
- [`DEPLOYMENT.md`](DEPLOYMENT.md) — How to deploy  
- [`SWAGGER.json`](SWAGGER.json) — OpenAPI spec  
- [`menu_catalog_postman_collection.json`](menu_catalog_postman_collection.json) — OpenAPI spec  

## Tech Stack

- Laravel 10+  
- PHP 8.2+  
- MySQL  
- Gemini 2.0 Flash (AI Integration)

## License

MIT
