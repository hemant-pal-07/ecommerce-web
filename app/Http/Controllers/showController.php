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
        return view('collection1', compact('products'));
    }
    public function collection2()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('collection2', compact('products'));
    }
     public function collection3()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('mencollection3', compact('products'));
    }
    public function womencollection1()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('womencollection1', compact('products'));
    }
      public function womencollection2()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('womencollection2', compact('products'));
    }
     public function womencollection3()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('womencollection3', compact('products'));
    }
}
