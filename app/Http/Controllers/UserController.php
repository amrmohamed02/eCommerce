<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request,$language)
    {
        App::setLocale($language);
        $this->validate($request,[
            'name'=>'required|max:60',
            'email'=>'required|unique:users',
            'password'=>'required|max:30|min:4|confirmed',
            'terms'=>'required',
        ]);
        $user = new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=Hash::make($request->input('password'));
        $user->terms=$request->input('terms');
        $user->save();
        session(['userid' => $user->id]);
        session(['username' => $user->name]);
       return view('admin.dashboard');
    }
    public function login(Request $request,$language)
    {
        App::setLocale($language);
        if($request->isMethod('get')){
            if(!session('userid')){
                return view('admin.index');
            }
            else{
                return view('admin.dashboard');
            }
        }
        if($request->isMethod('post')){
            $email = $request->input('email');
                $user=DB::table("user")->where('email',$email)->first();
                if($user){  
                    // $password=Hash::check($request->input('password'), $user->password);
                    $password=DB::table("user")->where($request->input('password'), $user->password);
                    if($password){
                        session(['userid' => $user->id]);  
                        session(['username' => $user->name]);  
                        return view('admin.dashboard');
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

    public function logout($language)
    {
        App::setLocale($language);
        session()->forget('userid');
        return view('admin/index');
    }
}
