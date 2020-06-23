<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
   public function add(Request $request,$language)
   {
        App::setLocale($language);
        if($request->isMethod('get')){
           return view('admin.addcategory',["language"=>$language]);
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

   public function manage(Request $request,$language,$id=null)
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
}
