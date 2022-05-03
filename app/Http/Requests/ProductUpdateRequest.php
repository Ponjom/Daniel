<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'description' => ['sometimes', 'string'],
            'price' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
            'image' => ['sometimes', 'image'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле название обязательно',
            'category_id.required' => 'Выберите пожалуйста категорию',
            'image.required' => 'Изображение обязательно',
            'image.image' => 'Файл не является изображением',
            'price.required' => 'Цена является обязательна',
            'price.integer' => 'Цена должна являться числом',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
