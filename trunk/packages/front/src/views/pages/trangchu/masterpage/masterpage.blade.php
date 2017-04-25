<html>
    <head>
        <title>@yield('title')</title>
        @yield('head')
    </head>
    <body>
        @yield('header-top')
        @yield('menu')
        @yield('302')

        <div class="type-307">
            <div class="container sidebar">
                <div class="row">
                    @yield('304')
                    @yield('307')
                </div>
            </div>
        </div>
        @yield('footer')

    </body>
</html> 