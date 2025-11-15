<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Get All Categories
    public function create()
    {
       return view('admin.addcategory');
  }



    // Add Category
 public function store(Request $request)
{
    // Validate input
    $request->validate([
        'c_name' => 'required|string|max:255',
        'c_description' => 'nullable|string',
        'c_banner_img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
        'c_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
    ]);

    // Upload images if present
    $bannerPath = null;
    if ($request->hasFile('c_banner_img')) {
        $bannerPath = $request->file('c_banner_img')->store('public/category_banners');
    }

    $imagePath = null;
    if ($request->hasFile('c_image')) {
        $imagePath = $request->file('c_image')->store('public/category_images');
    }

    // Create category
    $category = Category::create([
        'c_name' => $request->c_name,
        'c_description' => $request->c_description,
        'c_banner_img' => $bannerPath,
        'c_image' => $imagePath,
    ]);

      return redirect()->back()->with('success', 'Category Added Successfully');
}

   public function categorylist(){
    return view('admin.categorylist');
   }
}
