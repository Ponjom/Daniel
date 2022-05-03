<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Поле почта обязательно',
            'password.required' => 'Поле пароль обязательно',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $errors = $validator->errors()->getMessages();
            foreach ($errors as $key => $error) {
                session()->flash('login_error_' . $key, $error[0]);
            }
        });
    }
}
