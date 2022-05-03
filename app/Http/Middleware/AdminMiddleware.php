<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->isAdmin()) {
            return $next($request);
        }
        session()->flash('notification', [
            'type' => 'error',
            'message' => 'Вы не являетесь администратором!'
        ]);
        return redirect()->route('index');
    }
}
