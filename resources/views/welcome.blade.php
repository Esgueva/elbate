<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">

        <title>Cañas de Dulzaina - El Bate</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Boostrap Core -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- Custom  -->
        <link href="css/custom.css" rel="stylesheet">
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                
                <div class="title m-b-md">
                    Cañas de Dulzaina
                </div>

                <div class="links">
                    <a href="/tipos">Tipos</a>
                    <a href="/ofertas">Ofertas</a>
                    <a href="/acerca">Acerca</a>
                    <a href="/contacto">Contacto</a>
                </div>

            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first + Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
