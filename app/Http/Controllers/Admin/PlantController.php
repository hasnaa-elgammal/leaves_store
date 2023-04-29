<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlantRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function index()
    {
        $plants = Product::all();
       return view('admin.plants.plants', compact('plants'));
    }

    public function create()
    {   $categories = Category::all();
        return view('admin.plants.add-plant', compact('categories'));
    }

    public function store(PlantRequest $request)
    {
        $file_name = time() . '.' . request()->uploadfile->getClientOriginalExtension();
        request()->uploadfile->move(public_path('images/plants'), $file_name);
        $plant = new Product();
        $plant->name = $request->name;
        $plant->image = $file_name;
        $plant->stock = $request->stock;
        $plant->price = $request->price;
        $plant->category_id = $request->category_id;
       

        $plant->save();
       
        return redirect()->route('plants.index')->with('success', 'Plant created successfully');
    }

    public function show($id)
    {
        $plant = Product::find($id);
       
        return view('admin.plants.delete-plant', compact('plant'));
    }
    public function edit($id)
    {
        $categories = Category::all();
        $plant = Product::findOrFail($id);
        return view('admin.plants.edit-plant', [
            'plant' => $plant,
            'categories'=>$categories
        ]);
    }

    public function update(PlantRequest $request, $id)
    {
        //image not required in update , so the request must be edited here 
        $data = Product::find($id);
        $file_name = "";

        if ($request->hasFile('uploadfile')) {
            $file_name = time() . '.' . request()->uploadfile->getClientOriginalExtension();
            request()->uploadfile->move(public_path('images/plants'), $file_name);
            $data->image = $file_name;
        }
        $data->name = $request->name;
        $data->category_id = $request->category_id;
        $data->price = $request->price;
        $data->stock = $request->stock;
       
        $data->save();


        return redirect()->route('plants.index')->with('success', 'Plant updated successfully');




    }

    public function destroy($id)
    {
        Product::destroy($id);
         return redirect()->route('plants.index')->with('success', 'Plant deleted successfully');
    }
}
