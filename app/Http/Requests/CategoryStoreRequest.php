<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'image' => ['required', 'image'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле название обязательно',
            'image.required' => 'Изображение обязательно',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
