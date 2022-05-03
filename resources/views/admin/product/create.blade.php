@extends('base')

@section('title', 'Создание категории')

@section('content')

    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="{{ asset('assets/img/bg/bg-secondary.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Создание товара</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная </a></li> /
                            <li><a href="{{ route('admin.index') }}">Админ панель</a></li>
                            <li> // Создание товара</li>
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
                    <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Создание товара</h4>
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
                                <div class="col-lg-12 mb-3">
                                    <label>Описание*</label>
                                    <textarea name="description" class="form-control @if($errors->has('description')) is-invalid @endif">{{ old('description') }}</textarea>
                                    @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @endif
                                </div>
                                <div class="col-lg-12">
                                    <label>Цена*</label>
                                    <input name="price"  value="{{ old('price') }}" class="form-control @if($errors->has('price')) is-invalid @endif" placeholder="Цена">
                                    @error('price')
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
                                <div class="col-lg-12">
                                    <label>Категория*</label>
                                    <select name="category_id" class="form-select h-auto w-100 @if($errors->has('category_id')) is-invalid @endif">
                                        <option selected>Выберите категорию</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
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
