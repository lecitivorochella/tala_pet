<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>
    
    <div class="container">
    @include('navbar')
    @yield('content')
    </div>
    @include('script')
</body>
</html>