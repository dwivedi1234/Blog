@extends('admin.layouts.app')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
     
    </div>

    

    <h2>Latest Comments</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Comment</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Action</th>


          </tr>
        </thead>
        <tbody>
          @foreach ($blog as $i => $value)
         <tr>
          <th scope="row">{{$value->id}}</th>
          <td>{{$value->name}}</td>
          <td>{{$value->phone}}</td>
          <td>{{$value->comment}}</td>
          <td>{{$value->created_at}}</td>
          <td>{{$value->updated_at}}</td>
           <td>
             {{-- <a href="{{route('editdata',$value->id)}}" class="btn btn-sm btn-danger">Edit</a>
             <a href="{{route('deletedata',$value->id)}}" class="btn btn-sm btn-danger">Delete</a> --}}
          </td>
          </tr>   
         @endforeach
        </tbody>
      </table>
    </div>
  </main>
@endsection
