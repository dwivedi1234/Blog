<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use Auth;
class HomeController extends Controller
{
    public function testloginform()
    {
        # code...
        return view('login');
    }
    public function testLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        // $credentials = $request->only('email', 'password');
        if (Auth::attempt(['email'=> $request->email,'password' => $request->password])) {
            return redirect()->route('home')->withSuccess('You have Successfully loggedin');
        }
  
        return redirect()->route('testlogin')->withSuccess('Oppes! You have entered invalid credentials');
    }
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
    public function search(Request $request)
    {
        # code...
        $keyword = $request->keyword;
        $blog = Blog::where('title', 'like', '%' . $keyword . '%')->get();

        $category_list = Category::get();
        return view('front.blog.search',compact('blog','category_list','keyword'));
        // return $request->all();
    }
    public function page($name)
    {
        # code...
        if($name == 'about'){
            return view('about');
        }
        if ($name == 'contact') {
            # code...
            return view('contact');
        }

        // $page = Page::where('name',$name)->first();
        // return view('page',compact('page'));
    }
}
