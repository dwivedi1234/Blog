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
        return view('front.blog.details',compact('blog','category'));
    }
}
