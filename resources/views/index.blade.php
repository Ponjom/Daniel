@extends('base')

@section('title', 'Главная')

@section('content')
    <!--slide banner section start-->
    <div class="hero_banner_section hero_banner2 d-flex align-items-center mb-60"
         data-bgimg="assets/img/bg/bg-index.png">
        <div class="container">
            <div class="hero_banner_inner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero_content hero_content2">
                            <h3 class="wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s" style="visibility: visible; animation-duration: 1.1s; animation-delay: 0.1s; animation-name: fadeInUp;">Экономия до <span>70%</span></h3>
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1.2s" style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.2s; animation-name: fadeInUp;">С нами выгодно!</h1>
                            <a class="btn btn-link wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1.3s"
                               href="shop-left-sidebar.html">Каталог</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider area end-->

    <!-- featured banner section start -->
    <div class="featured_banner_section mb-100">
        <div class="container-fluid">
            <div class="row featured_banner_inner slick__activation" data-slick='{
                "slidesToShow": 3,
                "slidesToScroll": 1,
                "arrows": true,
                "dots": false,
                "autoplay": false,
                "speed": 300,
                "infinite": true ,
                "responsive":[
                  {"breakpoint":768, "settings": { "slidesToShow": 2 } },
                  {"breakpoint":500, "settings": { "slidesToShow": 1 } }
                 ]
            }'>
                @foreach($categories as $category)
                    <div class="col-lg-4">
                        <div class="single_featured_banner wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
                            <div class="featured_banner_thumb">
                                <a href="{{ route('product.index') . '?category_id=' . $category->id }}"><img src="{{ asset('storage/' . $category->image) }}" alt=""></a>
                            </div>
                            <div class="featured_banner_text d-flex justify-content-between align-items-center">
                                <h3><a href="{{ route('product.index') . '?category_id=' . $category->id }}">{{ $category->name }}</a></h3>
                                <span>({{ $category->products_count }})</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- featured banner section end -->

    <!-- product section start -->
    <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
        <div class="container">
            <div class="product_header">
                <div class="section_title text-center">
                    <h2>Новые товары</h2>
                </div>
            </div>
            <div class="tab-content product_container">
                <div class="tab-pane fade show active" id="features" role="tabpanel">
                    <div class="product_gallery">
                        <div class="row">
                            @foreach($newProducts as $product)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                <article class="single_product">
                                    <figure>
                                        <div class="product_thumb">
                                            <a href="{{ route('product.show', $product) }}"><img src="{{ asset('storage/' . $product->image) }}"
                                                                               alt=""></a>
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
        </div>
    </div>
    <!-- product section end -->

@endsection
