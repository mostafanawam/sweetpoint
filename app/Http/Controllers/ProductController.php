<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Stock;
use Illuminate\Support\Facades\Storage;
class ProductController extends Controller
{
    public function GetAddForm()
    {
        $cat = Category::all();
        return view("admin.add", ["cat" => $cat]);
    }
    /***************************************************************************************/
    /***************************************************************************************/
    public function AddItem(Request $request)
    {
        // insert new item to database
        $request->validate([
            "name" => "required|",
            "qty" => "required|numeric|gt:0",
            "description" => "required",
            "image"=>"required|mimes:jpg,jpeg,png,svg,gif,JPEG|max:2048",
            "category" => "required",
            "price" => "required|numeric|gt:0",
            "rank"=>"required|numeric|"
        ]);
     
        $file=$request->image;//take the file
        $filename=$file->getClientOriginalName();//get only the file mostafa.jpg
        $tempname = pathinfo($filename, PATHINFO_FILENAME);//take the filename
        $extension = pathinfo($filename, PATHINFO_EXTENSION);//take the file extension

        $id = DB::table("products")->max("prod_id")+1; //get the id of the latest+1

        $finalname=$tempname.'('.$id.').'. $extension;// final name: name(id).extension
        $request->image->move('products',$finalname);//move file to products

        //$path = $request->file("image")->store("products", "public");
        
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $finalname;
        $product->rank = $request->rank;
        $product->cat_id = $request->category;
        $product->price = $request->price;
        $succ = $product->save();

        $id = DB::table("products") //get the id of the inserted product
            ->max("prod_id");

        if ($succ) {
            //if added to products
            $stock = new Stock;
            $stock->prod_id = $id;
            $stock->quantity = $request->qty;
            $succ1 = $stock->save();
            if ($succ1) {
                //if added to stock
                return back()->with("success", "Item Inserted successfully");
            }
            return back()->with(
                "fail",
                "Something went wrong,try again later!!"
            ); //error
        }
        return back()->with("fail", "Something went wrong,try again later!!"); //error
    }
    /***************************************************************************************/
    /***************************************************************************************/
    public function DeleteProduct($id)
    {
        $find = Product::where("prod_id", $id)->first();//check if product exists
        if($find===null){//if product doesn't exist
            return redirect("admin/list")->with(
                "fail",
                "Product with id=$id doesn't exist!!"
            );
        }else{//if product exists
            $succ = Product::where("prod_id", $id)->delete();
            if ($succ) {
                $succ = Stock::where("prod_id", $id)->delete();
                return redirect("admin/list")->with("success", "Product deleted successfully");
            } else {
                return redirect("admin/list")->with(
                    "fail",
                    "Something went wrong,try again later!!"
                ); 
            }
        }
    }
    /***************************************************************************************/
    /***************************************************************************************/
    public function ViewProduct($id)
    {
        $find = Product::where("prod_id", $id)->first();//check if product exists

        if($find===null){//if product doesn't exist
            return redirect("admin/list")->with(
                "fail",
                "Product with id=$id doesn't exist!!"
            );
        }else//if product exists
            {
                $product = DB::table("products")
                ->join("stocks", "products.prod_id", "stocks.prod_id")
                ->join("categories", "products.cat_id", "categories.cat_id")
                ->where("products.prod_id", $id)
                ->get();
                $catlist = Category::all();
                return view("admin.view", compact("product", "catlist")); 
            }
        
    }
    /***************************************************************************************/
    /***************************************************************************************/
    public function UpdateProduct(Request $request)
    {

        // insert new item to database
        $request->validate([
            "name" => "required|",
            "qty" => "required|numeric|gt:0",
            "description" => "required",
           // "image"=>"required|mimes:jpg,jpeg,png,svg,gif,JPEG|max:2048",
            "category" => "required",
            "price" => "required|numeric|gt:0",
            "rank"=>"required|numeric|"
        ]);

        $id = $request->id;
        $affected = DB::table("products")
            ->where("prod_id", $id)
            ->update([
                "name" => $request->name,
                "description" => $request->description,
                "price" => $request->price,
                "rank" => $request->rank,
                "cat_id" => $request->category,
            ]);
        $affected1 = DB::table("stocks")
            ->where("prod_id", $id)
            ->update([
                "quantity" => $request->qty,
            ]);
        if ($affected || $affected1) {
            return back()->with("success", "Product updated successfully");
        } else {
            return back()->with(
                "fail",
                "Something went wrong,try again later!!"
            ); //error
        }
    }
    /***************************************************************************************/
    /***************************************************************************************/
    public function GetProducts()
    {
        $product = DB::table("products")
            ->join("stocks", "products.prod_id", "stocks.prod_id")
            ->join("categories", "products.cat_id", "categories.cat_id")
            ->get();

        return view("admin.list", ["products" => $product]);
    }
}
