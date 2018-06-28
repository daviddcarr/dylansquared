
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Cover Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> --}}

        <!-- Custom styles for this template -->
        <link href="/css/app.css" rel="stylesheet">
    </head>

    <body class="text-center">

        @include('partials.header')

        <div class="container-fluid d-flex h-100 p-3 mx-auto flex-column">
            @yield('content')
        </div>

        @include('partials.footer')

        @include('partials.map-script')

        @include('partials.footer-links')

    </body>
</html>
