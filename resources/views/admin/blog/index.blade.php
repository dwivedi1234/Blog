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
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

             

             @forelse ($blog as $i => $item)
                 {{-- if data  --}}
                 <tr>
                    <td>{{$i+1}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->category_id}}</td>
                    <td>{{$item->created_at->diffForHumans()}}</td>
                    <td>
                      <a  class="btn btn-sm btn-info setData" 
                          data-id = {{$item->id}}
                          data-name = {{$item->name}}
                          data-slug = {{$item->slug}}
                          data-bs-toggle="modal" 
                          data-bs-target="#exampleModal">Edit</a>
                     
                      <a href="" class="btn btn-sm btn-warning" >Remove</a>
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

<script>
  $('.setData').click(function() {
    var id = $(this).data('id');      
    var name = $(this).data('name'); 
    var slug = $(this).data('slug'); 
    
    $('#category_id').val(id);  
    $('#name').val(name);  
    $('#slug').val(slug);  
    
  } );
</script>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

        <form action="{{route('categoryUpdate')}}" method="post">
          {{ csrf_field() }}

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <input type="hidden" name="category_id" id="category_id">

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>

      </form>
      </div>
    </div>
  </div>
@endsection



