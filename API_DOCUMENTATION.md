# Menu Catalog REST API — Reference

## Base URL

```text
http://localhost:8000/api
```

---

## Global Response Format

### Success

```json
{
  "success": true,
  "message": "OK",
  "data": {}
}
```

### Error

```json
{
  "success": false,
  "message": "Error message",
  "errors": {}
}
```

Validation errors (422):

```json
{
  "success": false,
  "message": "Validation failed",
  "errors": {
    "name": ["The name field is required."]
  }
}
```

---

## Endpoints

### 1. Create Menu (AI Auto Suggest)

**POST** `/menu`

Request body:

```json
{
  "name": "Caramel Latte",
  "category": "drinks",
  "calories": 180,
  "price": 25000,
  "ingredients": ["coffee", "milk", "caramel"],
  "description": "Sweet latte with caramel."
}
```

Response `201`:

```json
{
  "success": true,
  "message": "Menu created successfully",
  "data": {
    "id": 1,
    "name": "Caramel Latte",
    "category": "drinks",
    "calories": 180,
    "price": 25000,
    "ingredients": ["coffee", "milk", "caramel"],
    "description": "Sweet latte with caramel.",
    "ai_description": "A creamy latte with caramel sweetness.",
    "ai_calories": 210,
    "ai_category": "drinks",
    "ai_recipe_steps": [
      "Panaskan susu.",
      "Seduh kopi espresso.",
      "Tambahkan sirup karamel.",
      "Campurkan dan sajikan."
    ],
    "created_at": "2025-01-01T00:00:00Z",
    "updated_at": "2025-01-01T00:00:00Z"
  }
}
```

---

### 2. List Menu (filter + pagination)

**GET** `/menu`

Query params:

- `q` — full-text search  
- `category` — filter by category  
- `min_price` / `max_price`  
- `max_cal`  
- `page`  
- `per_page`  
- `sort` — e.g. `price:asc`

Response `200`:

```json
{
  "success": true,
  "message": "Menu list retrieved",
  "data": [/* array of menu */],
  "pagination": {
    "total": 23,
    "page": 1,
    "per_page": 10,
    "total_pages": 3
  }
}
```

---

### 3. Get Menu by ID

**GET** `/menu/{id}`

Response `200`:

```json
{
  "success": true,
  "message": "Menu found",
  "data": { /* Menu object */ }
}
```

Response `404`:

```json
{
  "success": false,
  "message": "Menu not found"
}
```

---

### 4. Update Menu

**PUT** `/menu/{id}`

Body sama seperti create.  
Response `200`:

```json
{
  "success": true,
  "message": "Menu updated successfully",
  "data": { /* updated Menu */ }
}
```

---

### 5. Delete Menu

**DELETE** `/menu/{id}`

Response `200`:

```json
{
  "success": true,
  "message": "Menu deleted successfully"
}
```

---

### 6. Group By Category

**GET** `/menu/group-by-category?mode=count`

```json
{
  "success": true,
  "message": "Grouped by category (count)",
  "data": {
    "drinks": 10,
    "food": 5,
    "dessert": 3
  }
}
```

**GET** `/menu/group-by-category?mode=list&per_category=5`

```json
{
  "success": true,
  "message": "Grouped by category (list)",
  "data": {
    "drinks": [
      {
        "id": 1,
        "name": "Latte",
        "category": "drinks",
        "price": 25000
      }
    ]
  }
}
```

---

### 7. Search Menu

**GET** `/menu/search?q=latte&page=1&per_page=10`

Response `200`:

```json
{
  "success": true,
  "message": "Search results",
  "data": [/* array */],
  "pagination": {
    "total": 3,
    "page": 1,
    "per_page": 10
  }
}
```

---

### 8. Manual AI Suggest

**POST** `/menu/ai-suggest`

Request:

```json
{
  "name": "Green Tea Latte",
  "ingredients": ["green tea powder", "milk", "sugar"]
}
```

Response:

```json
{
  "success": true,
  "message": "AI suggestion generated",
  "data": {
    "description": "A creamy sweet green tea latte.",
    "calories": 190,
    "category": "drinks",
    "recipe_steps": [
      "Campurkan bubuk green tea dengan air panas.",
      "Panaskan susu.",
      "Campurkan susu, teh hijau, dan gula.",
      "Sajikan hangat."
    ]
  }
}
```
