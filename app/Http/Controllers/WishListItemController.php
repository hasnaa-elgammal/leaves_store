<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\WishListItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\WishListItemRequest;


class WishListItemController extends Controller
{
    public function index()
    {

    }
    public function userWishListItems()
    {
        $wishlist_items = WishListItem::select("wish_list_items.id as wishlistItem_id", "products.id", "name", "image", "price")
            ->join("products", "products.id", "=", "wish_list_items.product_id")
            ->where("user_id", Auth::id())->get();

        return $wishlist_items;
    }
    public function userWishListItemsHome()
    {
        $wishlist_items = WishListItem::select("wish_list_items.id as wishlistItem_id", "products.id", "name", "image", "price")
            ->join("products", "products.id", "=", "wish_list_items.product_id")
            ->where("user_id", Auth::id())->get();

        return $wishlist_items;
    }

    public function store(WishListItemRequest $request)
    {
        // if($request->session()->has('user')){
        //     return 'hello';
        // }
        // else
        // {
        //     return redirect('/login');
        // }
        $wishlist_item = WishListItem::create([
            "user_id" => Auth::id(),
            "product_id" => $request->product_id
        ]);
        //will be updated
        return back();
        
    }

    public function destroy($id)
    {
        WishListItem::destroy($id);
        return redirect()->route('home')->with('message', 'Deleted Successfully.');
    }
}
