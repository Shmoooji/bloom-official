<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contact Form</title>
</head>
<body>
    <div class="container mt-4">
    <h2>Contact Us</h2>
    <form action="{{route('send.email')}}" method="POST">
    @csrf
    <div class="row"></div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Your name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name">
            </div>
        </div>
        <div class="col-md-6">
            <label for="email">Email Address: </label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email address">
        </div>
        <div class=""form-group my-2>
            <label for="message">Your Message</label>
            <textarea name="message" cols="10" rows="5" class="form-control" placeholder="Enter your message"></textarea>
        </div>
        <br>
        <input type="submit" value="Send Message" class="btn btn-primary">
    </div>
    </form>
    </div>
</body>
</html>