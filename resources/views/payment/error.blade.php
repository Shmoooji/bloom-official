<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - Payment Processing</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .button {
            display: inline-block;
            padding: 1rem 2rem;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
    
</head>

<body>
    <div class="container">
        <h1>Unable to process transaction, please try again.</h1>
        <p>There was an error processing your payment. Please try again.</p>
        <a href="{{ route('payment.option') }}" class="button">Return to payment options</a>
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
