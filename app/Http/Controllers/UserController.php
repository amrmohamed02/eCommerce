<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login(Request $request,$language)
    {
        App::setLocale($language);
        if($request->isMethod('get')){
            if(!session('userid')){
                return view('Login',["language"=>$language]);
            }
            else{
                return redirect("$language/profile");
            }
        }
        if($request->isMethod('post')){
            $email = $request->input('email');
                $user=DB::table("user")->where('email',$email)->first();
                if($user){  
                    $password=Hash::check($request->input('password'), $user->password);
                    if($password){
                        session(['userid' => $user->id]);  
                        session(['username' => $user->name]);  
                        return redirect("$language/profile");
                    }
                    else{
                        return "wrong password";
                    }       
                }
                else{
                    return "wrong email or pass";
                }
        }
    }

    public function register(Request $request,$language)
    {

        App::setLocale($language);
        //registering a member
            if($request->isMethod('post')){
                //commented for testing
                // $this->validate($request,[
                //     'fullname'=>'required|max:60',
                //     'email'=>'required|unique:user',
                //     'password'=>'required|max:30|min:4',
                //     'username'=>'required|unique:user',
                // ]);
                $user = new User();
                $user->name=$request->input('fullname');
                $user->email=$request->input('email');
                $user->password=Hash::make($request->input('password'));
                $user->username=$request->input('username');
                $user->groupid=1;//seller
                $user->save();
                session(['userid' => $user->id]);  
                session(['username' => $user->name]);
                return redirect("$language/profile");
            }
            else{
                return view('Login',["language"=>$language]);
            }
    }

    public function welcome(Request $request,$language)
    {
        App::setLocale($language);
        if($request->isMethod('get')){
            if(!session('userid')){
                return redirect("$language/login");
            }
            else{
                $user = User::where('id',session('userid'))->first();
                $items = Item::where('user_id',session('userid'))->get();
                $comments = Comment::all();// just for testing
                return view('Userprofile',['language'=>$language,'user'=>$user,'items'=>$items,'comments'=>$comments]);
            }
        }
    }

    public function showitem($language,$id)
    {
        App::setLocale($language);
        $item = Item::find($id);
        return view('ShowItem',['language'=>$language,'item'=>$item]);
    }

    public function add(Request $request,$language)
    {
        if($request->isMethod('get')){
            $cats = Category::all();
            return view('NewAd',['cats'=>$cats,'language'=>$language]);
        }
        else{
            $item = new Item();
            $item->name=$request->input('name');
            $item->description=$request->input('description');
            $item->price=$request->input('price');
            $item->country=$request->input('country');
            $item->status=$request->input('status');
            $item->user_id=session('userid');
            $item->category_id=$request->input('category_id');
            $item->save();
            return redirect()->back();
        }
    }

    public function category($language,$id)
    {
        $items = Item::where('category_id',$id)->where('approve',1)->get();
        return view('Category',['items'=>$items,'language'=>$language]);
    }
}
