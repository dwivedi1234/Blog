<!DOCTYPE html>
<html lang="en">
<head>
        @include('admin.layouts.head')
</head>
<body>
    @include('admin.layouts.nav')

    <div class="container-fluid">
        <div class="row">
                @include('admin.layouts.sidebar')
                @yield('content')
        </div>
    </div>

    @include('admin.layouts.footer')
    @include('admin.layouts.script')
</body>
</html>