
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- JavaScript Bundle with Popper -->
    

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    
    <script src="js/custom_scripts.js"></script>
    <script src="js/reloj.js"></script>
    <script type="text/javascript" src="js/evento.js"></script>
<script type="text/javascript" src="js/ocultar_envio.js"></script>

    {{-- datepiker  --}}

    <script src="js/datepicker/bootstrap-datepicker.min.js" defer></script>
    <link rel="stylesheet" href="css/datetime/bootstrap-datepicker3.standalone.min.css">


    {{-- css page --}}
    <link rel="stylesheet" href="css/styles-main.css">
    <link rel="stylesheet" href="css/style-crearcuenta.css">
    <link rel="stylesheet" href="css/style-Login.css">
    <link rel="stylesheet" href="css/style-partida.css">
    <link rel="stylesheet" href="css/style-monedero.css">
    {{-- <link rel="stylesheet" href="css/style-reclamaciones.css"> --}}
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
   
  

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
    integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>




    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div  >
        @include('layouts.navbar')
        @yield('content') 

    </div>

</body>

</html>