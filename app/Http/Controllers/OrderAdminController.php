<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderAdminController extends Controller
{
    public function GetOrders()
    {
        $orders = DB::table("orders")
            ->join("ordertotal", "orders.orderid", "ordertotal.orderid")
            ->join("users", "orders.customerid", "users.id")
            ->get();
        return view('admin.order',compact('orders'));
    }

    public function OrderDetails($id)
    {
        $orders = DB::table("orders")
                    ->join("ordertotal", "orders.orderid", "ordertotal.orderid")
                    ->join("orderdetails", "orders.orderid", "orderdetails.orderid")
                    ->join("products", "orderdetails.prodid", "products.prod_id")
                    ->where('orders.orderid','=',$id)
                    ->get();
       
        $qty=DB::table("orderdetails")
                    ->where('orderid','=',$id)
                    ->sum('qty');

         $price= DB::table("ordertotal")
                    ->where('orderid','=',$id)
                    ->value('total'); 
        return view('admin.orderdetails',compact('orders','price','qty'));
    }
}
