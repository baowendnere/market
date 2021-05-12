<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::orderByDesc("id")->take(9)->get();
        return view('welcome', ['products' => $products]);
    }
}
