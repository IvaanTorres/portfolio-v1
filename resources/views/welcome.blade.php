<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" translate="no">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iván Torres García - Portfolio</title>

        <!-- META TAGS -->
        <meta name="author" content="IvaanTorres">
        <meta name="description" content="This portfolio is where I show my main web projects to everyone.">
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="https://ivantorresweb.com">
        <meta property="og:title" content="Iván Torres García - Full-Stack Developer - Portfolio">
        <meta property="og:site_name" content="Iván Torres García">
        <meta property="og:url" content="https://ivantorresweb.com">
        <meta property="og:description" content="This portfolio is where I show my main web projects to everyone.">
        <meta property="og:type" content="website">

        <!-- CSS -->
        <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
        <link rel="preload" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.14.0/devicon.min.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" media="all">

    </head>
    <body>
        <div id="app"></div>
    </body>
    <script src="{{ asset(mix('js/app.js')) }}"></script>
</html>
