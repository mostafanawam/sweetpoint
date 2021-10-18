<?php

namespace App\Http\Controllers;

use App\Mail\Mail;
use App\Mail\MailAuth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Email;

class AdminController extends Controller
{
    public function Auth(Request $request)
    {
        //authenticate user
        //Validate requests
        $request->validate([
            "email" => "required|email",
            "password" => "required|min:5|max:12",
        ]);
        $userInfo = User::where("email", "=", $request->email)
        ->where('type',"Admin")
        ->first();
        if (!$userInfo) {
            return back()->with(
                "fail",
                "We do not recognize your email address"
            );
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                session()->put("admin", $userInfo->id);
                return redirect("admin/dashboard");
            } else {
                return back()->with("fail", "Incorrect password");
            }
        }
    }
    /***************************************************************************************/
    /***************************************************************************************/
    public function GetDashboard()
    {
        $products=Product::all()->count();
        $stock=Stock::sum('quantity');
        $cat=Category::all()->count();
        $orders=DB::table('orders')->count();
        return view("admin.dashboard",compact('products','stock','orders','cat'));
    }
    /***************************************************************************************/
    /***************************************************************************************/
    function Logout()
    {
        //logout admin
        if (session()->has("admin")) {
            session()->pull("admin");
            return redirect("admin/login");
        }
    }
    /***************************************************************************************/
    /***************************************************************************************/
    function NewAdmin(Request $request)
    {
        //register new admin

        //Validate requests
        $request->validate([
            "firstname" => "required",
            "lastname" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:6|max:12",
        ]);
        //Insert data into database
        $admin = new User();
        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->email = $request->email;
        $admin->type = 'Admin';
        $admin->password = Hash::make($request->password);
        $save = $admin->save();

        if ($save) {
            return back()->with(
                "success",
                "New User has been successfuly added"
            );
        } else {
            return back()->with(
                "fail",
                "Something went wrong, try again later"
            );
        }
    }
    /***************************************************************************************/
    /***************************************************************************************/

    public function ChangePassword(Request $request)
    {
        $request->validate([
            "CurrentPassword" => "required|min:6|max:12",
            "NewPassword" => "required|min:6|max:12",
            "confirm_password" => "required|same:NewPassword",
        ]);
        $userid = session("admin"); //take the id of the admin
        $user = User::find($userid); //get user info
        if (Hash::check($request->CurrentPassword, $user->password)) {
            $affected = DB::table("users")
                ->where("id", $userid)
                ->update([
                    "password" => Hash::make($request->NewPassword), //update password
                ]);
            if ($affected !== null) {
                //if updated
                return back()->with("success", "Password updated successfully");
            } else {
                return back()->with(
                    "fail",
                    "Something went wrong,try again later!!"
                ); //error
            }
        } else {
            return back()->with("fail", 'Old password doesn\'t matched'); //password didnt matched
        }
        return back()->with("fail", "Something went wrong,try again later!!"); //error
    }

    /***************************************************************************************/
    /***************************************************************************************/

    public function SendEmail(Request $request)
    {
        $request->validate([
            "email" => "required|email"
        ]);
        $details=[
            'title'=>"Mail from mostafa",
            'body'=>'test email'
        ];
      
        $mail=Mail::to('mostafanawam44@gmail.com')->send(new MailAuth($details));
        if($mail){
            return "Email sent";
        }
        else{
            return 'error';
        }

        
    }
}
