<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\CartItem;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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
    public function store(OrderRequest $request)
    {
        $price =$this->calculateTotalPrice(Auth::id());
        $order = Order::create([
                'user_id' => Auth::id(),
                'total_price' => $price,
                'payment_type' => $request->payment_type,
                'payment_status' => $request->payment_status,
                'country'  => $request->country,
                'city'  => $request->city,
                'street'  => $request->street
        ]);
        // $this->createOrderItems(Auth::id());
        $this->createOrderItems(Auth::id(), $order->id);
        // will be updated
        return "done";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }


    public function ViewAllOrders($user_id){
        $orders=Order::select("orders.total_price","orders.payment_type","orders.payment_status","orders.country","orders.city","orders.street")->where("orders.user_id", $user_id)->get();

        return $orders;
    }

    public function calculateTotalPrice($user_id){
        $items = CartItem::select("cart_items.id", "quantity", "price")
        ->join("products", "products.id", "=", "cart_items.product_id")
        ->where("user_id", Auth::id())->get();
        $result = 0;
        foreach($items as $item){
            $result += ($item->quantity * $item->price);
        }
        return $result;
    }

    protected function createOrderItems($user_id, $order_id){
        $items = CartItem::select("cart_items.id as id", "product_id", "quantity")
        ->join("products", "products.id", "=", "cart_items.product_id")
        ->where("user_id", Auth::id())->get();
        foreach($items as $item){
            $i = OrderItem::create([
                "order_id" => $order_id,
                "product_id" => $item->product_id,
                "quantity" => $item->quantity
            ]);
            CartItem::destroy($item->id);
        }
    }
}
