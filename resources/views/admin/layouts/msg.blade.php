@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session::get('success') }}
  </div>
@endif


@if(Session::has('fail'))
<div class="alert alert-success" role="alert">
    {{ Session::get('fail') }}
  </div>
@endif