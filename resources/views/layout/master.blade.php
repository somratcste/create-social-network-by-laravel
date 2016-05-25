<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">\
        <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/main.css')}}">

    </head>
    <body>
        @include('includes.header')
        <div class="container">     
            @yield('content')
        </div>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        
    </body>

</html>
