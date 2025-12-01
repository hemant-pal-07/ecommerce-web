<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class showController extends Controller
{
    public function addproduct()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('collections', compact('products'));
    }
}
