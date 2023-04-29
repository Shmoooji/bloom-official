<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Payment Options</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="{{ mix('/js/app.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <div class="payment-container">
                <payment-component :payment-method="'GCash'"></payment-component>
                <payment-component :payment-method="'PayMaya'"></payment-component>
                <payment-component :payment-method="'PayPal'"></payment-component>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>