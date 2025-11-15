<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;

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

        $request->validate([
            'p_name' => 'required|string|max:255',
            'p_category_id' => 'required|integer',
            'p_short_description' => 'nullable|string',
            'p_long_description' => 'nullable|string',
            'p_price' => 'required|numeric',
            'p_old_price' => 'nullable|numeric',
            'p_visibility_status' => 'nullable|integer',
            'p_stock' => 'nullable|integer',
            'p_type' => 'nullable|string|max:255',
        ]);

        // PRODUCT CREATE
    $product = Product::create([
    'p_name' => $request->p_name,
    'p_category_id' => $request->p_category_id,
    'p_short_description' => $request->p_short_description,
    'p_long_description' => $request->p_long_description,
    'p_price' => $request->p_price,
    'p_old_price' => $request->p_old_price,
    'p_visibility_status' => $request->p_visibility_status ?? 1,
    'p_stock' => $request->p_stock ?? 0,
    'p_type' => $request->p_type ?? 'simple',
     'created_at' => now(),
     'updated_at' => now(),
]);

// 2️⃣ COLORS SAVE (USING MODEL)
   if($request->colorname) {
    foreach($request->colorname as $index => $colorName) {
        $colorCode = $request->colorcode[$index] ?? null;
        $priceAdj = $request->priceadjustment[$index] ?? 0;

        // Save color
        $color = \App\Models\Color::create([
            'color_product_id' => $product->p_id,
            'color_name' => $colorName,
            'color_code' => $colorCode,
            'color_price_adjustment' => $priceAdj,
            'color_image' => $request->colorimage[$index] ?? null,
        ]);

        // Save sizes for this color
        if(isset($request->sizename[$index]) && is_array($request->sizename[$index])) {
            foreach($request->sizename[$index] as $sIndex => $sizeName) {
                $sizePrice = $request->sizepriceadjustment[$index][$sIndex] ?? 0;

                \App\Models\Size::create([
                    'size_color_id' => $color->color_id,
                    'size_name' => $sizeName,
                    'size_price_adjustment' => $sizePrice,
                ]);
            }
        }
           if ($request->hasFile('color_images')) {

    foreach ($request->file('color_images') as $file) {

        $filename = time().'_'.$file->getClientOriginalName();
        $file->storeAs('public/colors', $filename);

        \App\Models\Image::create([
            'img_color_id' => $color->color_id,
            'img_path' => $filename,
            'img_alt_text' => $color->color_name,
        ]);
    }
}



     return redirect()->route('product.create')->with('success', 'Product added successfully!');

        return redirect()->route('product.create')
                     ->with('success', 'Product with Colors & Sizes added successfully!');

}
}

}
}









