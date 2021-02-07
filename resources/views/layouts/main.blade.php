<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTP-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    </head>
    <body>
        <header>
            <h1>@yield('title')</h1>
            <a href="/product">Product</a>
            <a href="/shop">Shop</a>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            &#xA9; Copyright Lab-07, 2020 Tanut Jaidee.
        </footer>
    </body>
</html>