
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>The Dylans' Wedding</title>

        <link href="https://fonts.googleapis.com/css?family=Fira+Mono:400,700&Material+Icons" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
    </head>

    <body class="text-center">

        @include('partials.header')

        <div class="container-fluid px-0">
            @yield('content')
        </div>

        @include('partials.footer')

        @include('partials.map-script')

        @include('partials.footer-links')

    </body>
</html>
