<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
    
    <div class="container-fluid w-100">
    @include('navbar')
    @yield('content')
    </div>
    @include('script')
</body>
</html>