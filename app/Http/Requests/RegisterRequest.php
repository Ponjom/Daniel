<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'email' => ['required', 'unique:users', 'email', 'string'],
            'password' => ['required', 'string', 'confirmed'],
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Поле имя обязательно',
            'last_name.required' => 'Поле фамилия обязательно',
            'email.required' => 'Поле почта обязательно',
            'password.required' => 'Поле пароль обязательно',
            'password.confirmed' => 'Повторный пароль не совпадает',
        ];
    }

    public function attributes()
    {
        return [
            'first_name' => 'register_name',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $errors = $validator->errors()->getMessages();
            foreach ($errors as $key => $error) {
                session()->flash('register_error_' . $key, $error[0]);
            }
        });
    }
}
