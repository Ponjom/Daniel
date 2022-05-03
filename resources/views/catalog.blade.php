@extends('base')

@section('title', 'Все товары')

@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-100" data-bgimg="{{ asset('assets/img/bg/bg-secondary.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Все товары</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная</a></li>
                            <li> // Все товары</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- product page section start -->
    <div class="product_page_section mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="product_sidebar product_widget">
                        <div class="widget__list category wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s">
                            <h3>Категории</h3>
                            <div class="widget_category">
                                <ul>
                                    <li><a @if($selectCategory === null) style="color: #fc7c7c" @endif href="{{ route('product.index') }}">Все <span>({{ $sumProducts }})</span></a></li>
                                    @foreach($categories as $category)
                                        <li><a @if($selectCategory == $category->id) style="color: #fc7c7c" @endif href="{{ route('product.index') . '?category_id=' . $category->id }}">{{ $category->name }} <span>({{ $category->products_count }})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product_page_wrapper">

                        <!--shop gallery start-->
                        <div class="product_page_gallery">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="grid">
                                    <div class="row grid__product">
                                        @foreach($products as $product)
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <article class="single_product wow fadeInUp" data-wow-delay="0.1s"
                                                         data-wow-duration="1.1s">
                                                    <figure>
                                                        <div class="product_thumb">
                                                            <a href="{{ route('product.show', $product) }}"><img
                                                                    src="{{ asset('storage/' . $product->image) }}" alt=""></a>
                                                            <div class="action_links">
                                                                <ul class="d-flex justify-content-center">
                                                                    <li class="add_to_cart">
                                                                        @if($cart->where('product.id', $product->id)->count() === 0)
                                                                            <form action="{{ route('product.cart.add', $product) }}" method="POST">
                                                                                @csrf
                                                                                <a onclick="this.parentNode.submit()" href="#" title="Добавить в корзину">
                                                                                    <span class="pe-7s-shopbag"></span>
                                                                                </a>
                                                                            </form>
                                                                        @else
                                                                            <form action="{{ route('product.cart.remove', $product) }}" method="POST">
                                                                                @csrf
                                                                                <a onclick="this.parentNode.submit()" href="#" title="Удалить из корзины">
                                                                                    <span class="pe-7s-close"></span>
                                                                                </a>
                                                                            </form>
                                                                        @endif
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <figcaption class="product_content text-center">
                                                            <h4><a href="{{ route('product.show', $product) }}">{{ $product->name }}</a></h4>
                                                            <div class="price_box">
                                                                <span class="current_price">{{ $product->price }} ₽</span>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </article>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--shop gallery end-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
