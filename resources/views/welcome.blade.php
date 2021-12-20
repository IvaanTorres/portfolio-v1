<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Portfolio</title>

        <!-- META TAGS -->
        <meta name="author" content="IvaanTorres">
        <meta name="description" content="The MDN Web Docs Learning Area aims to provide
        complete beginners to the Web with all they need to know to get
        started with developing web sites and applications.">

        <!-- CSS -->
        <link rel="icon" href="{{ mix('favicon.ico') }}" type="image/x-icon">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div id="app"></div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
