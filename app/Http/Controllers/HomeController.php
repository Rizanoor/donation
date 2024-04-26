<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $categories = Category::take(6)->get();
        $products  = Product::take(6)->get();

        return view('pages.home', [
            'categories' => $categories,
            'products'    => $products
        ]);
    }
}
