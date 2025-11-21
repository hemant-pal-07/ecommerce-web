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
        $categories = Category::all(); // fetch all categories from DB
    return view('admin.addproduct', compact('categories'));

    }

    // Handle form submit
  public function store(Request $request)
{
    // Validation
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
    $product = \App\Models\Product::create([
        'p_name' => $request->p_name,
        'p_category_id' => $request->p_category_id,
        'p_short_description' => $request->p_short_description,
        'p_long_description' => $request->p_long_description,
        'p_price' => $request->p_price,
        'p_old_price' => $request->p_old_price,
        'p_visibility_status' => $request->p_visibility_status ?? 1,
        'p_stock' => $request->p_stock ?? 0,
        'p_type' => $request->p_type ?? 'simple',
    ]);

    // COLORS SAVE
    if ($request->colorname) {
        foreach ($request->colorname as $index => $colorName) {
            $colorCode = $request->colorcode[$index] ?? null;
            $priceAdj = $request->priceadjustment[$index] ?? 0;

            // Save color
            $color = \App\Models\Color::create([
                'color_product_id' => $product->p_id,
                'color_name' => $colorName,
                'color_code' => $colorCode,
                'color_price_adjustment' => $priceAdj,
            ]);

            // Save sizes for this color
            if (isset($request->sizename[$index]) && is_array($request->sizename[$index])) {
                foreach ($request->sizename[$index] as $sIndex => $sizeName) {
                    $sizePrice = $request->sizepriceadjustment[$index][$sIndex] ?? 0;

                    \App\Models\Size::create([
                        'size_color_id' => $color->color_id,
                        'size_name' => $sizeName,
                        'size_price_adjustment' => $sizePrice,
                    ]);
                }
            }

            // Save images for this color
            if ($request->hasFile("color_images.$index")) {
                foreach ($request->file("color_images.$index") as $file) {
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->storeAs('public/colors', $filename);

                    \App\Models\Image::create([
                        'img_color_id' => $color->color_id,
                        'img_path'     => $filename,
                        'img_alt_text' => $color->color_name,
                    ]);
                }
            }
        }
    }

    return redirect()->back()->with('success','Product updated successfully!');
}


// public function productlist(){
//    // Sab products fetch karo
//     $products = Product::all();
//          $products = Product::with('colors.images')->get();
//          $products = Product::with('category')->get();
//     // Pass kar do view me
//     return view('admin.productlist', compact('products'));


//             // Products with category, colors, images, and sizes
//         $products = Product::with(['category', 'colors.images', 'colors.sizes'])->get();



// }
public function productlist()
{
    $products = Product::with([
        'category',
        'colors.images',
        'colors.sizes'
    ])->get();

    return view('admin.productlist', compact('products'));
}




public function edit($id)
{
    $product = Product::with('colors.sizes', 'colors.images')->findOrFail($id);
    $categories = Category::all();
    return view('admin.editproduct', compact('product', 'categories'));
}






// public function destroy($id)
// {
//     $product = Product::with('images', 'colors.sizes', 'colors.images')->findOrFail($id);

//     // 1. DELETE PRODUCT IMAGES FROM STORAGE & DB
//     foreach ($product->images as $img) {
//         if(Storage::exists('public/colors/'.$img->img_path)){
//             Storage::delete('public/colors/'.$img->img_path);
//         }
//         $img->delete();
//     }

//     // 2. DELETE COLORS & THEIR RELATED SIZES & IMAGES
//     foreach($product->colors as $color){
//         // Delete color images
//         foreach($color->images as $cImg){
//             if(Storage::exists('public/colors/'.$cImg->img_path)){
//                 Storage::delete('public/colors/'.$cImg->img_path);
//             }
//             $cImg->delete();
//         }

//         // Delete color sizes
//         foreach($color->sizes as $size){
//             $size->delete();
//         }

//         // Delete color itself
//         $color->delete();
//     }

//     // 3. DELETE PRODUCT ITSELF
//     $product->delete();

//     return redirect()->back()->with('success', 'Product and all related data deleted successfully!');
// }

public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete(); // Cascade delete

    return redirect()->route('product.list')->with('success', 'Product and related data deleted!');
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


if ($request->has('colorname')) {
    foreach ($request->colorname as $index => $colorName) {
            if (empty($colorName)) continue;
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
        }
     else {
    // NEW COLOR → create only if user manually added a new color
    // if (!empty($colorName)) {
    //     $color = $product->colors()->create([
    //         'color_name' => $colorName,
    //         'color_code' => $request->colorcode[$index] ?? null,
    //         'color_price_adjustment' => $request->priceadjustment[$index] ?? 0,
    //     ]);
    // }
        }

        // 3️⃣ Sizes
        if(isset($request->sizename[$index]) && is_array($request->sizename[$index])) {
            foreach($request->sizename[$index] as $sIndex => $sizeName) {
                $sizeId = $request->size_id[$index][$sIndex] ?? null;
          if (empty($colorName)) continue;

                if ($sizeId) {
                    $size = $color->sizes()->find($sizeId);
                    if ($size) {
                        $size->update([
                            'size_name' => $sizeName,
                            'size_price_adjustment' => $request->sizepriceadjustment[$index][$sIndex] ?? 0,
                        ]);
                    }
                }
                else {
                        // New size → only if manually added
                        // if(!empty($sizeName)){
                        //     $color->sizes()->create([
                        //         'size_name' => $sizeName,
                        //         'size_price_adjustment' => $request->sizepriceadjustment[$index][$sIndex] ?? 0,
                        //     ]);
                        // }
                    }
                }
        }



        foreach ($request->colorname as $index => $colorName) {

    $colorId = $request->color_id[$index] ?? null;

    if (!$colorId) {
        continue;
    }

    $color = $product->colors()->find($colorId);

    if ($color) {
        $color->update([
            'color_name' => $colorName,
            'color_code' => $request->colorcode[$index] ?? null,
            'color_price_adjustment' => $request->priceadjustment[$index] ?? 0,
        ]);
    }
}


           // If new images uploaded
        if ($request->hasFile("color_images.$index")) {

            foreach ($request->file("color_images.$index") as $imgFile) {

                // Save file in storage/app/public/colors
                $path = $imgFile->store('public/colors');
                $fileName = basename($path);

                // Insert into DB
                $color->images()->create([
                    'img_path' => $fileName,
                ]);
            }
        }
    }
    return redirect()->back()->with('success', 'Product updated successfully!');
}

}


// public function view($id)
// {
//     $product = Product::with('category')->findOrFail($id);
//     $products = Product::with('category')->get();


//   return view('admin.viewproduct', compact('product'));

// }

public function view($id)
{
    $product = Product::with([
        'category',
        'colors.images',
        'colors.sizes'
    ])->findOrFail($id);

    return view('admin.viewproduct', compact('product'));
}

}


















