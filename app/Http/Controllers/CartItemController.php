<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CartItemRequest;
use Illuminate\Support\Facades\DB;

class CartItemController extends Controller
{
    public function userCartItems()
    {
        $cart_items = CartItem::select("cart_items.id as cartItem_id", "products.id", "name", "image", "quantity", "price")
            ->join("products", "products.id", "=", "cart_items.product_id")
            ->where("user_id", Auth::id())->get();

        return $cart_items;
    }

    public function store(CartItemRequest $request)
    {
        $item = CartItem::create([
            "user_id" => Auth::id(),
            "product_id" => $request->product_id,
            "quantity" => $request->quantity
        ]);
        //will be updated
        return "done";
    }

    public function edit(CartItem $cartItem)
    {
        //
    }

    public function update(Request $request)
    {
        $cart_item = CartItem::findOrFail($request->cartItem_id);
        $product_id = $cart_item->product_id;
        $product_stock = DB::table('products')
            ->where('id', $product_id)
            ->value('stock');

        $new_quantity = $request->quantity;
        if ($new_quantity > $product_stock) {
            return redirect()->back()->with('error', 'Quantity exceeds product stock');
        }

        $cart_item->quantity = $new_quantity;
        $cart_item->save();

        return redirect()->back()->with('message', 'Updated Successfully.');
    }


    public function destroy(int $id)
    {
        CartItem::destroy($id);
        return redirect()->route('home')->with('message', 'Deleted Successfully.');
    }
}
