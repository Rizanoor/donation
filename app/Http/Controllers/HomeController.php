<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $categories = Category::get();
        $products = Product::with(['category'])->get();

        return view('pages.home', [
            'categories' => $categories,
            'products'    => $products
        ]);
    }
}
