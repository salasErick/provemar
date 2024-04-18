<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Inertia\Inertia;
use Lunar\Models\Product;

class UserController extends Controller
{
    public function index() {
        $products = Product::with('productType', 'brand')->limit(10)->get();
        $products = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'productType' => $product->productType,
                'brand' => $product->brand,
                // add other product fields here
            ];
        });
    
        return Inertia::render('User/Index', [
            'products' => $products,
            'canLogin' => app('router')->has('login'),
            'canRegister' => app('router')->has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }
}