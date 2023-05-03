<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::select('categories.name')->get();

        return view('customer.categories', [
            'categories' => $categories
        ]);
    }

    // retrieve all plants in specified category
    public function show($id)
    {
        $category = Category::findOrFail($id);
        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.id', $id)
            ->select('products.*')
            ->get();

        return view('customer.category', [
            'category' => $category,
            'products' => $products
        ]);
    }


    public function HomeScreenCategories()
    {
        $categories = Category::all()->random(3);
        return $categories;
    }
}
