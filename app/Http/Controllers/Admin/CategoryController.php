<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;



class CategoryController extends Controller
{

    
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add-category');
    }

    public function store(CategoryRequest $request)
    {
        Category::create(
            [
                'name' => $request->name,
                'num_of_types' => $request->num_of_types,
            ]
        );
        //return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit-category', [
            'category' => $category
        ]);
    }

    public function show($id)
    {
        $category = Category::find($id);
        
        return view('admin.categories.delete-category', compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = Category::find($id);
        $data->update([
            'name' => $request->name,
            'num_of_types' => $request->num_of_types,
        ]);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
