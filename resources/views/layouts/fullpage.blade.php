
<!doctype html>
<html lang="en">
    <head>
        <base href="http://dylansquared.com/">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>The Dylans' Wedding</title>
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Roboto+Condensed|Roboto:400,400i,700&display=swap&Material+Icons" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/fullpage.min.css" rel="stylesheet">
    </head>

    <body class="text-center">

        @include('partials.header')

        <div class="container-fluid px-0" id="fullpage">
            @yield('content')
        </div>

        @include('partials.footer')

        @include('partials.map-script')

        @include('partials.footer-links')

    </body>
</html>
