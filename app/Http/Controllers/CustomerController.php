<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
class CustomerController extends Controller
{
    public function SignUp(Request $request)
    {
         //Validate requests
         $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "phone" => "required|digits:8|unique:users",
            "email" => "required|email|unique:users",
            "password" => "required|min:6|max:12",
            "city" => "required|",
            "street" => "required|",
            "building" => "required|",
        ]);
        //Insert data into database
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->type = 'Customer';
        $user->password = Hash::make($request->password);
        $save = $user->save();


        $id=DB::table('users')//get the id of the latest
        ->max('id');

        $address=DB::table('address')->insert([
            'userid' => $id,
            'city' => $request->city,
            'street' => $request->street,
            'building' => $request->building,
        ]);
        if($address){
            return redirect('/shop/login');
        }
        else{
            return redirect('/shop/login')->with("fail", "Something went wrong,try again!");
        }
        
    }
/***************************************************************************************/
/***************************************************************************************/
    public function Sigin(Request $request)
    {
        //authenticate user
        //Validate requests
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:5|max:12",
        ]);
        $userInfo = User::where("email", "=", $request->email)
        ->where('type',"Customer")
        ->first();
        if (!$userInfo) {
            return back()->with(
                "fail",
                "We do not recognize your email address"
            );
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                session()->put("customer", $userInfo->id);
                return redirect("/shop/home");
            } else {
                return back()->with("fail", "Incorrect password");
            }
        }
       
    }
/***************************************************************************************/
/***************************************************************************************/
    function Logout()
    {
        //delete session('admin') when logout
        if (session()->has('customer')) {
            session()->pull('customer');
        }
        return redirect('/shop/home');
    }
/***************************************************************************************/
/***************************************************************************************/
    public function CheckOut()
    {
        if(Session::has('cart')){
            $cart=session('cart');//get the cart
            $total=0;
            for ($i=key($cart['name']); $i <= key(array_slice($cart['name'], -1, 1, true)); $i++) { 
                if(isset($cart['price'][$i])){//check if in this index there is a value
                    $total+= $cart['totalprice'][$i];
                }
            }
            $address=DB::table("users")
            ->join("address", "users.id", "address.userid")
            ->first();
            
            return view('shop.checkout',compact('cart','total','address'));
        }
    }
/***************************************************************************************/
/***************************************************************************************/

}
