<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\WishListItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\WishListItemRequest;

class WishListItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function userWishListItems()
    {
        $items = WishListItem::select("wish_list_items.id","products.id", "name", "image", "price")
        ->join("products", "products.id", "=", "wish_list_items.product_id")
        ->where("user_id", Auth::id())->get();

        //will be updated to redirect
        return $items;
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
    public function store(WishListItemRequest $request)
    {
        $item = WishListItem::create([
            "user_id"=> Auth::id(),
            "product_id"=> $request->product_id
        ]);
        //will be updated
        return "done";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WishListItem  $wishListItem
     * @return \Illuminate\Http\Response
     */
    public function show(WishListItem $wishListItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WishListItem  $wishListItem
     * @return \Illuminate\Http\Response
     */
    public function edit(WishListItem $wishListItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WishListItem  $wishListItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WishListItem $wishListItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WishListItem  $wishListItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        WishListItem::destroy($id);

        //will be update to redirect
        return "done";
    }
}
