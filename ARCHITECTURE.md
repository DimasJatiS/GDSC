# System Architecture

## Overview

The Menu Catalog API follows a layered architecture with clear separation of concerns:

- **Controllers** handle HTTP and orchestrate flows.
- **Form Requests** encapsulate validation.
- **Services** handle external integrations (Gemini AI).
- **Resources** transform models into API-friendly JSON.
- **Helpers** provide reusable response wrappers.
- **Models** map to database tables.

## Layers

### Controllers

- `MenuController` exposes REST endpoints for menu operations.
- Relies on `StoreMenuRequest`, `UpdateMenuRequest`, and `GeminiService`.

### Requests

- `StoreMenuRequest` — validation for creating menus.
- `UpdateMenuRequest` — validation for updating menus.

### Services

- `GeminiService`:
  - Responsible for calling the Gemini 2.0 API.
  - Enforces strict JSON-only responses.
  - Extracts AI-generated description, calories, category, and recipe steps.

### Resources

- `MenuResource` — defines JSON representation of a menu.
- `MenuCollection` — wraps paginated responses with `pagination` metadata.

### Helpers

- `ApiResponse` — global wrapper for:
  - `success()` / `created()`
  - `error()` / `notFound()`
  - `validationFailed()` / `serverError()`

### Exception Handling

- `Handler::render()` is customized to:
  - Detect `/api/*` routes.
  - Always return JSON with a consistent format.
  - Log internal errors with `error_id` for traceability.

## Data Flow (Create Menu)

1. Client sends `POST /api/menu` with JSON payload.
2. `StoreMenuRequest` validates the data.
3. `MenuController@store` creates the `Menu` model.
4. `GeminiService::analyzeMenu()` is called with name + ingredients + category.
5. AI fields (`ai_description`, `ai_calories`, `ai_category`, `ai_recipe_steps`) are stored.
6. `MenuResource` formats the response.
7. `ApiResponse::created()` wraps everything into the standard structure.

## Database Schema (Menu)

- `id` (bigint, primary key)
- `name` (string)
- `category` (string)
- `calories` (integer)
- `price` (decimal)
- `ingredients` (json)
- `description` (text)
- `ai_description` (text, nullable)
- `ai_calories` (integer, nullable)
- `ai_category` (string, nullable)
- `ai_recipe_steps` (json, nullable)
- `created_at` / `updated_at`

## Future Enhancements

- Repository layer for more complex domain logic.
- API versioning (`/api/v1`, `/api/v2`).
- Authentication & authorization (Laravel Sanctum / Passport).
- Caching for frequently accessed menu lists.
