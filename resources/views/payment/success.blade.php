<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment Successful</title>
        <style>
            /* Add some modern styling to the page */
            body {
                font-family: 'Helvetica Neue', sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 40px 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-size: 36px;
                margin-top: 0;
                margin-bottom: 20px;
            }

            p {
                font-size: 24px;
                margin-top: 0;
                margin-bottom: 10px;
            }

            .button {
                display: inline-block;
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
            }

            .button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>

    <body>
        <div id="app">
            <navbar></navbar>

            <div class="container">
                <h1>Payment Successful</h1> 
                <p>Thank you for subscribing!</p>
                <p>Payment ID: {{ $paymentID }}</p>
                <p>Payer ID: {{ $payerID }}</p>
                <a href="/campaigns" class="button">Return to campaigns page</a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        <script>
            import Navbar from "../components/navbar.vue"
            
            export default {
                components: {
                Navbar
                }
            }
        </script>
    </body>
</html>
