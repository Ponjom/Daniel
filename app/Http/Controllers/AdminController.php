<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $categories = Category::all();
        $products = Product::with('category')->get();
        $orders = Order::with('user')->get();
        return view('admin.index',[
            'users' => $users,
            'categories' => $categories,
            'products' => $products,
            'orders' => $orders,
        ]);
    }

    public function toggleAdminStatus(User $user) {
        if ($user->isAdmin()) {
            $user->isAdmin = 0;
            session()->flash('notification', [
                'type' => 'success',
                'message' => 'Пользователь больше не администратор'
            ]);
        } else {
            $user->isAdmin = 1;
            session()->flash('notification', [
                'type' => 'success',
                'message' => 'Пользователь теперь администратор'
            ]);
        }
        $user->save();
        return redirect()->route('admin.index');
    }
}
