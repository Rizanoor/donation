<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function index()
    {
        return view('pages.donate');
    }
}
