<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CartItemRequest;

class CartItemController extends Controller
{
    public function userCartItems(){
        $items = CartItem::select("cart_items.id","products.id", "name", "image", "quantity", "price")
        ->join("products", "products.id", "=", "cart_items.product_id")
        ->where("user_id", Auth::id())->get();

        //will be updated to redirect
        return $items;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartItemRequest $request)
    {
        $item = CartItem::create([
            "user_id"=> Auth::id(),
            "product_id"=> $request->product_id,
            "quantity"=> $request->quantity
        ]);
        //will be updated
        return "done";
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function update(CartItemRequest $request, int $id)
    {
        $item = CartItem::findOrFail($id);
        $item->update([
            "quantity"=>$request->quantity
        ]);

        //will be updated
        return "done";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        CartItem::destroy($id);

        //will be update to redirect
        return "done";
    }
}
