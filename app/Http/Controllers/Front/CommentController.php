<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
class CommentController extends Controller
{
    public function store(Request $request,$blog_id)
    {
        $blog = new Comment();
        $blog->name=$request->name;
        $blog->blog_id= $blog_id;
        $blog->phone=$request->phone;
        $blog->comment=$request->comment;
        $blog->save();
        return redirect()->back()->with('success','Comment post successfully') ;
    }
public function index()
{
    
    $shubham = Comment::get();
    return  view('front/blog/allcomment',compact('shubham'));
   
}

}
