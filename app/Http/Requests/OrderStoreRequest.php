<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
{
    public function rules()
    {
        return [
            'address' => ['required', 'string'],
            'phone' => ['required', 'integer'],
            'note' => ['nullable', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'address.required' => 'Поле адреса обязательно',
            'phone.required' => 'Поле Номер телефона обязательно',
            'phone.integer' => 'Номер телефона должен содержать в себе только цифры',
        ];
    }

    public function authorize()
    {
        return true;
    }
}
