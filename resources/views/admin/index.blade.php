@extends('base')

@section('title', 'Главная')

@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs_aree breadcrumbs_bg mb-110" data-bgimg="assets/img/bg/bg-secondary.webp">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_text">
                        <h1>Админ панель</h1>
                        <ul>
                            <li><a href="{{ route('index') }}">Главная </a></li>
                            <li> // Админ панель</li>
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
                                role="tab" aria-controls="account-orders" aria-selected="false">Пользователи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-address-tab" data-bs-toggle="tab" href="#account-address"
                                role="tab" aria-controls="account-address" aria-selected="false">Заказы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-details-tab" data-bs-toggle="tab" href="#categories"
                                role="tab" aria-controls="account-details" aria-selected="false">Категории</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-products-tab" data-bs-toggle="tab" href="#products"
                               role="tab" aria-controls="account-details" aria-selected="false">Товары</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content myaccount-tab-content" id="account-page-tab-content">
                        <div class="tab-pane fade show active" id="account-dashboard" role="tabpanel"
                            aria-labelledby="account-dashboard-tab">
                            <div class="myaccount-dashboard">
                                <p>Здравствуйте, <b>{{ auth()->user()->name }}</b></p>
                                <p>Желаем вам продуктивной работы в нашей системе управления доставками "Akot"</a>.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-orders" role="tabpanel"
                            aria-labelledby="account-orders-tab">
                            <div class="myaccount-orders">
                                <h4 class="small-title">Пользователи</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Id</th>
                                                <th>Имя</th>
                                                <th>Почта</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            @foreach($users as $user)
                                                <tr>
                                                    <td><a class="account-order-id" href="javascript:void(0)">#{{ $user->id }}</a></td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    @if($user->isAdmin())
                                                        <td><a href="{{ route('admin.user.change-status', $user) }}" class="btn btn-secondary btn-primary-hover"><span>Убрать статус <br> администратора</span></a></td>
                                                    @else
                                                        <td><a href="{{ route('admin.user.change-status', $user) }}" class="btn btn-secondary btn-primary-hover"><span>Сделать администратором</span></a></td>
                                                    @endif
                                                    <td><a href="{{ route('admin.user.destroy', $user) }}" class="btn btn-danger btn-danger-hover"><span>Удалить</span></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="account-address" role="tabpanel"
                            aria-labelledby="account-address-tab">
                            <div class="myaccount-orders">
                                <div class="d-flex mb-3">
                                    <h4 class="small-title">Заказы</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                        <tr>
                                            <th>Id</th>
                                            <th>Имя Заказчика</th>
                                            <th>Адрес</th>
                                            <th>Номер телефона</th>
                                            <th>Заметка</th>
                                        </tr>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>#{{ $order->id }}</td>
                                                <td>{{ $order->user->name }}</td>
                                                <td>{{ $order->address }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->note }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="categories" role="tabpanel"
                            aria-labelledby="account-details-tab">
                            <div class="myaccount-orders">
                                <div class="d-flex mb-3">
                                    <h4 class="small-title">Категории</h4>
                                    <a class="btn btn-success btn-success-hover ms-auto h-100" href="{{ route('admin.category.create') }}"><span>Добавить категорию</span></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                        <tr>
                                            <th>Id</th>
                                            <th>Имя</th>
                                            <th>Изображение</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($categories as $category)
                                            <tr>
                                                <td><a class="account-order-id" href="javascript:void(0)">#{{ $category->id }}</a></td>
                                                <td>{{ $category->name }}</td>
                                                <td><img style="width: 100px" src="{{ asset('storage/' . $category->image) }}" alt=""></td>
                                                <td><a href="{{ route('admin.category.edit', $category) }}" class="btn btn-warning btn-warning-hover"><span>Редактировать</span></a></td>
                                                <td><a href="{{ route('admin.category.destroy', $category) }}" class="btn btn-danger btn-danger-hover"><span>Удалить</span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="products" role="tabpanel"
                             aria-labelledby="account-details-tab">
                            <div class="myaccount-orders">
                                <div class="d-flex mb-3">
                                    <h4 class="small-title">Товары</h4>
                                    <a class="btn btn-success btn-success-hover ms-auto h-100" href="{{ route('admin.product.create') }}"><span>Добавить товар</span></a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                        <tr>
                                            <th>Id</th>
                                            <th>Имя</th>
                                            <th>Цена</th>
                                            <th>Категория</th>
                                            <th>Изображение</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        @foreach($products as $product)
                                            <tr>
                                                <td><a class="account-order-id" href="javascript:void(0)">#{{ $product->id }}</a></td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->price }} ₽</td>
                                                <td>{{ $product->category->name ?? 'Не определена' }}</td>
                                                <td><img style="width: 100px" src="{{ asset('storage/' . $product->image) }}" alt=""></td>
                                                <td><a href="{{ route('admin.product.edit', $product) }}" class="btn btn-warning btn-warning-hover"><span>Редактировать</span></a></td>
                                                <td><a href="{{ route('admin.product.destroy', $product) }}" class="btn btn-danger btn-danger-hover"><span>Удалить</span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
