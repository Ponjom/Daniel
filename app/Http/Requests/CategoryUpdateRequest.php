<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'image' => ['sometimes', 'image'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
