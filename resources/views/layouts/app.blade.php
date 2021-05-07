<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Favicons -->
    <link href={{ asset("img/favicon.png") }} rel="icon">
    <link href={{ asset("img/apple-touch-icon.png") }} rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href={{ asset("css/app.css") }} rel="stylesheet">
    <link rel="stylesheet" href={{ asset('css/icofont/icofont.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/boxicons/css/boxicons.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/venobox.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
    {{-- <link rel="stylesheet" href={{ asset('css/aos.css') }}> --}}
    <link rel="stylesheet" href={{ asset('css/style.css') }}>

</head>
<body>


    @yield('content')


    <script src={{ asset('js/app.js') }}></script>
    <script src={{ asset('js/aos.js') }}></script>
    <script src={{ asset('js/counterup.min.js') }}></script>
    <script src={{ asset('js/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('js/jquery.easing.min.js') }}></script>
    <script src={{ asset('js/jquery.waypoints.min.js') }}></script>
    <script src={{ asset('js/owl.carousel.min.js') }}></script>
    <script src={{ asset('js/typed.min.js') }}></script>
    <script src={{ asset('js/venobox.min.js') }}></script>
    <script src={{ asset('js/main.js') }}></script>
</body>
</html>