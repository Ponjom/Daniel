<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->withCount('products')->get();
        $products = Product::with('category')->get();
        $newProducts = $products->sortBy('created_ad');
        $cart = session('cart');
        return view('index', [
            'categories' => $categories,
            'newProducts' => $newProducts,
            'cart' => $cart,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }
}
