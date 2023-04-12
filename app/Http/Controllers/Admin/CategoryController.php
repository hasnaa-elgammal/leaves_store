<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
{
    $categories = Category::all();
    //return view('categories.index', compact('categories'));
}

public function create()
{
    //return view('categories.create');
}

public function store(Request $request)
{
    Category::create(
        [
            'name' =>$request->name,
            'num_of_types' =>$request->num_of_types,
        ]
    );
    //return redirect()->route('categories.index')->with('success', 'Category created successfully');
}

public function show($id)
{
    $category = Category::find($id);
   // return($category);
    //return view('categories.edit', compact('category'));
}

public function update(Request $request, $id)
{
    $data = Category::find($id);
    $data->update([
        'name' =>$request->name,
        'num_of_types' =>$request->num_of_types,
    ]);
    //return redirect()->route('categories.index')->with('success', 'Category updated successfully');
}

public function destroy($id)
{
    Category::destroy($id);
   // return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
}
}
