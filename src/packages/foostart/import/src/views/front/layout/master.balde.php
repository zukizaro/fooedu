<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!--HEAD-->
        @section('head')
            @yield('import::front.layout.head')
        @show
        <!--END HEAD-->
    </head>

    <body>
        <!--HEADER-->
        @section('header')
            @yield('import::front.layout.header')
        @show
        <!--END HEADER-->

        <!--CONTENT-->
        <div class="container">
            @yield('content')
        </div>
        <!--END CONTENT-->

        <!--FOOTER-->
        @section('footer')
            @yield('front.layout.footer')
        @show
        <!--END FOOTER-->
    </body>
</html>
