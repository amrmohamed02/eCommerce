<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CommentController extends Controller
{
    public function add(Request $request,$language)
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
            $comment = new Comment();
            $comment->name=$request->input('name');
            $comment->description=$request->input('description');
            $comment->ordering=$request->input('ordering');
            $comment->visibilty=$request->input('visibilty');
            $comment->allow_comment =$request->input('commenting');
            $comment->allow_ads=$request->input('Ads');
            $comment->save();
            return redirect()>back();
         }  
    }

    public function manage(Request $request,$language,$id=null)
   {
        App::setLocale($language);         
        if($request->isMethod('post')){
            $comment =Comment::find($id);
            $comment->forcedelete();
            return redirect()->back();
         }
         else{
            $comments=Comment::all();
            return view('admin.Comments',["language"=>$language,"comments"=>$comments]);
         }
   }

   public function approve($id)
   {
        $comment =Comment::find($id);
        $comment->status=1;
        $comment->save();
        return redirect()->back();
   }

   public function edit(Request $request,$language,$id)
    {
        App::setLocale($language);
            $comment =comment::find($id);
            if($request->isMethod('post')){
                $comment->comment=$request->input('comment');
                $comment->save();
                return redirect("/$language/admin/comments");
            }
            else{
                return view('admin.EditComment',['comment'=>$comment,"language"=>$language]);
            }  
    }
}
