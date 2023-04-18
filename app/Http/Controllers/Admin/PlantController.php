<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PlantRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    public function index()
    {
        $products = Product::all();
       return view('admin.plants.plants', compact('products'));
    }

    public function create()
    {
        //return view('products.create');
    }

    public function store(PlantRequest $request)
    {

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/plants'), $file_name);
        Product::create(
            [
                'name' => $request->name,
                'category_id' => $request->category_id,
                'image' => $file_name,
                'description' => $request->description,
                'price' => $request->price,
                'care_instructions' => $request->care_instructions


            ]
        );
        //return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function show($id)
    {
        $Product = Product::find($id);
       
        return view('admin.plants.delete-plant', compact('Product'));
    }

    public function update(PlantRequest $request, $id)
    {
        //image not required in update , so the request must be edited here 
        $data = Product::find($id);
        $file_name = "";

        if ($request->hasFile('image')) {
            $file_name = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/plants'), $file_name);
            $data->update([
                'image' => $file_name,
            ]);
        }
        $data->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'price' => $request->price,
            'care_instructions' => $request->care_instructions
        ]);


        //return redirect()->route('products.index')->with('success', 'Product updated successfully');




    }

    public function destroy($id)
    {
        Product::destroy($id);
        // return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
