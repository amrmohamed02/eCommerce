<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;
use PhpOption\Option;

class UserController extends Controller
{
    public function register(Request $request,$language)
    {

        App::setLocale($language);
        //register as admin   COMMENTED FOR TESTING
        // if($request->isMethod('post')){
        //     $this->validate($request,[
        //         'name'=>'required|max:60',
        //         'email'=>'required|unique:user',
        //         'password'=>'required|max:30|min:4|confirmed',
        //         'terms'=>'required',
        //     ]);
        //     $user = new User();
        //     $user->name=$request->input('name');
        //     $user->email=$request->input('email');
        //     $user->password=Hash::make($request->input('password'));
        //     $user->terms=$request->input('terms');
        //     $user->save();
        //     session(['userid' => $user->id]);
        //     session(['username' => $user->name]);
        //     return redirect("$language/admin/dashboard");
        // }

        //registering a member
        if(URL::current()==="http://localhost:8000/$language/admin/addmember"){
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
                return view('admin.AddMembers',["language"=>$language]);
            }
            else{
                return view('admin.AddMembers',["language"=>$language]);
            }
        }
        

    }
    public function login(Request $request,$language)
    {
        App::setLocale($language);
        if($request->isMethod('get')){
            if(!session('userid')){
                return view('admin.Login');
            }
            else{
                return redirect("$language/admin/dashboard");
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
                        return redirect("$language/admin/dashboard");
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
        return redirect("$language/admin/login");
    }

    public function edit(Request $request,$language,$id)
    {
        App::setLocale($language);
        if(URL::current()==="http://localhost:8000/$language/admin/editmember/$id"){
            $user =User::find($id);
            if($request->isMethod('post')){
                $user->name=$request->input('fullname');
                $user->email=$request->input('email');
                if($request->input('password'))
                    $user->password=Hash::make($request->input('password'));
                $user->username=$request->input('username');
                $user->groupid=1;
                $user->save();
                return redirect("$language/admin/managemember");
            }
            else{
                return view('admin.EditMembers',['user'=>$user]);
            }
        }
        

        
    }

    public function manage(Request $request,$language,$id=null)
    {
        App::setLocale($language);           
            if($request->isMethod('post')){
                $user =User::find($id);
                $user->forcedelete();
                return redirect("$language/admin/managemember");
            }
            else{
                $users=User::all();
                return view('admin.ManageMembers',["language"=>$language],["users"=>$users]);
            }
        

        
    }

    public function welcome(Request $request,$language)
    {
        App::setLocale($language);
        if(URL::current()==="http://localhost:8000/$language/admin/dashboard"){
            if($request->isMethod('get')){
                if(!session('userid')){
                    return redirect("$language/admin/login");
                }
                else{
                    return view('admin.Dashboard');
                }
            }
        }
        
    }
}
