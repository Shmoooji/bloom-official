<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bloom</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Styles -->
        <style>


        </style>

        <style>
            body {
                height: 100vh;
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            <h1>About Page</h1>

            <a href="/about">About</a>
            <br>
            <a href="/works">Works</a>
            <br>
            <a href="/subscription">Subscription</a>
            <br>
            <a href="/contactUs">Contact Us</a>
        </div>
    </body>
</html>

