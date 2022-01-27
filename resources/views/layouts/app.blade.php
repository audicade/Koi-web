<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo-icon.png') }}">
        <link href="{{ asset('dashboard') }}/css/style.min.css" rel="stylesheet">
        <link href="{{ asset('dashboard') }}/css/datatable.css" rel="stylesheet">
        <title>Login Page</title>
    </head>
    <body style="background-color: #dfebfd">

        @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard') }}/js/jquery.min.js"></script>
    <script src="{{ asset('dashboard') }}/js/datatable.js"></script>
    <script>
        $(function(){
            $('.data-table').DataTable();
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
    @yield('script')
    </body>
</html>
