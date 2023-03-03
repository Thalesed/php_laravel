<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

        <title>@yield('title')</title>

    </head>
    <body class="jumbotron text-center" data-bs-theme="dark">
        <header>
            <h1> Cargo Sapiens </h1>
        </header>
        @yield('content') 
        <footer>
            <p> Cargo Sapiens &copy; 2023</p>
        </footer>        
    </body>
</html>