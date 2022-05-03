<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderStoreRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        if (auth()->user()) {
            if (!session()->has('cart')) {
                session()->flash('notification', [
                    'type' => 'error',
                    'message' => 'Чтобы оформить заказ, в корзине должен быть хотя бы 1 товар'
                ]);
                return redirect()->route('index');
            }
            if (count(session('cart')) === 0) {
                session()->flash('notification', [
                    'type' => 'error',
                    'message' => 'Чтобы оформить заказ, в корзине должен быть хотя бы 1 товар'
                ]);
                return redirect()->route('index');
            }
            return view('checkout');
        }
        session()->flash('notification', [
            'type' => 'error',
            'message' => 'Чтобы оформить заказ, надо авторизоваться'
        ]);
        return redirect()->route('auth.index');
    }

    public function store(OrderStoreRequest $request)
    {
        $data = $request->validated();
        $data['cart'] = json_encode(session('cart'));
        $data['user_id'] = $request->user()->id;
        Order::create($data);
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Заказ успешно оформлен, с вами свяжутся в ближайшее время!'
        ]);
        session()->remove('cart');
        return redirect()->route('index');
    }
}
