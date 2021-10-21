<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
{
    public function ChangeLang($lang)
    {
        App::setLocale($lang);
        session()->put('locale', $lang);
        return redirect()->back();
    }
    
/*************************************************************************************** */
/*************************************************************************************** */
    public function GetShop()//return the home page with category list,best sellers products and gallery images
    {
        
        $files = Storage::disk("local")->allFiles("public");
        $best_sellers=Product::where('rank','=',0)->get();
        //return config('yourconfig.total');
        return view('shop.home',compact('best_sellers','files'));
    }
/*************************************************************************************** */

    public function GetProducts()//return the product page with all products and categories
    {  
        $category=Category::all();
        $products=DB::table("products")
        ->join("categories", "products.cat_id", "categories.cat_id")
        ->get();
        return view('shop.products',compact('products','category'));
    }
/*************************************************************************************** */
/*************************************************************************************** */
    public function GetCustomize()//get the customize page
    {
        
        return view('shop.customize');
    }
/*************************************************************************************** */
/*************************************************************************************** */
    public function Getcontact()//get the contact page
    {
        return view('shop.contact');
    }
/*************************************************************************************** */
/*************************************************************************************** */
    public function GetLogin()
    {
        return view('shop.login');
    }
/*************************************************************************************** */
/*************************************************************************************** */
    public function GetRegister()
    {
        return view('shop.register');
    }
    public function SearchProduct(Request $request)
    {
        $request->validate([
            "search" => "required",
        ]);
        $search=Product::where('name', 'LIKE', "%$request->search%")
        ->orWhere('description', 'LIKE', "%$request->search%")
        ->get();
        $count=count($search);
        if($count==0){
            return view('shop.search');
        }else{
            return view('shop.search',compact('search')); 
        }  
    }
}