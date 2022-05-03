@extends('base')

@section('title', $product->name)

@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-100" data-bgimg="{{ asset('assets/img/bg/bg-secondary.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>{{ $product->name }}</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная </a></li>
                            <li> // Товар</li>
                            <li> // {{ $product->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- single product section start-->
    <div class="single_product_section mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_product_gallery">
                        <div class="product_gallery_inner d-flex">
                            <div class="product_gallery_main_img">
                                <div class="gallery_img_list">
                                    <img data-image="assets/img/product/product5.png"
                                        src="{{ asset('storage/' . $product->image) }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_details_sidebar">
                        <h2 class="product__title">{{ $product->name }}</h2>
                        <div class="price_box">
                            <span class="current_price">{{ $product->price }} ₽</span>
                        </div>
{{--                        <div class="quickview__info mb-0">--}}
{{--                            <p class="product_review d-flex align-items-center">--}}
{{--                                <span class="review_icon d-flex">--}}
{{--                                    <i class="ion-ios-star"></i>--}}
{{--                                    <i class="ion-ios-star"></i>--}}
{{--                                    <i class="ion-ios-star"></i>--}}
{{--                                    <i class="ion-ios-star"></i>--}}
{{--                                    <i class="ion-ios-star"></i>--}}
{{--                                </span>--}}
{{--                                <span class="review__text"> (5 reviews)</span>--}}
{{--                            </p>--}}
{{--                        </div>--}}
                        <p class="product_details_desc">{{ $product->description }}</p>
                        <div class="product_pro_button quantity d-flex align-items-center">
                            @if($cart->where('product.id', $product->id)->count() === 0)
                                <a class="add_to_cart" onclick="sendPost(this.getAttribute('href')); event.preventDefault()" href="{{ route('product.cart.add', $product) }}">Добавить в корзину</a>
                            @else
                                <a class="add_to_cart" onclick="sendPost(this.getAttribute('href')); event.preventDefault()" href="{{ route('product.cart.remove', $product) }}">Убрать из корзины</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product details section end-->

{{--    <!-- product tab section start -->--}}
{{--    <div class="product_tab_section mb-80">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="product_tab_navigation">--}}
{{--                        <ul class="nav justify-content-center">--}}
{{--                            <li>--}}
{{--                                <a class="active" data-bs-toggle="tab" href="#description"--}}
{{--                                    aria-controls="description">Description</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a data-bs-toggle="tab" href="#aditional" aria-controls="aditional">information</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a data-bs-toggle="tab" href="#reviews" aria-controls="reviews">Reviews 03</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    <div class="product_page_content_inner tab-content">--}}
{{--                        <div class="tab-pane fade show active" id="description" role="tabpanel">--}}
{{--                            <div class="product_tab_desc">--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor--}}
{{--                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis--}}
{{--                                    nostrud--}}
{{--                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute--}}
{{--                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat--}}
{{--                                    nulla--}}
{{--                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui--}}
{{--                                    officia--}}
{{--                                    deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus--}}
{{--                                    error--}}
{{--                                    sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa--}}
{{--                                    quae--}}
{{--                                    ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt--}}
{{--                                    explicabo.--}}
{{--                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed--}}
{{--                                    quia--}}
{{--                                    consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque--}}
{{--                                    porro--}}
{{--                                    quisquam est, qui dolorem ipsum</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="aditional" role="tabpanel">--}}
{{--                            <div class="product_d_information">--}}
{{--                                <form action="#">--}}
{{--                                    <table class="border-top">--}}
{{--                                        <tbody>--}}
{{--                                            <tr>--}}
{{--                                                <td class="first_child">Compositions</td>--}}
{{--                                                <td>Polyester</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td class="first_child">Styles</td>--}}
{{--                                                <td>Girly</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td class="first_child">Properties</td>--}}
{{--                                                <td>Short Dress</td>--}}
{{--                                            </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="product_info_desc">--}}
{{--                                <p class="mb-0">Fashion has been creating well-designed collections since 2010. The--}}
{{--                                    brand offers feminine designs delivering stylish separates and statement dresses--}}
{{--                                    which have since evolved into a full ready-to-wear collection in which every--}}
{{--                                    item is--}}
{{--                                    a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with--}}
{{--                                    youthful--}}
{{--                                    elegance and unmistakable signature style. All the beautiful pieces are made in--}}
{{--                                    Italy and manufactured with the greatest attention. Now Fashion extends to a--}}
{{--                                    range--}}
{{--                                    of accessories including shoes, hats, belts and more!</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="tab-pane fade" id="reviews" role="tabpanel">--}}
{{--                            <div class="reviews__wrapper">--}}
{{--                                <h2>Write Your Own Review</h2>--}}
{{--                                <div class="customer__reviews d-flex justify-content-between mb-20">--}}
{{--                                    <div class="customer_reviews_left">--}}
{{--                                        <div class="comment__title">--}}
{{--                                            <h2>Add a review </h2>--}}
{{--                                            <p>Your email address will not be published. Required fields are marked--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                        <div class="reviews__ratting">--}}
{{--                                            <h3>Your rating</h3>--}}
{{--                                            <ul class="d-flex">--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="customer_reviews_right">--}}
{{--                                        <h2 class="reviews__title">Customer Reviews</h2>--}}
{{--                                        <div class="reviews__ratting">--}}
{{--                                            <ul class="d-flex">--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                                <li><a href="#"><i class="ion-ios-star"></i></a></li>--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                        <div class="reviews__desc">--}}
{{--                                            <h3>Lorem ipsum dolor sit amet</h3>--}}
{{--                                            <span>Deate on July 22, 2020</span>--}}
{{--                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do--}}
{{--                                                eiusmod--}}
{{--                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim--}}
{{--                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex--}}
{{--                                                ea--}}
{{--                                                commodo consequat.</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="product_review_form">--}}
{{--                                    <form action="#">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-12">--}}
{{--                                                <label for="review_comment">Your review </label>--}}
{{--                                                <textarea class="border" name="comment" id="review_comment"></textarea>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-lg-6 col-md-6">--}}
{{--                                                <label for="author">Name</label>--}}
{{--                                                <input class="border" id="author" type="text">--}}

{{--                                            </div>--}}
{{--                                            <div class="col-lg-6 col-md-6">--}}
{{--                                                <label for="email">Email </label>--}}
{{--                                                <input class="border" id="email" type="text">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <button class="btn custom-btn text-white" data-hover="Submit"--}}
{{--                                            type="submit">Submit</button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- product tab section end -->--}}

    <!-- product section start -->
    @if($relatedProducts->count() !== 0)
    <div class="product_section mb-80">
        <div class="container">
            <div class="section_title text-center mb-55">
                <h2>Похожие продукты</h2>
            </div>
            <div class="row product_slick slick_navigation slick__activation" data-slick='{
                "slidesToShow": 4,
                "slidesToScroll": 1,
                "arrows": true,
                "dots": false,
                "autoplay": false,
                "speed": 300,
                "infinite": true ,
                "responsive":[
                  {"breakpoint":992, "settings": { "slidesToShow": 3 } },
                  {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                  {"breakpoint":500, "settings": { "slidesToShow": 1 } }
                 ]
            }'>
                @foreach($relatedProducts as $product)
                    <div class="col-lg-3">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a href="{{ route('product.show', $product) }}"><img src="{{ asset('storage/' . $product->image) }}" alt=""></a>
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
    @endif
@endsection
