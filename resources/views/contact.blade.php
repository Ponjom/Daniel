@extends('base')

@section('title', 'Контакты')

@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-100" data-bgimg="{{ asset('assets/img/bg/bg-secondary.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Контакты</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная </a></li>
                            <li> // Контакты</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->

    <!-- contact section start -->
    <div class="contact_page_section mb-100">
        <div class="container">
            <div class="contact_details">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <div class="contact_info_content">
                            <h2>В случае любых вопросов можете обращаться по адресу</h2>
                            <div class="contact_info_details">
                                <p>ул. Первомайская, 18, Тюмень, Тюменская обл., Россия, 625000</p>
                                <p>Телефон: <a href="tel:0123456789">0123456789</a></p>
                                <p>Почта: <a href="#">demo@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact section end -->

    <!--contact map start-->
    <div class="contact_map mt-70">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d8656.455565067878!2d65.52992577822195!3d57.15221003657572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x43bbe163e85faaab%3A0xc97733494c28aa1a!2zV0lOQ0hFU1RFUiwg0YPQuy4g0J_QtdGA0LLQvtC80LDQudGB0LrQsNGPLCAxOCwg0KLRjtC80LXQvdGMLCDQotGO0LzQtdC90YHQutCw0Y8g0L7QsdC7Liwg0KDQvtGB0YHQuNGPLCA2MjUwMDA!3m2!1d57.1535606!2d65.5349849!5e0!3m2!1sru!2ssk!4v1651540706865!5m2!1sru!2ssk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
