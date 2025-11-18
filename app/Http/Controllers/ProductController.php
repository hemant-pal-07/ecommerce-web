<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\Models\category;

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

           if ($request->hasFile("color_images.$index")) {

                foreach ($request->file("color_images.$index") as $file) {

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



}
}

}

public function productlist(){
   // Sab products fetch karo
    $products = Product::all();
         $products = Product::with('colors.images')->get();
    // Pass kar do view me
    return view('admin.productlist', compact('products'));


            // Products with category, colors, images, and sizes
        $products = Product::with(['category', 'colors.images', 'colors.sizes'])->get();



}



public function edit($id)
{
    $product = Product::with('colors.sizes', 'colors.images')->findOrFail($id);
    $categories = Category::all();
    return view('admin.editproduct', compact('product', 'categories'));
}






public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('product.list')->with('success', 'Product deleted successfully!');
}

// update the controller---->
public function update(Request $request, $id)
{
    // 1️⃣ Find the product
    $product = Product::findOrFail($id);



    // 2️⃣ Update main product fields
    $product->update([
        'p_name' => $request->p_name,
        'p_category_id' => $request->p_category_id,
        'p_price' => $request->p_price,
        'p_old_price' => $request->p_old_price,
        'p_stock' => $request->p_stock,
        'p_visibility_status' => $request->p_visibility_status,
        'p_type' => $request->p_type ?? 'simple',
        'p_short_description' => $request->p_short_description,
        'p_long_description' => $request->p_long_description,
    ]);

    // 3️⃣ Delete old colors (if needed)
    // $product->colors()->delete()
if ($request->has('colorname')) {
    foreach ($request->colorname as $index => $colorName) {

        // Check if this is existing color or new one
        $colorId = $request->color_id[$index] ?? null;

        if ($colorId) {
            $color = $product->colors()->find($colorId);
            if ($color) {
                // Update existing color
                $color->update([
                    'color_name' => $colorName,
                    'color_code' => $request->colorcode[$index] ?? null,
                    'color_price_adjustment' => $request->priceadjustment[$index] ?? 0,
                ]);
            }
        } else {
            // Create new color
            $color = $product->colors()->create([
                'color_name' => $colorName,
                'color_code' => $request->colorcode[$index] ?? null,
                'color_price_adjustment' => $request->priceadjustment[$index] ?? 0,
            ]);
        }

        // 3️⃣ Sizes
        if(isset($request->sizename[$index]) && is_array($request->sizename[$index])) {
            foreach($request->sizename[$index] as $sIndex => $sizeName) {
                $sizeId = $request->size_id[$index][$sIndex] ?? null;

                if ($sizeId) {
                    $size = $color->sizes()->find($sizeId);
                    if ($size) {
                        $size->update([
                            'size_name' => $sizeName,
                            'size_price_adjustment' => $request->sizepriceadjustment[$index][$sIndex] ?? 0,
                        ]);
                    }
                } else {
                    $color->sizes()->create([
                        'size_name' => $sizeName,
                        'size_price_adjustment' => $request->sizepriceadjustment[$index][$sIndex] ?? 0,
                    ]);
                }
            }
        }

        // 4️⃣ Images
        if($request->hasFile("color_images.$index")) {
            foreach($request->file("color_images.$index") as $file) {
                $filename = uniqid() . '_' . $file->getClientOriginalName(); // safer unique filename
                $file->storeAs('public/product_colors', $filename);

                $color->images()->create([
                    'img_path' => $filename,
                ]);
            }
        }
    }
}
    return redirect()->back()->with('success', 'Product updated successfully!');
}

}

















