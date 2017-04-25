<html>
    <head>
        <title>App Name - @yield('title')</title>
        @yield('css')
        @yield('scripts')
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>