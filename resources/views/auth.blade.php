@extends('base')

@section('title', 'Авторизация')

@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/bg/bg-secondary.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Авторизация</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная </a></li>
                            <li> // Авторизация</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="login-register-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('auth.login') }}" method="POST">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Логин</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Почтовый адрес*</label>
                                    <input type="email" name="email"  value="{{ old('email') }}" class="form-control @if($message = session('register_error_email')) is-invalid @endif" placeholder="Почтовый адрес">
                                    @if($message = session('login_error_email'))
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <label>Пароль</label>
                                    <input type="password"  value="{{ old('password') }}" class="form-control @if($message = session('login_error_password')) is-invalid @endif" name="password" placeholder="Пароль">
                                    @if($message = session('login_error_password'))
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <button class="btn custom-btn md-size">Войти</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <form action="{{ route('auth.register') }}" method="POST">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Регистрация</h4>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label>Имя</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control @if($message = session('register_error_first_name')) is-invalid @endif" placeholder="Имя">
                                    @if($message = session('register_error_first_name'))
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 col-12">
                                    <label>Фамилия</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control @if($message = session('register_error_last_name')) is-invalid @endif"  placeholder="Фамилия">
                                    @if($message = session('register_error_last_name'))
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label>Почтовый адрес*</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @if($message = session('register_error_email')) is-invalid @endif"  placeholder="Почтовый адрес">
                                    @if($message = session('register_error_email'))
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label>Пароль</label>
                                    <input type="password"  name="password" value="{{ old('password') }}" class="form-control @if($message = session('register_error_password')) is-invalid @endif"  placeholder="Пароль">
                                    @if($message = session('register_error_password'))
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label>Повторный пароль</label>
                                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Повторный пароль">
                                </div>
                                <div class="col-12">
                                    <button class="btn custom-btn md-size">Регистрация</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
