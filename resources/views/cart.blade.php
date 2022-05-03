@extends('base')

@section('title', 'Корзина')

@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="{{ asset('assets/img/bg/bg-secondary.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Корзина</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная</a></li>
                            <li> // Корзина</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product_remove">Удалить</th>
                                        <th class="product-thumbnail">Изображение</th>
                                        <th class="cart-product-name">Наименование</th>
                                        <th class="product-price">Цена</th>
                                        <th class="product-quantity">Количество</th>
                                        <th class="product-subtotal">Сумма</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $item)
                                    <tr>
                                        <td class="product_remove">
                                                @csrf
                                                <a onclick="sendPost(this.getAttribute('href'))" href="{{ route('product.cart.remove', $item['product']) }}">
                                                    <i class="pe-7s-close" title="Удалить товар из корзины"></i>
                                                </a>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img style="width: 100px" src="{{ asset('storage/' . $item['product']->image) }}"
                                                     alt="Cart Thumbnail">
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="#">{{ $item['product']->name }}</a>
                                        </td>
                                        <td class="product-price"><span class="amount">{{ $item['product']->price }} ₽</span></td>
                                        <input type="text" name="cart[{{ $loop->index }}][product_id]" value="{{ $item['product']->id }}" hidden>
                                        <td class="product_pro_button quantity">
                                            <div class="pro-qty border">
                                                <input name="cart[{{ $loop->index }}][count]" type="text" value="{{ $item['count'] }}">
                                            </div>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">{{ $item['product']->price * $item['count'] }} ₽</span></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="col-12">
                                <div class="coupon-all">
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Обновить корзину" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Стоимость корзины</h2>
                                    <ul>
                                        <li>Сумма <span>{{ $cartSum }} ₽</span></li>
                                    </ul>
                                    <a href="{{ route('checkout.index') }}">Оформить заказ</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
