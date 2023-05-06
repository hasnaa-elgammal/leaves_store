<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WishListItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\WishListItemRequest;

class WishListItemController extends Controller
{

    public function userWishListItems()
    {
        $wishlist_items = WishListItem::select("wish_list_items.id as wishlistItem_id", "products.id", "name", "image", "price")
            ->join("products", "products.id", "=", "wish_list_items.product_id")
            ->where("user_id", Auth::id())->get();

        return $wishlist_items;
    }

    public function store(WishListItemRequest $request)
    {
        $wishlist_item = WishListItem::create([
            "user_id" => Auth::id(),
            "product_id" => $request->product_id
        ]);
        //will be updated
        return "done";
    }

    public function destroy($id)
    {
        WishListItem::destroy($id);
        return redirect()->route('home')->with('message', 'Deleted Successfully.');
    }
}
