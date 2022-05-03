@extends('base')

@section('title', 'Оформление заказа')

@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="{{ asset('assets/img/bg/bg-secondary.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Оформление заказа</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная</a></li>
                            <li> // Оформление заказа</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <form action="{{ route('checkout.store') }}" method="POST">
        @csrf
    <div class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                        <div class="checkbox-form">
                            <h3>Информация о доставке</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Страна</label>
                                        <select class="myniceselect nice-select wide">
                                            <option>Россия</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="country-select clearfix">
                                        <label>Город</label>
                                        <select class="myniceselect nice-select wide">
                                            <option>Тюмень</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Полный адрес <span class="required">*</span></label>
                                        <input name="address" value="{{ old('address') }}" class="form-control @if($errors->has('address')) is-invalid @endif" placeholder="улица, дом, номер квартиры" type="text">
                                        @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Номер телефона <span class="required">*</span></label>
                                        <input type="text" value="{{ old('phone') }}" name="phone" class="form-control @if($errors->has('phone')) is-invalid @endif">
                                        @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="order-notes">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label>Пожелания к заказу</label>
                                        <textarea name="note" cols="30" rows="10"
                                            placeholder="Пожелания к заказу">{{ old('note') }}</textarea>
                                        @error('note')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="your-order">
                        <h3>Ваш заказ</h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name">Товары</th>
                                        <th class="cart-product-total">Сумма</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $item)
                                    <tr class="cart-item">
                                        <td class="cart-product-name"> {{ $item['product']->name }}<strong
                                                class="product-quantity">
                                                × {{ $item['count'] }}</strong></td>
                                        <td class="cart-product-total"><span class="amount">{{ $item['product']->price * $item['count'] }} ₽</span></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr class="order-total">
                                        <th>Сумма заказа</th>
                                        <td><strong><span class="amount">{{ $cartSum }} ₽</span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title">
                                                Метод оплаты
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title">
                                                Наличные
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <input value="Оформить заказ" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
@endsection
