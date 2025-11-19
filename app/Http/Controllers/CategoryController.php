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
    $banner = $request->file('c_banner_img');
    $bannerName = time() . '_' . $banner->getClientOriginalName();
    $banner->move(public_path('category_banners'), $bannerName);
    $bannerPath = 'category_banners/' . $bannerName;
}


    $imagePath = null;
    if ($request->hasFile('c_image')) {
        $image = $request->file('c_image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('category_images'), $imageName); // moves directly to public/category_images
        $imagePath = 'category_images/' . $imageName; // save this path in DB if needed
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



   public function categorylist() {
    $categories = Category::all();
    return view('admin.categorylist', compact('categories'));
}

public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('admin.editcategory', compact('category'));
}


public function destroy($id)
{
    $category = Category::findOrFail($id);
    $category->delete();

    return redirect()->back()->with('success', 'Category deleted successfully');
}
public function update(Request $request, $id)
{
    $request->validate([
        'c_name' => 'required|string|max:255',
        'c_description' => 'nullable|string',
        'c_banner_img' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
        'c_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5000',
    ]);

    $category = Category::findOrFail($id);

    // Update banner image
    if ($request->hasFile('c_banner_img')) {
        $banner = $request->file('c_banner_img');
        $bannerName = time().'_'.$banner->getClientOriginalName();
        $banner->move(public_path('category_banners'), $bannerName);
        $category->c_banner_img = 'category_banners/'.$bannerName;
    }

    // Update category image
    if ($request->hasFile('c_image')) {
        $image = $request->file('c_image');
        $imageName = time().'_'.$image->getClientOriginalName();
        $image->move(public_path('category_images'), $imageName);
        $category->c_image = 'category_images/'.$imageName;
    }

    $category->c_name = $request->c_name;
    $category->c_description = $request->c_description;

    $category->save();

return redirect()->back()->with('success', 'Category updated successfully');
}



}
