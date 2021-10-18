<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CartController extends Controller
{

    public function EmptyCart()//empty the cart by deleting the cart session
    {
        session()->pull('cart', 'default'); //delete all cart session 
        return redirect()->back();
    }
/*************************************************************************************** */
/*************************************************************************************** */
    public function RemoveProduct($id)
    { 
        Session::forget('cart.id.' . $id);
        Session::forget('cart.name.' . $id);
        Session::forget('cart.description.' . $id);
        Session::forget('cart.qty.' . $id);
        Session::forget('cart.price.' . $id);
        Session::forget('cart.image.' . $id);
        session()->save();
        return back();
    }
/*************************************************************************************** */
/*************************************************************************************** */  
    public function AddtoCart(Request $request)
    {

        $product=DB::table("products")
        // ->join("categories", "products.cat_id", "categories.cat_id")
            ->where('prod_id',$request->id)
            ->get();
            foreach($product as $prod){
                $image=$prod->image;
                $price=$prod->price;
                $desc=$prod->description;
                $name=$prod->name;
            }
        $totalqty=0;

        
        if(session()->has('cart')){
            
            $cart=session('cart');//get the cart

            for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
                $totalqty+=session('cart.qty.' . $i);
            }
            for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
                    if(session('cart.id.' . $i)==$request->id){
                        $qty=session('cart.qty.' . $i);//get the current qty
                        session()->put('cart.qty.'.$i,++$qty);//add 1 to qty
                        session()->put('cart.totalprice.'.$i,$price*$qty);//add 1 to qty
                        
                        return response()->json([
                            "count"=>$totalqty+1 //return the number of products in the cart
                        ]);
                    }
                }
        }
        
    
            foreach($product as $prod){
                session()->push('cart.id',$request->id);
                session()->push('cart.name',$name);
                session()->push('cart.description',$desc);
                session()->push('cart.qty',1);
                session()->push('cart.price',$price);
                session()->push('cart.totalprice',$price);
                session()->push('cart.image',$image);
            }

        return response()->json([
            "count"=>$totalqty+1 //return the number of products in the cart
        ]);
    }
/*************************************************************************************** */
/*************************************************************************************** */
    public function GetCart()//get the cart page filled with all the products added to cart
    {
        if(Session::has('cart')){
            $cart=session('cart');//get the cart
            $total=0;
            for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
                if(isset($cart['price'][$i])){//check if in this index there is a value
                    $total+= $cart['totalprice'][$i];
                } 
            }
            return view('shop.cart',compact('cart','total'));
        }
        else{
            return view('shop.cart');
        }
    }
}
/*key(array_slice($cart['name'], -1, 1, true))  get the max index*/
/*key($cart['name']) get the first index*/