<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CausesController extends Controller
{
    public function index() 
    {
        $products = Product::with(['category'])->get();

        return view('pages.causes',[
            'products'    => $products
        ]);
    }
}
