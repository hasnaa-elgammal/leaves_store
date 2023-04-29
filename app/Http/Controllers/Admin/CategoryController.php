<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;



class CategoryController extends Controller
{

    
    public function index()
    {
       
       // $lastUpdated = Category::latest('updated_at')->first();
        $categories = Category::all();
        return view('admin.categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add-category');
    }

    public function store(CategoryRequest $request)
    {
        $file_name = time() . '.' . request()->uploadfile->getClientOriginalExtension();
        $move = request()->uploadfile->move(public_path('images/categories'), $file_name);


        $category = new Category();
        $category->name = $request->name;
        $category->image = $file_name;
        $category->num_of_plants = $request->num_of_plants;
       

        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
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
        $category = Category::findOrFail($id);
        $file_name = "";

        if ($request->hasFile('uploadfile')) {
            $file_name = time() . '.' . request()->uploadfile->getClientOriginalExtension();
            request()->uploadfile->move(public_path('images'), $file_name);
            $category->image = $file_name;
           
        }

       $category->name = $request->name;
       $category->num_of_plants = $request->num_of_plants;
       $category->save();
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
