@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Add Category</h3>
                <form action="" method="post">
                    {{ csrf_field() }}



                </form>
        </div>
    </div>
</div>
@endsection
