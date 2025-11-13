<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Show form
    public function create()
    {
        return view('admin.addproduct');
    }

    // Handle form submit
    public function store(Request $request)
    {
        // ✅ Validation
        $request->validate([
            'productName'  => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:3000',
            'colors' => 'required|array',
            'sizes' => 'required|array',
            'productDescription' => 'nullable|string',
        ]);

        // image upload k code--->
          $filename = null;
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time().'_'.$file->getClientOriginalName();
        $file->storeAs('public/upload/product', $filename);
    }

        // ✅ Product create----->
        Product::create([
            'productName' => $request->productName,
            'category' => $request->category,
            'price' => $request->price,
            'image' => $filename,
            'colors' => $request->color?json_encode($request->color):null,
            'sizes' => $request->sizes?json_encode($request->sizes):null,
            'productDescription'=> $request->productDescription,
        ]);

        // ✅ Redirect back with success--->
return redirect()->route('product.create')->with('success', 'Product added successfully!');
    }

    public function createcategory()
    {
        return view('admin.addcategory');
    }


}


