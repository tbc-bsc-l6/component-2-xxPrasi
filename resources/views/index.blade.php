<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
    <style>
        .carousel-item
        {
            background: black;
            color: white;
            height: 32rem;
            position: relative;
        }
        .container
        {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding-bottom: 50px;
        }
        .overlay-image
        {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            background-position: center;
            background-size: cover;
            opacity: 0.5;
        }
        .navbar-brand
        {
            font-family: 'Lobster Two', cursive;
            letter-spacing: 2px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <b>Precious</b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!--<a class="nav-item nav-link active" style="margin-right: 10px;margin-left: 5px;" href="register" role="button">Register</a>
                <a class="nav-item nav-link active" href="login" role="button">Log In</a>
                <div class="navbar-nav ml-auto">
                @if(Session::get('user'))
                <a class="nav-item nav-link" href="#">Welcome, {{Session::get('user')}}</a>
                <a class="nav-item nav-link" href="/logout">Logout</a>
                @else
                <a class="nav-item nav-link active" style="margin-right: 10px;margin-left: 5px;" href="register" role="button">Register</a>
                <a class="nav-item nav-link active" href="login" role="button">Log In</a>
                @endif
                </div>-->
            </div>
        </div>
    </nav>

    <div id="slideCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slideCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#slideCarousel" data-slide-to="1"></li>
            <li data-target="#slideCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="overlay-image"
                    style="background-image:url(file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/banner.jpg);">
                </div>
                <div class="container">
                    <h3>Come join us!</h3>
                    <p>
                        Be a part of the community. Enjoy endless recommendations of your interest.
                    </p>
                    <a href="" class= "btn btn-lg btn-outline-light">
                        Register Now
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image"
                    style="background-image:url(file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/bookstore.jpg);">
                </div>
                <div class="container">
                <h3>Come join us!</h3>
                    <p>
                        Be a part of the community. Enjoy endless recommendations of your interest.
                    </p>
                    <a href="" class= "btn btn-lg btn-outline-light">
                        Register Now
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image"
                    style="background-image:url(file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/cdstore.jpg);">
                </div>
                <div class="container">
                <h3>Come join us!</h3>
                    <p>
                        Be a part of the community. Enjoy endless recommendations of your interest.
                    </p>
                    <a href="" class= "btn btn-lg btn-outline-light">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
        <a href="#slideCarousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a href="#slideCarousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="sr-only">Next</span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <h1>Thank you for visiting us!</h1>
        </div>
        <div class="d-flex justify-content-center">
            <h4>Please log in  or register.</h4>
        </div>
    </div>

    <footer class="container">

    </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
