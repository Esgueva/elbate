<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
        
        <title> @yield('title') </title>
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-material-design.min.css" rel="stylesheet" >
        <link href="/css/custom.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap-material-design.min.js"></script> 
        <script src="/js/popper.js"></script>
    </head>

    <body>
        @include('shared.navbar')
        @yield('content')
    </body>
</html>