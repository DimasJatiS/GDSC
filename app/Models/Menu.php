<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OpenAPI\Annotations as OA;

class Menu extends Model
{   

    protected $fillable = [
        'name', 'category', 'calories',
        'price', 'ingredients', 'description',
        'ai_description', 'ai_calories', 'ai_category', 'ai_recipe_steps',
    ];

    protected $casts = [
        'ingredients' => 'array',
        'price' => 'decimal:2',
        'ai_recipe_steps' => 'array',
    ];
}

