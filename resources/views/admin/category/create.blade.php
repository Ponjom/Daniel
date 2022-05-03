@extends('base')

@section('title', 'Создание категории')

@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="{{ asset('assets/img/bg/bg-secondary.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Создание категории</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная </a></li> /
                            <li><a href="{{ route('admin.index') }}">Админ панель</a></li>
                            <li> // Создание категории</li>
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
                <div class="col-lg-6 mx-auto">
                    <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Создание категории</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Название*</label>
                                    <input name="name"  value="{{ old('name') }}" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Название">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <label>Изображение*</label>
                                    <input type="file" name="image" class="form-control @if($errors->has('image')) is-invalid @endif">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-lg-12 pt-5">
                                    <button class="btn custom-btn md-size">Создать</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
