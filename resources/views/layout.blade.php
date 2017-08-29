<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">
        <a class="navbar-brand navbar-header" href="{{ url('admin_home') }}">Administrator</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="/js/custom.js"></script>
</body>
</html>
