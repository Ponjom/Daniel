<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders;
        return view('profile',[
            'orders' => $orders,
        ]);
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('admin.index');
    }
}
