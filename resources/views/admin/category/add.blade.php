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
 <div class="col-md-4"></div>
        </div>
    </form>

   
  </main> 
@endsection
