<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function manageCategory(){
        $categories = Category::all();
        return view('admin.manageCategory', compact('categories'));
    }
    
    // Store the category in the database
    public function insertCategory(Request $request)
    {
        if($request->isMethod("post")){
            // Validate the form data
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'nullable|string',
        ]);

        // Insert the data into the database
        Category::create([
            'name' => $request->category_name,
            'description' => $request->category_description,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.manageCategory')->with('success', 'Category added successfully!');
        }

        return view('admin.insertCategory');
    }
}
