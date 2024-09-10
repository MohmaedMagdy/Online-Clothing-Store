<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/tank.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMA19KwBtuIXrIHjbTTD0S+VO5yYYxHlqaf9of8" crossorigin="anonymous">
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success text-center">
            <i class="fas fa-check-circle icon"></i>
            {{ session('success') }}
        </div>
    @endif

<div class="thank-you-container text-center">
    <img src="{{ asset('image/icon.png') }}" alt="Thank You">
    <h1><i class="fas fa-smile-beam icon"></i>Thank You for Your Purchase!</h1>
    <p><i class="fas fa-shopping-bag icon"></i>We truly appreciate your support and hope you enjoy your new products. Thank you for shopping at Magdy Store!</p>
    <a href="{{ url('/welcome') }}" class="btn btn-primary">
        <i class="fas fa-shopping-cart icon"></i>Continue Shopping
    </a>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
