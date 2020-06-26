<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
   public function addcat(Request $request,$language)
   {
        App::setLocale($language);
        if($request->isMethod('get')){
           return view('admin.AddCategory',["language"=>$language]);
        }
        elseif($request->isMethod('post')){
        //     $this->validate($request,[
        //         'name'=>'required|max:60',
        //         'email'=>'required|unique:user',
        //         'password'=>'required|max:30|min:4|confirmed',
        //         'terms'=>'required',
            // ]);
            $cat = new Category();
            $cat->name=$request->input('name');
            $cat->description=$request->input('description');
            $cat->ordering=$request->input('ordering');
            $cat->visibilty=$request->input('visibilty');
            $cat->allow_comment =$request->input('commenting');
            $cat->allow_ads=$request->input('Ads');
            $cat->save();
            return redirect("$language/admin/addcategory");
        }  
   }

   public function managecat(Request $request,$language,$id=null)
   {
        App::setLocale($language);         
        if(URL::current()==="http://localhost:8000/$language/admin/managecategory/$id"){
            $user =Category::find($id);
            $user->forcedelete();
            return redirect("$language/admin/managecategory");
         }
         else{
            $category=Category::all();
            return view('admin.ManageCategory',["language"=>$language],["category"=>$category]);
         }
   }

   public function editcat(Request $request,$language,$id)
    {
        App::setLocale($language);
            $cat =Category::find($id);
            if($request->isMethod('post')){
                $cat->name=$request->input('name');
                $cat->description=$request->input('description');
                $cat->ordering=$request->input('ordering');
                $cat->visibilty=$request->input('visibilty');
                $cat->allow_comment=$request->input('commenting');
                $cat->allow_ads=$request->input('Ads');


                $cat->save();
                return redirect("$language/admin/managecategory");
            }
            else{
                return view('admin.EditCategory',['cat'=>$cat]);
            }  
    }

    public function additem(Request $request,$language)
   {
        App::setLocale($language);
        if($request->isMethod('get')){
           return view('admin.AddItem',["language"=>$language]);
        }
        elseif($request->isMethod('post')){
        //     $this->validate($request,[
        //         'name'=>'required|max:60',
        //         'email'=>'required|unique:user',
        //         'password'=>'required|max:30|min:4|confirmed',
        //         'terms'=>'required',
            // ]);
            $item = new Item();
            $item->name=$request->input('name');
            $item->description=$request->input('description');
            $item->price=$request->input('price');
            $item->country=$request->input('country');
            $item->status=$request->input('status');
            $item->save();
            return redirect("$language/admin/additem");
        }
   }
}
