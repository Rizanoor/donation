<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('pages.donate', [
            'product' => $product
        ]);
    }

    public function store(TransactionRequest $request)
    {
        $data = $request->all();
 
        $product = Product::findOrFail($data['products_id']);
        if ($product->current_price !== null) {
            $product->current_price += $data['donate_price'];
        } else {
            $product->current_price = $data['donate_price'];
        }
            $product->save();

        Transaction::create($data);

        return redirect()->route('success');
    }

    public function success()
    {
        return view('pages.success');
    }
}
