@extends('admin.layouts.app')

@section('content')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Create New Blog Post</h1>
      <a href="{{route('blog.index')}}" class="btn btn-sm btn-primary float-right"> <i class="fa fa-plus-square-o" aria-hidden="true"></i> All Blog Post</a>
    </div>


    <div class="row">
      <div class="col-md-12">
        
        <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            
                <div class="form-group">
                  <label for="exampleInputEmail1">Enter Blog Title</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Blog Title" value="{{old('title')}}"  name="title">

                  @error('title')
                      <small  class="form-text text-danger"> {{$message}}</small>
                  @enderror
                </div>


                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1" >Category</label>
                            <select class="form-select form-control" aria-label="Default select example" name="category_id" required>
                                <option value="" >Select Category</option>
                               @foreach ($category as $item)
                                     <option value="{{$item->id}}" >{{$item->name}}</option>
                               @endforeach
                              </select>
                              @error('category_id')
                                  <small  class="form-text text-danger"> {{$message}}</small>
                              @enderror
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Upload Thambnail</label>
                            <input type="file" name="thumbnail" class="form-control" id="">
                            @error('thumbnail')
                              <small  class="form-text text-danger"> {{$message}}</small>
                          @enderror
                          </div>

                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter Short Description</label>
                        <textarea name="description" id="" class="form-control" cols="30" rows="4">{{old('description')}}</textarea>
                        @error('description')
                      <small  class="form-text text-danger"> {{$message}}</small>
                  @enderror
                      </div>
                </div>

                <div class="row mt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Blog</label>
                         <textarea id="mytextarea" name="body">Hello, World!</textarea>
                         @error('body')
                      <small  class="form-text text-danger"> {{$message}}</small>
                  @enderror
                      </div>
                </div>


                
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
             

        </form>
        
      </div>
    </div>
   
</main> 


@endsection



