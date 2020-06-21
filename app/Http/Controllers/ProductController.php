<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
   public function category(Request $request,$language)
   {
        App::setLocale($language);
        if($request->isMethod('get')){
           return view('admin.category',["language"=>$language]);
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
            return redirect("$language/admin/category");
        }  
   }
}
