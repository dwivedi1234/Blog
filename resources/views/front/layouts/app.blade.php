<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layouts.head')
</head>
<body>
    @include('front.layouts.nav')

    @yield('content')

    @include('front.layouts.footer')
    @include('front.layouts.script')
</body>
</html>
