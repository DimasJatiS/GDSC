<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'        => 'required|string',
            'category'    => 'required|string',
            'calories'    => 'required|numeric',
            'price'       => 'required|numeric',
            'ingredients' => 'required|array',
            'description' => 'required|string',
        ];
    }
}
