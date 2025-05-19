<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RRStudio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto :100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab :300,400,700" rel="stylesheet">

    <!-- CSS Links -->
    <link rel="stylesheet" href="{{ asset('css/cssfr/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssfr/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssfr/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssfr/superfish.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssfr/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cssfr/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('js/jsfr/modernizr-2.6.2.min.js') }}"></script>

    <!-- IE9 Support -->
    <!--[if lt IE 9]>
        <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>
    @yield('content')

    <!-- jQuery -->
    <script src="{{ asset('js/jsfr/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/jsfr/bootstrap.min.js') }}"></script>
    <!-- Masonry -->
    <script src="{{ asset('js/jsfr/jquery.masonry.min.js') }}"></script>
    <!-- MAIN JS -->
    <script src="{{ asset('js/jsfr/main.js') }}"></script>
</body>
</html>