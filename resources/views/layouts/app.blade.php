<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <!-- Set csrf token -->
        <script> 
            window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!}
        </script>
        
        <link rel="stylesheet" type="text/css" href="css/app.css">

        @yield('header')
    </head>

    <body>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <h1>Vincent Pillinger</h1>
                </nav>
            </div>
        </div>
        
        @yield('content')

        <script src="js/app.js"></script>

        @yield('scripts')
    </body>
</html>