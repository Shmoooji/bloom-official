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
    <body style="overflow: hidden">
        <div id="app">
            <div class="payment-container">
                <form action="{{ url('/payment/gcash') }}" method="POST" style="width: calc(100%/3)">
                    @csrf
                    <input type="hidden" name="amount" value="49.99">
                    <payment-component :payment-method="'GCash'"></payment-component>
                </form>

                <form action="{{ url('/payment/paymaya') }}" method="POST" style="width: calc(100%/3)">
                    @csrf
                    <input type="hidden" name="amount" value="49.99">
                    <payment-component :payment-method="'PayMaya'"></payment-component>
                </form>

                <form action="{{ url('/payment/paypal') }}" method="POST" style="width: calc(100%/3)">
                    @csrf
                    <input type="hidden" name="amount" value="49.99">
                    <payment-component :payment-method="'PayPal'"></payment-component>
                </form>
                
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>