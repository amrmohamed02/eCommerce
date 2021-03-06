<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\URL;


class AdminController extends Controller
{
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
                return view('admin.AddMember',["language"=>$language]);
            }
            else{
                return view('admin.AddMember',["language"=>$language]);
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
                    $password=Hash::check($request->input('password'), $user->password);
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
        return redirect()->back();
    }

    public function edit(Request $request,$language,$id)
    {
        App::setLocale($language);
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

    public function manage(Request $request,$language,$id=null)
    {
        App::setLocale($language);         
        if($request->isMethod('post')){ 
            $user =User::find($id);
            $user->forcedelete();
            return redirect()->back();
        }
        else{
            $users=User::where("status","accepted")->get();
            return view('admin.ManageMembers',["language"=>$language],["users"=>$users]);
        } 
    }

    public function welcome(Request $request,$language)
    {
        App::setLocale($language);
        if($request->isMethod('get')){
            if(!session('userid')){
                return redirect("$language/admin/login");
            }
            else{
                $comments = Comment::all();
                $items = Item::all();
                $users = User::orderBy('id', 'DESC')->get();
                $pending = User::where("status","pending")->count();
                return view('admin.Dashboard',["language"=>$language,"users"=>$users,"pending"=>$pending,"items"=>$items,"comments"=>$comments]);
            }
        }
    }

    public function pending(Request $request,$language,$id=null)
    {
        App::setLocale($language);
        if($request->isMethod('post')){ 
            $user =User::find($id);
            $user->status = "accepted";
            $user->save();
            return redirect("$language/admin/pendingmember");
        }
        else{
            $users=User::where("status","pending")->get();
            return view('admin.PendingMembers',["language"=>$language],["users"=>$users]);
        }
    }
}
