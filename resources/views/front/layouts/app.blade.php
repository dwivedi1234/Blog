<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layouts.head')
</head>
<body style="background: #E9EFF2">
    @include('front.layouts.nav')

    @yield('content')

    @include('front.layouts.footer')
    @include('front.layouts.script')
</body>
</html>
