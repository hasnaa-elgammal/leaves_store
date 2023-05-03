<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WishListItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\WishListItemRequest;

class WishListItemController extends Controller
{

    public function userWishListItems()
    {
        $items = WishListItem::select("wish_list_items.id","products.id", "name", "image", "price")
        ->join("products", "products.id", "=", "wish_list_items.product_id")
        ->where("user_id", Auth::id())->get();

        //will be updated to redirect
        return $items;
    }

    public function store(WishListItemRequest $request)
    {
        $item = WishListItem::create([
            "user_id"=> Auth::id(),
            "product_id"=> $request->product_id
        ]);
        //will be updated
        return "done";
    }

    public function destroy(int $id)
    {
        WishListItem::destroy($id);

        //will be update to redirect
        return "done";
    }
}
