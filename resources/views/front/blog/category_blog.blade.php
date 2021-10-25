@extends('front.layouts.app')

@section('head',$category->name)
@section('description','this is my short description')

@section('content')
<div class="container">
   <div class="row">
       <!-- about section start --> 
      <div class="about_section layout_padding">
        <div class="container">
           <div class="row">


              <div class="col-lg-8 col-sm-12">

                    @forelse ($blog as $item)
                           <div class="mb-3">
                            <a href="{{route('blogDetails',$item->slug)}}">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="about_img"><img src="{{asset('uploads/blog/'.$item->thumbnail)}}"></div>
                                            <div class="like_icon"><img src="{{asset('assets/images/like-icon.png')}}"></div>
                                            <p class="post_text">Post By : {{$item->created_at->diffForHumans()}} / {{$item->category->name}} </p>
                                            <h2 class="most_text">{{$item->title}} </h2>
                                            <p class="lorem_text">{{$item->description}} </p>
                                            <div class="social_icon_main">
                                                <div class="social_icon">
                                                <ul>
                                                    <li><a href="#"><img src="{{asset('assets/images/fb-icon.png')}}"></a></li>
                                                    <li><a href="#"><img src="{{asset('assets/images/twitter-icon.png')}}"></a></li>
                                                    <li><a href="#"><img src="{{asset('assets/images/instagram-icon.png')}}"></a></li>
                                                </ul>
                                                </div>
                                                <div class="read_bt"><a href="{{route('blogDetails',$item->slug)}}">Read More</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                </a>
                           <hr>
                    @empty
                            <center>
                                <h3>No Data Found!</h3>
                            <img src="{{asset('admin_assets/svg/Empty-bro.png')}}" style="width: 40%" alt="">
                            </center>
                    @endforelse
                    {{ $blog->links( "pagination::bootstrap-4") }}
              </div>


              <div class="col-lg-4 col-sm-12">
                  <h1 class="about_taital">Category</h1>
                  <div class="tag_bt">
                      <ul>
                        @forelse ($category_list as $item)
                            <li class="active mt-4"><a href="{{route('categoryBlog',$item->slug)}}">{{$item->name}}</a></li>
                        @empty
                            <p>No Category</p>
                        @endforelse
                      </ul>
                    </div>
                  
                 
              </div>


           </div>
        </div>
     </div>
   </div>
</div>
@endsection
