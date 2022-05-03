<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }

    public function add(Product $product, Request $request)
    {
        $cart = session('cart');
        $count = 1;
        if ($value = $request->count) {
            $count = $value;
        }
        if ($cart) {
            $cart[] = [
                'product' => $product,
                'count' => $count,
            ];
        } else {
            $cart = [[
                'product' => $product,
                'count' => $count
            ]];
        }
        session()->put('cart', $cart);
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Товар успешно добавлен в корзину'
        ]);
        return redirect()->back();
    }

    public function remove(Product $product)
    {
        $cart = collect(session('cart'));
        $cart = $cart->where('product.id','!==', $product->id);
        session()->put('cart', $cart->toArray());
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Товар успешно убран из корзины'
        ]);
        return redirect()->back();
    }

    public function update(Request $request)
    {
        if (session()->has('cart')) {
            $cart = session('cart');
            $requestCart = collect($request->cart);
            foreach ($cart as $key => $item) {
                $productId = $item['product']->id;
                $cart[$key]['count'] = $requestCart->where('product_id', $productId)->first()['count'];
            }
            session()->put('cart', $cart);
        }
        session()->flash('notification', [
            'type' => 'success',
            'message' => 'Корзина успешно обновлена'
        ]);
        return redirect()->back();
    }
}
