<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'category'    => $this->category,
            'calories'    => (int) $this->calories,
            'price'       => (float) $this->price,
            'ingredients' => $this->ingredients,
            'description' => $this->description,

            // AI Generated Fields
            'ai_description'  => $this->ai_description,
            'ai_calories'     => $this->ai_calories,
            'ai_category'     => $this->ai_category,
            'ai_recipe_steps' => $this->ai_recipe_steps,

            'created_at'  => $this->created_at?->toISOString(),
            'updated_at'  => $this->updated_at?->toISOString(),
        ];
    }
}
