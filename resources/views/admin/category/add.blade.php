@extends('admin.layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Category</h1>
     
    </div>

    <form action="{{route('category.store')}}" method="post">
    {{ csrf_field() }}
    <div class="row">
       
            <div class="col-md-3">
                <input type="text" name="name" class="form-control" placeholder="Enter Category Name" value="{{old('name')}}">
            </div>
           


            <div class="col-md-2"> 
                <button type="submit" class="form-control btn btn-primary">Store Category</button>
            </div>
            <div class="col-md-4">

              @foreach (['danger', 'warning', 'success', 'info'] as $key)
                  @if(Session::has($key))
                      <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                  @endif
              @endforeach
              
              
            </div>
        </div>
    </form>
    <hr>

    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Created At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

             @foreach ($data as $i => $item)
             <tr>
              <td>{{$i+1}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->slug}}</td>
              <td>{{$item->created_at->diffForHumans()}}</td>
              <td>
                <a  class="btn btn-sm btn-info setData" 
                    data-id = "{{$item->id}}"
                    data-name = "{{$item->name}}"
                    data-slug = "{{$item->slug}}"
                    data-bs-toggle="modal" 
                    data-bs-target="#exampleModal">Edit</a>
               
                <a href="" class="btn btn-sm btn-warning" >Delete</a>
              </td>
            </tr>
             @endforeach
           
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



