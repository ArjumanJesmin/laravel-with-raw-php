<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layout._header')
    </head>
    <body>
        <!-- Responsive navbar-->
        @include('layout._navber')
        <!-- Page header with logo and tagline-->
        @yield('pageHeader')
        </header>
        <!-- Page content-->
        @yield('content')
        <!-- Footer-->
        <footer class="py-5 bg-dark">
         @include('layout._footer')
        </footer>
        <!-- Bootstrap core JS-->
        @include('layout._script')
    </body>
</html>
