<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Scripts -->
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
        <!-- Styles -->
        <style>
            body {
                height: 100vh;
                display: flex;
                align-items: center;
                background: linear-gradient(to top left, #28b487, #7dd56f);
            }
            h1 {
                font-family: sans-serif;
                font-size: 50px;
                line-height: 1.3;
                width: 100%;
                padding: 30px;
                text-align: center;
                color: white;
            }
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            #app{
                margin-top: -3vh;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="app">
        </div>
            <analytics-navbar></analytics-navbar>
            <analytics-sidebar></analytics-sidebar>
            <analytics-contentreports></analytics-contentreports>
            </div>
    </body>
</html>