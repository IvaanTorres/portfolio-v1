<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iván Torres García - Portfolio</title>

        <!-- META TAGS -->
        <meta name="author" content="IvaanTorres">
        <meta name="description" content="The MDN Web Docs Learning Area aims to provide
        complete beginners to the Web with all they need to know to get
        started with developing web sites and applications.">
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="http://localhost:8000">
        <meta property="og:title" content="Iván Torres García - Full-Stack Developer - Portfolio">
        <meta property="og:site_name" content="Iván Torres García">
        <meta property="og:url" content="http://localhost:8000">
        <meta property="og:description" content="Te ofrecemos un servicio ético y sencillo, un producto fiable y razonable, un precio justo, y la mayor red de fibra y mejor cobertura móvil de España.">
        <meta property="og:type" content="website">

        <!-- CSS -->
        <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <link rel="preload" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="all">

    </head>
    <body>
        <div id="app"></div>
    </body>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</html>
