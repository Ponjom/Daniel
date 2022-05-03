<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Akot | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- CSS
    ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!--modernizr min js here-->
    <script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
</head>

<body>


<!--offcanvas menu area start-->
<div class="body_overlay">

</div>
<div class="offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="welcome_text text-center">
                        <p>Welcome to Bucker Bakery Shop</p>
                    </div>
                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About Us</a></li>
                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="#">Shop Layout</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop-fullwidth.html">Shop Fullwidth</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-list-fullwidth.html">Shop List Fullwidth</a>
                                            </li>
                                            <li>
                                                <a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="shop-list-right-sidebar.html">Shop List Right
                                                    Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Product Style</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="single-product.html">Single Product Default</a>
                                            </li>
                                            <li>
                                                <a href="single-product-group.html">Single Product Group</a>
                                            </li>
                                            <li>
                                                <a href="single-product-variable.html">Single Product
                                                    Variable</a>
                                            </li>
                                            <li>
                                                <a href="single-product-sale.html">Single Product Sale</a>
                                            </li>
                                            <li>
                                                <a href="single-product-sticky.html">Single Product Sticky</a>
                                            </li>
                                            <li>
                                                <a href="single-product-affiliate.html">Single Product
                                                    Affiliate</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Popular Products</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop-left-sidebar.html">Classic Carrot Cake</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Gingerbread Cake</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Yellow Cupcakes</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Hawaiian Cake Roll</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Banana Snack Cake</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Chocolate Cake</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Product Related</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="my-account.html">My Account</a>
                                            </li>
                                            <li>
                                                <a href="login-register.html">Login | Register</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="compare.html">Compare</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="blog-fullwidth.html">blog</a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children"><a href="#">Blog Holder</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-fullwidth.html">Blog Fullwidth</a></li>
                                            <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a>
                                            </li>
                                            <li><a href="blog-list-right-sidebar.html">Blog List Right
                                                    Sidebar</a>
                                            </li>
                                            <li><a href="blog-list-fullwidth.html">Blog List Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Blog Details Holder</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-detail-fullwidth.html">Blog Detail Fullwidth</a>
                                            </li>
                                            <li><a href="blog-detail-left-sidebar.html">Blog Detail Left
                                                    Sidebar</a></li>
                                            <li><a href="blog-detail-right-sidebar.html">Blog Detail Right
                                                    Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<!--header area start-->
<header class="header_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="main_header d-flex justify-content-between align-items-center">
                    <div class="header_logo">
                        <a class="sticky_none" href="{{ route('index') }}"><img src="{{ asset('assets/img/logo/logo.png') }}" height="20" alt=""></a>
                    </div>
                    <!--main menu start-->
                    <div class="main_menu d-none d-lg-block">
                        <nav>
                            <ul class="d-flex">
                                <li><a class="@if(str_starts_with(Route::currentRouteName(), 'index')) active @endif" href="{{ route('index') }}">Главная</a></li>
                                <li><a class="@if(str_starts_with(Route::currentRouteName(), 'product')) active @endif" href="{{ route('product.index') }}">Каталог</a></li>
                                <li><a class="@if(str_starts_with(Route::currentRouteName(), 'contact')) active @endif" href="{{ route('contact') }}">Контакты</a></li>
                                @guest
                                    <li><a class="@if(str_starts_with(Route::currentRouteName(), 'auth')) active @endif" href="{{ route('auth.index') }}">Авторизация</a></li>
                                @endguest

                                @auth
                                    <li><a class="@if(str_starts_with(Route::currentRouteName(), 'user')) active @endif" href="{{ route('user.index') }}">Кабинет</a></li>
                                    @if(auth()->user()->isAdmin())
                                        <li><a class="@if(str_starts_with(Route::currentRouteName(), 'admin')) active @endif" href="{{ route('admin.index') }}">Админ</a></li>
                                    @endif
                                @endauth
                            </ul>
                        </nav>
                    </div>
                    <!--main menu end-->
                    <div class="header_account">
                        <ul class="d-flex">
                            <li class="shopping_cart"><a href="javascript:void(0)"><i class="pe-7s-shopbag"></i></a>
                                @if($cart->count())
                                    <span class="item_count">{{ $cart->count() }}</span>
                                @endif
                            </li>
                        </ul>
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--mini cart-->
<div class="mini_cart">
    <div class="cart_gallery">
        <div class="cart_close">
            <div class="cart_text">
                <h3>Корзина</h3>
            </div>
            <div class="mini_cart_close">
                <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
            </div>
        </div>
        @foreach($cart as $product)
            <div class="cart_item">
                <div class="cart_img">
                    <a href="{{ route('product.show', $product['product']) }}"><img src="{{ asset('storage/' . $product['product']->image) }}" alt=""></a>
                </div>
                <div class="cart_info">
                    <a href="{{ route('product.show', $product['product']) }}">{{ $product['product']->name }}</a>
                    <p>{{ $product['count'] }} x <span> {{ $product['product']->price }} ₽</span></p>
                </div>
                <div class="cart_remove">
                    <form action="{{ route('product.cart.remove', $product) }}" method="POST">
                        @csrf
                        <a onclick="this.parentNode.submit()" href="#"><i class="ion-android-close"></i></a>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <div class="mini_cart_table">
        <div class="cart_table_border">
            <div class="cart_total mt-10">
                <span>Общая стоимость:</span>
                <span class="price">{{ $cartSum }} ₽</span>
            </div>
        </div>
    </div>
    <div class="mini_cart_footer">
        <div class="cart_button">
            <a href="{{ route('cart.index') }}">Посмотреть корзину</a>
        </div>
        <div class="cart_button">
            <a href="{{ route('checkout.index') }}"><i class="fa fa-sign-in"></i>Оформить заказ</a>
        </div>
    </div>
</div>
<!--mini cart end-->
@yield('content')
<!--footer area start-->
<footer class="footer_widgets">
    <div class="container">
        <div class="main_footer">
            <div class="row">
                <div class="col-12">
                    <div class="main_footer_inner d-flex">
                        <div class="footer_widget_list contact footer_list_width">
                            <h3>Связь с магазином</h3>
                            <div class="footer_contact_desc">
                                <p>Почта: <a href="#">demo@example.com</a></p>
                            </div>
                            <div class="footer_contact_info">
                                <div class="footer_contact_info_list d-flex align-items-center">
                                    <div class="footer_contact_info_icon">
                                        <span class="pe-7s-map-marker"></span>
                                    </div>
                                    <div class="footer_contact_info_text">
                                        <p>ул. Первомайская, 18, Тюмень, Тюменская обл., Россия, 625000</p>
                                    </div>
                                </div>
                                <div class="footer_contact_info_list d-flex align-items-center">
                                    <div class="footer_contact_info_icon">
                                        <span class="pe-7s-phone"></span>
                                    </div>
                                    <div class="footer_contact_info_text">
                                        <ul>
                                            <li><a href="tel:+0123456789">+ 0 123 456
                                                    789</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer_menu_widget footer_list_width middle d-flex">
                            <div class="footer_widget_list">
                                <h3>ССылки</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="{{ route('index') }}">Главная</a></li>
                                        <li><a href="{{ route('contact') }}">Контакты</a></li>
                                        <li><a href="{{ route('product.index') }}">Каталог</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="copyright_right text-center">
                <p> © 2022 <a href="index.html"> Akot.</a> Made with <i class="ion-heart"></i> by
                    <a href="https://vk.com/d.bannikov99">Daniel</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->


<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><i class="ion-android-close"></i></span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="single-product.html"><img src="{{ asset('assets/img/product/product1.png') }}"
                                                                               alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="single-product.html"><img src="{{ asset('assets/img/product/product2.png') }}"
                                                                               alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{ asset('assets/img/product/product3.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{ asset('assets/img/product/product4.png') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li>
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab"
                                               aria-controls="tab1" aria-selected="false"><img
                                                    src="{{ asset('assets/img/product/mini-product/product1.png') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab"
                                               aria-controls="tab2" aria-selected="false"><img
                                                    src="{{ asset('assets/img/product/mini-product/product2.png') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3"
                                               role="tab" aria-controls="tab3" aria-selected="false"><img
                                                    src="{{ asset('assets/img/product/mini-product/product3.png') }}" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab"
                                               aria-controls="tab4" aria-selected="false"><img
                                                    src="{{ asset('assets/img/product/mini-product/product4.png') }}" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Donec Ac Tempus</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price">$78.99</span>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Mollitia iste
                                        laborum ad impedit pariatur esse optio tempora sint
                                        ullam autem deleniti nam
                                        in quos qui nemo ipsum numquam, reiciendis maiores
                                        quidem aperiam, rerum vel
                                        recusandae </p>
                                </div>
                                <div class="variants_selects">
                                    <div class="variants_size">
                                        <h2>size</h2>
                                        <select class="select_option">
                                            <option selected value="1">s</option>
                                            <option value="1">m</option>
                                            <option value="1">l</option>
                                            <option value="1">xl</option>
                                            <option value="1">xxl</option>
                                        </select>
                                    </div>
                                    <div class="variants_color">
                                        <h2>color</h2>
                                        <select class="select_option">
                                            <option selected value="1">purple</option>
                                            <option value="1">violet</option>
                                            <option value="1">black</option>
                                            <option value="1">pink</option>
                                            <option value="1">orange</option>
                                        </select>
                                    </div>
                                    <div class="modal_add_to_cart">
                                        <form action="#">
                                            <input min="1" max="100" step="1" value="1" type="number">
                                            <button type="submit">add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li class="facebook"><a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li class="twitter"><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li class="pinterest"><a href="#"><i class="ion-social-pinterest"></i></a>
                                        </li>
                                        <li class="google-plus"><a href="#"><i
                                                    class="ion-social-googleplus"></i></a>
                                        </li>
                                        <li class="linkedin"><a href="#"><i class="ion-social-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="toast-container">
    @if($notification = session('notification'))
        <div class="toast align-items-center @if($notification['type'] === 'error') bg-danger @else bg-success @endif" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body text-white">
                    {{ $notification['message'] }}
                </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    @endif
</div>
<!-- modal area end-->

<!-- JS
============================================ -->

<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.scrollup.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/mailchimp-ajax.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script>

<!-- Main JS -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
