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
            .landing-page-content {
                margin: auto;
                text-align: center;
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
                width: 584px;
            }

            .landing-page-content h1 {
                font-size: 40px;
                margin-top:130px
            }

            .landing-page-content p {
                font-size: 15px;
            }

            .landing-page-btn {
                width: 173px;
                height: 30px;
                border-radius: 11px !important;
                background-color: #9F9F9F !important;
                border: none !important;
                color: black !important;
                padding: 8px;
                cursor: pointer;
            }

            body {
                min-height: 100vh;
                position: relative;
                margin: 0;
                padding-bottom: 100px;
                box-sizing: border-box;
            }
            
            footer {
                width: 100%;
                position: absolute;
                bottom: 0;
                height: auto;
                background-color: #D9D9D9;
                padding: 15px 0px 15px 0px;
                font-size: 15px;
                text-align: center;
            }

            footer a, footer a:hover, footer span {
                color: #7B7777;
                text-decoration: none;
                font-weight: bold;
            }

            #text {
                margin: auto;
                width: 75%;
            }

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased" style="background-image: url('{{ asset('img/landing-page-bg.jpg')}}');">
        <div id="app">
            <div>
                <div class="landing-page-content">
                    <h1>Welcome to Bloom</h1>
                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Proin sollicitudin, est quis porta consequat, sem nisi 
                        pulvinar lorem, at ornare lorem eros id sapien. Ut enim lacus, egestas eu egest as et, auctor eget libero. Aenean 
                        elementum massa vitae risus c onvallis, ac posuere libero pharetra. Sed et augue nec ex imperdiet sodales. Aenean 
                        euismod, odio eget aliquam pretium, nisl lectus posuere metus, et condimentum qu am nibh nec leo. Quisque et urna 
                        velit. Maecenas est arcu dapibus ut risus in, posuere tempus arcu</p>
                    <br>
                    <b-button class="landing-page-btn">GET STARTED</b-button>
                </div>
                <footer>
                    <div class="links">
                        <a href="#">Privacy Policy</a> 
                        <span> | </span>
                        <a href="#">Safe Guarding Statement</a> 
                        <span> | </span>
                        <a href="/about">About</a>
                        <span> | </span>
                        <a href="/contactUs">Contact Us</a>
                    </div>
 
                    <p id="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sollicitudin, est quis porta consequat, sem nisi 
                        pulvinar lorem, at ornare lorem eros id sapien. Ut enim lacus, egestas eu egestas et, auctor eget libero. 
                        Quisque et urna velit. Maecenas est arcu, dapibus ut risus in, posuere tempus arcu.</p>
                </footer>  
            </div>
        </div>
    </body>
</html>
