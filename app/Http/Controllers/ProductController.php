<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // retrieve all plants whatever their category is
    public function index()
    {
        $products = Product::all();
        return $products;
        return view('plants', [
            'products' => $products
        ]);
    }

    // retrieve 6 plants home screen
    public function HomeScreenProducts()
    {
        $products = Product::all()->random(2);
        return $products;
    }


    // retrieve plants details
    public function show($cat_id,$id)
    {
        $product = Product::findOrFail($id)
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->leftJoin('reviews', 'reviews.product_id', '=', 'products.id')
        ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
        ->select('products.*', 'categories.name as c_name', 'reviews.*', 'users.first_name as f_name', 'users.last_name as l_name')
        ->where('products.id', $id)
        ->get();

        return view('customer.plant', compact('product'));
    }

}
