<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashbaordController extends Controller
{
    public function index()
    {
        $user= Auth::user()->first_name;
        // calculate total revenue 
        $date = now('Y-m-d');
        $totalRevenue = DB::table('orders')
                ->whereDate('created_at', $date)
                ->where('payment_status', 'done')
                ->sum('total_price');

        // calculate the total number of orders
        $totalOrders = Order::count();

        // calculate the total number of users 
        $totalUsers = User::count();
        // select 3 random plants
        $plants=Product::all()->random(3);

       // return view('admin.dashboard', compact('totalRevenue', 'totalOrders', 'totalUsers', 'plants', $user));
         
    }
}
