<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoryController extends Controller
{
    public function ViewCategory($id)
    {
        $cat=DB::table('categories')
        ->where('cat_id',$id)
        ->first();//check if category exists
        if($cat===null){//if doesn't exist => return with error
            return redirect('admin/addcat')->with('fail','This category doesn\'t exist!!');//error
        }
        else
            return view('admin.viewcat',compact('cat'));
    }

    public function DeleteCategory($id)
    {
        $cat=DB::table('categories')
        ->where('cat_id',$id)
        ->first();//check if category exists
        if($cat===null){//if doesn't exist => return with error
            return redirect('admin/addcat')->with('fail',"Category with id=$id doesn't exist!!");//error
        }

        $count=DB::table('products')
        ->where('cat_id',$id)
        ->count();//check if there is products related to this category

        if($count>0){//if has products => cant be deleted
            return back()->with('fail','This category already have products delete them before!!');//error
        }
        else{
            $succ=Category::where('cat_id', $id)->delete();
            if($succ){
                return back()->with('success','Category deleted successfully'); 
            }else{
                return back()->with('fail','Something went wrong,try again later!!');//error
            }
        }
        
    }
    public function AddCategory(Request $request)//insert new category
    {
        $request->validate([
            'name'=>'required|'
        ]);
        $cat=new Category;
        $cat->cat_name=$request->name;
        $succ=$cat->save();

        if($succ){
            return back()->with('success','Category added successfully'); 
        }
    }

    public function GetCategories()
    {
        $cat=Category::all();
        return view('admin.categories',["category"=>$cat]);
    }
}
