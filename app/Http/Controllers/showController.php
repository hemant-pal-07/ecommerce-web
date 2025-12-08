<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class showController extends Controller
{


    public function  getMenShirtcollection(){

        $category = Category::where('c_name', 'men Shirts')->first();

        if (!$category) {
            // Agar category nahi mili to error na aaye
            abort(404, 'Category not found');
        }

        // Products fetch code

        $products = DB::table('products')
            ->leftJoin('color', 'products.p_id', '=', 'color.color_product_id')
            ->leftJoin('images', 'color.color_id', '=', 'images.img_color_id')
            ->select(
                'products.p_id',
                'products.p_name',
                'products.main_category_id',
                'products.p_category_id',
                'products.p_short_description',
                'products.p_long_description',
                'products.p_price',
                'products.p_old_price',
                'products.p_visibility_status',
                'products.p_stock',
                'products.p_type',
                'products.created_at',
                'products.updated_at',
                DB::raw('MIN(images.img_path) as img_path'),
                DB::raw('MIN(images.img_alt_text) as img_alt_text')
            )
            ->where('products.main_category_id', 1)
            ->where('products.p_category_id', $category->c_id)
            ->groupBy(
                'products.p_id',
                'products.p_name',
                'products.main_category_id',
                'products.p_category_id',
                'products.p_short_description',
                'products.p_long_description',
                'products.p_price',
                'products.p_old_price',
                'products.p_visibility_status',
                'products.p_stock',
                'products.p_type',
                'products.created_at',
                'products.updated_at'
            )
            ->get();

        // Blade me send karo
        return view('collection1', compact('products', 'category'));
    }

    public function collection2()    {
        $category = Category::where('c_name', 'Formal pants & Jeans')->first();
// dd($category);


if (!$category) {
    // Agar category nahi mili to error na aaye
    abort(404, 'Category not found');
}

// Products fetch karo


$products = DB::table('products')
    ->leftJoin('color', 'products.p_id', '=', 'color.color_product_id')
    ->leftJoin('images', 'color.color_id', '=', 'images.img_color_id')
    ->select(
        'products.p_id',
        'products.p_name',
        'products.main_category_id',
        'products.p_category_id',
        'products.p_short_description',
        'products.p_long_description',
        'products.p_price',
        'products.p_old_price',
        'products.p_visibility_status',
        'products.p_stock',
        'products.p_type',
        'products.created_at',
        'products.updated_at',
        DB::raw('MIN(images.img_path) as img_path'),
        DB::raw('MIN(images.img_alt_text) as img_alt_text')
    )
    ->where('products.main_category_id', 1)
    ->where('products.p_category_id', $category->c_id)
    ->groupBy(
        'products.p_id',
        'products.p_name',
        'products.main_category_id',
        'products.p_category_id',
        'products.p_short_description',
        'products.p_long_description',
        'products.p_price',
        'products.p_old_price',
        'products.p_visibility_status',
        'products.p_stock',
        'products.p_type',
        'products.created_at',
        'products.updated_at'
    )
    ->get();




// Blade me send karo
return view('collection2', compact('products', 'category'));

    }






     public function collection3()
    {
        // Sab products database se fetch kare
       $category = Category::where('c_name', 'Shoes')->first();



if (!$category) {
    // Agar category nahi mili to error na aaye
    abort(404, 'Category not found');
}

// Products fetch karo


$products = DB::table('products')
    ->leftJoin('color', 'products.p_id', '=', 'color.color_product_id')
    ->leftJoin('images', 'color.color_id', '=', 'images.img_color_id')
    ->select(
        'products.p_id',
        'products.p_name',
        'products.main_category_id',
        'products.p_category_id',
        'products.p_short_description',
        'products.p_long_description',
        'products.p_price',
        'products.p_old_price',
        'products.p_visibility_status',
        'products.p_stock',
        'products.p_type',
        'products.created_at',
        'products.updated_at',
        DB::raw('MIN(images.img_path) as img_path'),
        DB::raw('MIN(images.img_alt_text) as img_alt_text')
    )
    ->where('products.main_category_id', 1)
    ->where('products.p_category_id', $category->c_id)
    ->groupBy(
        'products.p_id',
        'products.p_name',
        'products.main_category_id',
        'products.p_category_id',
        'products.p_short_description',
        'products.p_long_description',
        'products.p_price',
        'products.p_old_price',
        'products.p_visibility_status',
        'products.p_stock',
        'products.p_type',
        'products.created_at',
        'products.updated_at'
    )
    ->get();


       return view('mencollection3', compact('products', 'category'));

    }


        public function womencollection1()
        {
            $category = Category::where('c_name', "kurti's")->firstOrFail();

            // Eager load colors and their images
            $products = DB::table('products')
            ->leftJoin('color', 'products.p_id', '=', 'color.color_product_id')
            ->leftJoin('images', 'color.color_id', '=', 'images.img_color_id')
            ->select(
                'products.p_id',
                'products.p_name',
                'products.main_category_id',
                'products.p_category_id',
                'products.p_short_description',
                'products.p_long_description',
                'products.p_price',
                'products.p_old_price',
                'products.p_visibility_status',
                'products.p_stock',
                'products.p_type',
                'products.created_at',
                'products.updated_at',
                DB::raw('MIN(images.img_path) as img_path'),
                DB::raw('MIN(images.img_alt_text) as img_alt_text')
            )
            ->where('products.main_category_id', 2)
            ->where('products.p_category_id', $category->c_id)
            ->groupBy(
                'products.p_id',
                'products.p_name',
                'products.main_category_id',
                'products.p_category_id',
                'products.p_short_description',
                'products.p_long_description',
                'products.p_price',
                'products.p_old_price',
                'products.p_visibility_status',
                'products.p_stock',
                'products.p_type',
                'products.created_at',
                'products.updated_at'
            )
            ->get();

            return view('womencollection1',compact('products', 'category'));
        }





      public function womencollection2()
    {
       $category = Category::where('c_name', 'Tops & T-Shirts')->firstOrFail();

            // Eager load colors and their images
            $products = DB::table('products')
            ->leftJoin('color', 'products.p_id', '=', 'color.color_product_id')
            ->leftJoin('images', 'color.color_id', '=', 'images.img_color_id')
            ->select(
                'products.p_id',
                'products.p_name',
                'products.main_category_id',
                'products.p_category_id',
                'products.p_short_description',
                'products.p_long_description',
                'products.p_price',
                'products.p_old_price',
                'products.p_visibility_status',
                'products.p_stock',
                'products.p_type',
                'products.created_at',
                'products.updated_at',
                DB::raw('MIN(images.img_path) as img_path'),
                DB::raw('MIN(images.img_alt_text) as img_alt_text')
            )
            ->where('products.main_category_id', 2)
            ->where('products.p_category_id', $category->c_id)
            ->groupBy(
                'products.p_id',
                'products.p_name',
                'products.main_category_id',
                'products.p_category_id',
                'products.p_short_description',
                'products.p_long_description',
                'products.p_price',
                'products.p_old_price',
                'products.p_visibility_status',
                'products.p_stock',
                'products.p_type',
                'products.created_at',
                'products.updated_at'
            )
            ->get();

        // Home page view ke saath products bheje
        return view('womencollection2', compact('products','category'));
    }






     public function womencollection3()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('womencollection3', compact('products'));
    }

     public function kidscollection1()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('kidscollection1', compact('products'));
    }
      public function kidscollection2()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('kidscollection2', compact('products'));
    }
     public function kidscollection3()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('kidscollection3', compact('products'));
    }
      public function maincollection()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('maincategorycollection', compact('products'));
    }
     public function womenmaincollection()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('womenmaincategory', compact('products'));
    }
     public function kidsmaincollection()
    {
        // Sab products database se fetch kare
        $products = Product::all();

        // Home page view ke saath products bheje
        return view('kidsmaincategory', compact('products'));
    }


    // product show---->
    public function showByCategory($category)
{
    // Category ke hisaab se products filter karo--->
    $products = Product::where('category', $category)->get();

    // Same view use karo ya alag-alag, tumhari marzi
    return view('collection', compact('products', 'category'));
}





}
