@extends('front.layouts.app')

@section('head',$blog->title)
@section('description',$blog->description)

@section('content')
<div class="container">
   <div class="row">
       <!-- about section start --> 
      <div class="about_section layout_padding">
        <div class="container">
           <div class="row">


            <div class="col-lg-8 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="about_img"><img src="{{asset('uploads/blog/'.$blog->thumbnail)}}"></div>
                        <div class="like_icon"><img src="{{asset('assets/images/like-icon.png')}}"></div>
                        <p class="post_text">Post By : {{$blog->created_at->diffForHumans()}} / {{$blog->category->name}} </p>
                        <h2 class="most_text">{{$blog->title}}</h2>
                        <p class="lorem_text mt-2 mb-4"> <strong>{{$blog->description}}</strong> </p>
                        <hr>
                        {!!$blog->body!!}
    
                        <div class="social_icon_main">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"><img src="{{asset('assets/images/fb-icon.png')}}"></a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/twitter-icon.png')}}"></a></li>
                                    <li><a href="#"><img src="{{asset('assets/images/instagram-icon.png')}}"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- start comment  --}}
                <div class="card mt-3">
                    <div class="card-body">
                        <h4>Comment</h4>
                        <form action="" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="email_text" placeholder="Enter Name" name="Name">
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="email_text" placeholder="Enter Phone" name="phone">
                                      </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="massage_text" placeholder="Comment" rows="5" id="comment" name="comment"></textarea>
                              </div>
                              <hr>
                              <button type="submit" class="btn btn-lg btn-success mt-3">Comment</button>
                            
                        </form>
                    </div>
                </div>

                {{-- ent comment  --}}
                  
            </div>


              <div class="col-lg-4 col-sm-12">

                 <div class="row">
                     <div class="col-md-12">
                        <h1 class="about_taital">Category</h1>
                        <div class="tag_bt">
                            <ul>
                              @forelse ($category as $item)
                                  <li class="active mt-4"><a href="#">{{$item->name}}</a></li>
                              @empty
                                  <p>No Category</p>
                              @endforelse
                            </ul>
                          </div>
                        <h1 class="about_taital">Related Blogs</h1>
                     </div>
                 </div>

                 <div class="row">
                     <div class="col-md-12">
                         
                  <div class="list-group">
                    @forelse ($related_blog as $item)
                    <a href="{{route('blogDetails',$item->slug)}}" class="list-group-item mt-1">
                        {{$item->title}}
                      </a>
                        @empty
                            <p>No Blog</p>
                        @endforelse
                        
                  </div>
                     </div>
                 </div>
              </div>


           </div>
        </div>
     </div>
   </div>
</div>
@endsection
