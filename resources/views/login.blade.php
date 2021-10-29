<form action="{{route('testlogin')}}" method="post">
{{ csrf_field() }}



<input type="text" name="email" id="">
<input type="password" name="password" id="">



<button type="submit">Login</button>
</form>