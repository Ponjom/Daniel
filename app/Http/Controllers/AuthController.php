<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth');
    }

    public function register(RegisterRequest $request)
    {
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Успешная Регистрация'
        ]);
        return redirect()->route('auth.index');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return redirect()->route('index');
        }
        session()->flash('notification', [
            'type' => 'error',
            'message' => 'Неправильный логин или пароль'
        ]);
        return redirect()->route('auth.index');
    }

    public function logout()
    {
        Session::flush();

        Auth::logout();

        return redirect()->route('index');
    }
}
