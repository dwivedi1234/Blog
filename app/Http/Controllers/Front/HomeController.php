<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
class HomeController extends Controller
{
    
    public function index()
    {
        # code...
         $blog = Blog::where('status',0)->latest()->paginate(10);
         $category = Category::latest()->get();
       
        // $blog = Blog::where('id','desc')->get();
        return view('front.index',compact('blog','category'));
    }
    public function blogDetails($slug)
    {
        # code...
        $blog = Blog::where('slug',$slug)->first();
        $category = Category::latest()->get();

        $related_blog = Blog::select('title','slug')->where('id','!=',$blog->id)->where('category_id',$blog->category_id)->latest()->get();


        return view('front.blog.details',compact('blog','category','related_blog'));
    }

    public function categoryBlog($slug)
    {
        # code...
        $category_list = Category::get();
        $category = Category::select('id','name')->where('slug',$slug)->first();
        $blog  = Blog::where('category_id',$category->id)->paginate(10);

        return view('front.blog.category_blog',compact('category','blog','category_list'));
    }
}
