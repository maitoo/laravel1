<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="css/mystyle.css">
    </head>
    <body>
        <!-- @section('sidebar')
            This is the master sidebar.
        @show -->

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>