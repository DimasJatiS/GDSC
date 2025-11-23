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
- Ready for deployment (Railway/Render)  

This project is part of the **GDGoC Backend Study Case 2025**.

---

## ✨ Features

### Core Features
- Create, read, update, delete menu items
- Search & filter with multiple parameters
- Pagination + Sorting
- Group by category (count or item list)

### AI Features (Gemini 2.0)
On menu creation, the system automatically generates:
- AI Description  
- AI Estimated Calories  
- AI Category Suggestion  
- AI Recipe Steps (step-by-step instructions)

### Developer Experience
- Clean API Resources
- Form Request Validation
- API Response Wrapper Helper
- Global Exception Handler (JSON output)
- Ready-to-import Swagger & Postman files

---

## 📚 Documentation

| File | Description |
|------|-------------|
| [`API_DOCUMENTATION.md`](./API_DOCUMENTATION.md) | Full API reference |
| [`ARCHITECTURE.md`](./ARCHITECTURE.md) | System design & structure |
| [`DEPLOYMENT.md`](./DEPLOYMENT.md) | Deploying the API |
| [`SWAGGER.json`](./SWAGGER.json) | OpenAPI 3.0 spec |
| Postman Collection | Included in repository |

---

## ⚙️ Installation

```bash
git clone https://github.com/your/repo.git
cd repo
composer install
cp .env.example .env
php artisan key:generate

