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
    }

    // retrieve 6 plants home screen
    public function HomeScreenProducts()
    {
        $products = Product::all()->random(6);
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    // retrieve plants details
    public function show($id)
    {
        $products = Product::findOrFail($id)
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->leftJoin('reviews', 'reviews.product_id', '=', 'products.id')
        ->leftJoin('users', 'reviews.user_id', '=', 'users.id')
        ->select('products.*', 'categories.name as c_name', 'reviews.*', 'users.first_name as f_name', 'users.last_name as l_name')
        ->where('products.id', $id)
        ->get();

        return view('products', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
