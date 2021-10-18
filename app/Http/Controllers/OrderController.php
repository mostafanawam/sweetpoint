<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{

// ! ********************************************************************************************************************
// ! ********************************* Delivery temp customer   *********************************************************  
// ! ******************************************************************************************************************** 
    public function PlaceOrderDelivery(Request $request)
    {
        $temp_cust=DB::table('users')->insert([
            'firstname' => $request->fn,
            'lastname' => $request->ln,
            'phone' => $request->mobile,
            'type'=>'tempCustomer'
        ]);
       
    }

// ! ********************************************************************************************************************
// ! ****************************** takaway temp customer   *************************************************************  
// ! ******************************************************************************************************************** 
    public function PlaceOrderTake(Request $request)
    {
        $temp_cust=DB::table('users')->insert([
            'firstname' => $request->fn,
            'lastname' => $request->ln,
            'phone' => $request->mobile,
            'type'=>'tempCustomer'
        ]);
        $id = DB::table("users") //get the id of the inserted product
            ->max("id");
        $order=DB::table('orders')->insert([
            'customerid' =>  $id ,
            'pickup' => 'takeaway',
            'note' => $request->note,
        ]);
        $orderid = DB::table("orders") //get the id of the order    
            ->max("orderid");
        $order=DB::table('ordertotal')->insert([
            'orderid' =>  $orderid ,
            'total' => $request->total,
        ]);  
        $cart=session('cart');//get the cart
        for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
            $orderdetails=DB::table('orderdetails')->insert([
                'orderid' =>  $orderid ,
                'prodid' => session('cart.id.' . $i),
                'qty'=>session('cart.qty.' . $i)
            ]);  
        }
        if($orderdetails){
            session()->pull('cart', 'default'); //delete all cart session 
            return response()->json([
                "success"=>'Order Placed' //return the number of products in the cart
            ]);
        }
    }
// ! ********************************************************************************************************************
// ! ****************************** Delivery Default address   **********************************************************  
// ! ******************************************************************************************************************** 
    public function PlaceOrderDefault(Request $request)
    {
        $addressid=DB::table('address')
        ->select('add_id')
        ->where('userid','=',session('customer'))
        ->first();
        $order=DB::table('orders')->insert([
            'customerid' =>  session('customer') ,
            'address' =>  $addressid->add_id ,
            'pickup' => 'delivery',
            'note' => $request->note,
        ]);
        $orderid = DB::table("orders") //get the id of the order    
            ->max("orderid");
        $order=DB::table('ordertotal')->insert([
            'orderid' =>  $orderid ,
            'total' => $request->total,
        ]);
        $cart=session('cart');//get the cart
        for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
            $orderdetails=DB::table('orderdetails')->insert([
                'orderid' =>  $orderid ,
                'prodid' => session('cart.id.' . $i),
                'qty'=>session('cart.qty.' . $i)
            ]);  
        }
        if($orderdetails){
            session()->pull('cart', 'default'); //delete all cart session 
            return response()->json([
                 "success"=>'Order Placed' //return the number of products in the cart
            ]);
        }
    }
// ! ********************************************************************************************************************
// ! ****************************** Takaway Loggedin customer   *********************************************************  
// ! ******************************************************************************************************************** 
    public function PlaceOrderCustomerTakaway(Request $request)
    {
        $order=DB::table('orders')->insert([
            'customerid' =>  session('customer') ,
            'pickup' => 'takeaway',
        ]);
        $orderid = DB::table("orders") //get the id of the order    
            ->max("orderid");
        $order=DB::table('ordertotal')->insert([
            'orderid' =>  $orderid ,
            'total' => $request->total,
        ]);
        $cart=session('cart');//get the cart
        for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
            $orderdetails=DB::table('orderdetails')->insert([
                'orderid' =>  $orderid ,
                'prodid' => session('cart.id.' . $i),
                'qty'=>session('cart.qty.' . $i)
            ]);  
        }
        if($orderdetails){
            session()->pull('cart', 'default'); //delete all cart session 
            return response()->json([
                 "success"=>'Order Placed' //return the number of products in the cart
            ]);
        }
    }
// ! ********************************************************************************************************************
// ! ****************************** Delivery new address Customer   *****************************************************  
// ! ********************************************************************************************************************
    public function PlceOrderNewAddress(Request $request)
    {
        $address=DB::table('address')->insert([
            'userid' =>  session('customer') ,
            'city' => $request->city,
            'street' => $request->street,
            'building' => $request->building,
        ]);
        $address = DB::table("address") //get the id of the order    
            ->max("add_id");
        $order=DB::table('orders')->insert([
            'customerid' =>  session('customer') ,
            'address' =>  $address ,
            'pickup' => 'delivery',
            'note' => $request->note,
        ]);
        $orderid = DB::table("orders") //get the id of the order    
            ->max("orderid");
        $order=DB::table('ordertotal')->insert([
            'orderid' =>  $orderid ,
            'total' => $request->total,
        ]);
        $cart=session('cart');//get the cart
        for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
            $orderdetails=DB::table('orderdetails')->insert([
                'orderid' =>  $orderid ,
                'prodid' => session('cart.id.' . $i),
                'qty'=>session('cart.qty.' . $i)
            ]);  
        }
        if($orderdetails){
            session()->pull('cart', 'default'); //delete all cart session 
            return response()->json([
                 "success"=>'Order Placed' //return the number of products in the cart
            ]);
        }
    }
    public function BuildCake(Request $request)
    {
        $custom = DB::table("custom")->insert([
            'name' =>  $request->name ,
            'phone' =>  $request->phone ,
            'size' => $request->size,
            'flavor' => $request->flavor,
            'filling' => $request->filling,
            'icing' => $request->icing,
            'message' => $request->message,
            'instructions' => $request->note,
            'image' => $request->image,
        ]);
        if($custom){
            return response()->json([
                "alert"=>'success' //return the number of products in the cart
            ]); 
        }else{
            return response()->json([
                "alert"=>'error' //return the number of products in the cart
           ]); 
        }
        
    }
}
