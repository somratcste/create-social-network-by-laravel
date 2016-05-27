<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{URL::to('src/css/main.css')}}">

        

    </head>
    <body>
        @include('includes.header')
        <div class="container">     
            @yield('content')
        </div>

        <script type='text/javascript' src='js/jquery-1.12.4.js'></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="{{URL::to('src/js/app.js')}}" type="text/javascript" ></script>  
    </body>

</html>
