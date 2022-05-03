@extends('base')

@section('title', 'Личный кабинет')

@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="{{ asset('assets/img/bg/bg-secondary.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Личный кабинет</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная </a></li>
                            <li> // Личный кабинет</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="account-page-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav myaccount-tab-trigger" id="account-page-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="account-dashboard-tab" data-bs-toggle="tab"
                                href="#account-dashboard" role="tab" aria-controls="account-dashboard"
                                aria-selected="true">Дашборд</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-orders-tab" data-bs-toggle="tab" href="#account-orders"
                                role="tab" aria-controls="account-orders" aria-selected="false">Мои заказы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-logout-tab" href="{{ route('logout') }}" role="tab"
                                aria-selected="false">Выйти</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                            aria-labelledby="account-dashboard-tab">
                            <div class="myaccount-dashboard">
                                <p>Здравствуйте, <b>{{auth()->user()->name}}</b>.</p>
                                <p>Надеемся, что у вас все будет хорошо!</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-orders" role="tabpanel"
                            aria-labelledby="account-orders-tab">
                            <div class="myaccount-orders">
                                <h4 class="small-title">Мои заказы</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Номер заказа</th>
                                                <th>Дата заказа</th>
                                                <th>Детали заказа</th>
                                            </tr>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>#{{ $order->id }}</td>
                                                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('Y-m-d H:i') }}</td>
                                                    <td>@foreach($order->cart as $item)
                                                            {{ $item['product']['name'] }} x {{ $item['count'] }}, <br>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-address" role="tabpanel"
                            aria-labelledby="account-address-tab">
                            <div class="myaccount-address">
                                <p>The following addresses will be used on the checkout page by default.</p>
                                <div class="row">
                                    <div class="col">
                                        <h4 class="small-title">BILLING ADDRESS</h4>
                                        <address>
                                            1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                        </address>
                                    </div>
                                    <div class="col">
                                        <h4 class="small-title">SHIPPING ADDRESS</h4>
                                        <address>
                                            1234 Heaven Stress, Beverly Hill OldYork UnitedState of Lorem
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-details" role="tabpanel"
                            aria-labelledby="account-details-tab">
                            <div class="myaccount-details">
                                <form action="#" class="myaccount-form">
                                    <div class="myaccount-form-inner">
                                        <div class="single-input single-input-half">
                                            <label>First Name*</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input single-input-half">
                                            <label>Last Name*</label>
                                            <input type="text">
                                        </div>
                                        <div class="single-input">
                                            <label>Email*</label>
                                            <input type="email">
                                        </div>
                                        <div class="single-input">
                                            <label>Current Password(leave blank to leave
                                                unchanged)</label>
                                            <input type="password">
                                        </div>
                                        <div class="single-input">
                                            <label>New Password (leave blank to leave
                                                unchanged)</label>
                                            <input type="password">
                                        </div>
                                        <div class="single-input">
                                            <label>Confirm New Password</label>
                                            <input type="password">
                                        </div>
                                        <div class="single-input">
                                            <button class="btn custom-btn" type="submit">
                                                <span>SAVE CHANGES</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
