@extends('front.layouts.app')
@section('content')
    
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shubham as $item)
            <tr>
                <td scope="row">{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}} </td>
                <td>{{$item->comment}} </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection