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

            body {
                font-family: 'Nunito', sans-serif;
            }

            .row {
                width: 98%;
            }

            .col{
                height: 5%;
                float:left;
            }

            div{
                /*padding: 1px;*/
                border: 1px hidden black;
            }

            .navbar li{
            float: left;
            }
            ul{
                list-style-type: none;
            }


            .navbar a {
                display: block;
                padding-left: 1vw;
                padding-right: 1vw;
                text-decoration: none;
                color: black;
                transition: 0.3s;
                margin-top: 3.5vh;
            }

            .border-left:hover{
                background-color: #b3b3b3;
            }
            .border-left{
                border-left: 1px solid black;
            }


            .navbar{
                background-color: rgb(255,255,255);
                width: 100%;
                height:100%;
                text-align:center;
                vertical-align:center;
                border-bottom: 1px solid black;
            }

            .active {
                background-color: #b3b3b3;
            }

            .logo{
                margin-right: 2.5vw;
            }

            .side-nav{
                background-color: #b3b3b3;
                border-top: 1px solid black;
                border-right: 1px solid black;
                width: 10vw;
                height: 88vh;
                float:left;
            }
            .flex-container {
                display: flex;
                flex-direction: column;
                flex-wrap: nowrap;
                justify-content: normal;
                align-items: stretch;
                align-content: stretch;
                margin-top: -2vh;
                }

                .flex-items:nth-child(1) {
                display: block;
                flex-grow: 0;
                flex-shrink: 1;
                flex-basis: auto;
                align-self: auto;
                order: 0;
                }

                .flex-items:nth-child(2) {
                display: block;
                flex-grow: 1;
                flex-shrink: 1;
                flex-basis: auto;
                align-self: auto;
                order: 0;

                }
            .container{
                width: 100%;
            }
            .flex-items{
                /*border: 1px solid red;*/
                height: 90vh;
            }

            .side-nav ul{
                list-style-type: none;
            }

            .side-nav a{
                text-decoration: none;
                color: black;
                transition: 0.4s;
            }
            .side-nav a:hover{
                text-decoration: none;
                color: black;
                background-color: white;
            }
            .content{
                width:100%;
                height: 100%;
                justify-content: center;
            }

        </style>
    </head>
    <body class="antialiased">
        <div id="app">
            </div>
        <div class="container flex-container">
            <div class="flex-items">
                <div class="navbar">
                <ul>
                    <li><a class="logo"><b>BLOOM</a></p></li>
                    <li><a href="#home" class="border-left">Home</a></li>
                    <li><a href="#customer" class="border-left">Customer</a></li>
                    <li><a href="#product" class="border-left">Product</a></li>
                    <li><a href="#marketingautomation" class="border-left">Marketing Automation</a></li>
                    <li><a href="#analytics" class="active border-left">Analytics</a></li>
                </ul>
                </div>
            </div>
            <div class="flex-items">
                <div class="side-nav">
                    <ul>
                        <li><a href="#report" class=""><span style="font-size: 3vh;">&larrb;</span> Report</a></li>
                        <br><br>
                        <li><a href="#graphs" class="">Graphs</a></li>
                        <li><a href="#summary" class="">Summary</a></li>

                    </ul>
                </div>
                <div class="content">
                    <p>Nothing to show for now.</p>
                </div>
            </div>
        </div>
    </body>
</html>
