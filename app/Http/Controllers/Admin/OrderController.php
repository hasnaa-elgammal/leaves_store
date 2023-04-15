<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
        public function index()
    {
        $orders = Order::all();
       
        //return view('orders.index', compact('orders'));
    }

    public function create()
    {
        //return view('orders.create');
    }

    public function store(OrderRequest $request)
    {
        // will be done after frontend
       
        

        //return redirect()->route('orders.index')->with('success', 'Order created successfully');
    }

    public function show($id)
    {
        $Order = Order::find($id);
        // return($Order);
        //return view('orders.edit', compact('Order'));
    }

    public function update(OrderRequest $request, $id)
    {
       
        //return redirect()->route('orders.index')->with('success', 'Order updated successfully');
    }

    public function destroy($id)
    {
      
        Order::destroy($id);
        // return redirect()->route('orders.index')->with('success', 'Order deleted successfully');    
    }
    
}
