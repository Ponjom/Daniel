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
                        <!--shop toolbar area start-->
                        <div class="product_sidebar_header mb-60 d-flex justify-content-between align-items-center">
                            <div class="ms-auto product_header_right d-flex align-items-center">
                                <div class="product__toolbar__btn">
                                    <ul class="nav" role="tablist">
                                        <li class="nav-item">
                                            <a class="active" data-bs-toggle="tab" href="#grid" role="tab"
                                                aria-controls="grid" aria-selected="true"><i class="ion-grid"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a data-bs-toggle="tab" href="#list" aria-controls="list" role="tab"
                                                aria-selected="false"><i class="ion-ios-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--shop toolbar area end-->


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
                                <div class="tab-pane fade" id="list">
                                    <div class="list__product">
                                        <article class="product_list_items border-bottom">
                                            <figure class="product_list_flex d-flex align-items-center">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img
                                                            src="assets/img/product/product12.png" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_list_content">
                                                    <h4><a href="single-product.html">Products Name Here</a></h4>
                                                    <div class="product__ratting">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="current_price">$22.00</span>
                                                    </div>
                                                    <div class="product__desc">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos aliquam maiores impedit temporibus ratione
                                                            eveniet adipisci ab quisquam in quam.</p>
                                                    </div>
                                                    <div class="action_links product_list_action">
                                                        <ul class="d-flex">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="product_list_items border-bottom">
                                            <figure class="product_list_flex d-flex align-items-center">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img
                                                            src="assets/img/product/product1.png" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_list_content">
                                                    <h4><a href="single-product.html">Lorem, ipsum dolor.</a></h4>
                                                    <div class="product__ratting">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="current_price">$24.00</span>
                                                    </div>
                                                    <div class="product__desc">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos aliquam maiores impedit temporibus ratione
                                                            eveniet adipisci ab quisquam in quam.</p>
                                                    </div>
                                                    <div class="action_links product_list_action">
                                                        <ul class="d-flex">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="product_list_items border-bottom">
                                            <figure class="product_list_flex d-flex align-items-center">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img
                                                            src="assets/img/product/product3.png" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_list_content">
                                                    <h4><a href="single-product.html">Sit amet consecte elit.</a></h4>
                                                    <div class="product__ratting">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="current_price">$26.00</span>
                                                    </div>
                                                    <div class="product__desc">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos aliquam maiores impedit temporibus ratione
                                                            eveniet adipisci ab quisquam in quam.</p>
                                                    </div>
                                                    <div class="action_links product_list_action">
                                                        <ul class="d-flex">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                        <article class="product_list_items border-bottom">
                                            <figure class="product_list_flex d-flex align-items-center">
                                                <div class="product_thumb">
                                                    <a href="single-product.html"><img
                                                            src="assets/img/product/product4.png" alt=""></a>
                                                    <div class="action_links">
                                                        <ul class="d-flex justify-content-center">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <figcaption class="product_list_content">
                                                    <h4><a href="single-product.html">Atque earum ullam non.</a></h4>
                                                    <div class="product__ratting">
                                                        <ul class="d-flex">
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-ios-star"></i></a></li>
                                                            <li><a href="#"><i class="ion-android-star-outline"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="price_box">
                                                        <span class="current_price">$22.00</span>
                                                    </div>
                                                    <div class="product__desc">
                                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                            Dignissimos aliquam maiores impedit temporibus ratione
                                                            eveniet adipisci ab quisquam in quam.</p>
                                                    </div>
                                                    <div class="action_links product_list_action">
                                                        <ul class="d-flex">
                                                            <li class="add_to_cart"><a href="cart.html"
                                                                    title="Add to cart">
                                                                    <span class="pe-7s-shopbag"></span></a></li>
                                                            <li class="wishlist"><a href="#"
                                                                    title="Add to Wishlist"><span
                                                                        class="pe-7s-like"></span></a></li>
                                                            <li class="quick_button"><a href="#" title="Quick View"
                                                                    data-bs-toggle="modal" data-bs-target="#modal_box">
                                                                    <span class="pe-7s-look"></span></a></li>
                                                        </ul>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
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
