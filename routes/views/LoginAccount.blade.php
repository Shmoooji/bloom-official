<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" value="{{ csrf_token() }}"/>
        <meta name="google-signin-client_id" content="208330682621-554aj7nfir6jns78avmruvqjp59mokdi.apps.googleusercontent.com">
        <title>ZODIAC</title>
        <link rel="icon" type="image/x-icon" href="img/web_elements/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            input[type=text], input[type=password], input[type=email] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
            }

            input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
            }

            .container {
            padding: 16px;
            }

            button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            }

            button:hover {
            opacity:1;
            }
        </style>
    </head>
    <body>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <script src="{{ mix('js/login.js') }}" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <div class = "container">
        <form action="/login/authentication" method="post" style="border:1px solid #ccc">
        @csrf
            <label for="email"><b>Email Address</b></label>
            <input type="email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" required>

           
            <button type="submit" class="loginbtn">Login</button>
        </form>
        </div>
    </body>
</html> 