@extends('admin.layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">All Blog Post</h1>
      <a href="{{route('blog.create')}}" class="btn btn-sm btn-primary float-right"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> Add Blog Post</a>
    </div>


    <div class="row">
      <div class="col-md-12">
        @include('admin.layouts.msg')
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              
              
              @forelse ($blog as $i => $item)
              {{-- if data  --}}
              <tr>
                <td>{{$i+1}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->created_at->diffForHumans()}}</td>
                <td>{{$item->user->name}}</td>
                    
                    <td>
                      <a  class="btn btn-sm btn-info setData">Edit</a>
                     
                      
                      <form action="{{route('blog.destroy',$item->id)}}" method="post">
                        {{ csrf_field() }}
                         @method('Delete')
                    
                        <button type="submit" class="btn btn-sm btn-warning">Remove</button>

                       

                      </form>
                    </td>
                  </tr>
             @empty
                 {{-- if not --}}   
                 <tr class="text-center">
                     <th colspan="5">
                         <h3>No Data Found!</h3>
                         <img src="{{asset('admin_assets/svg/Empty-bro.png')}}" style="width: 40%" alt="">                        
                    </th>
                 </tr>
             @endforelse
           
            </tbody>
          </table>
        </div>
      </div>
    </div>
   
  </main> 




@endsection



