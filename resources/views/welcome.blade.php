<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="books">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cds">CD</a>
                    </li>
                </ul>
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
                    <h1>Come join us!</h1>
                    <p>
                        Be a part of the community. Enjoy endless recommendations of your interest.
                    </p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Register Now
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image"
                    style="background-image:url(file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/bookstore.jpg);">
                </div>
                <div class="container">
                <h1>Come join us!</h1>
                    <p>
                        Be a part of the community. Enjoy endless recommendations of your interest.
                    </p>
                    <a href="#" class="btn btn-lg btn-primary">
                        Register Now
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="overlay-image"
                    style="background-image:url(file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/cdstore.jpg);">
                </div>
                <div class="container">
                <h1>Come join us!</h1>
                    <p>
                        Be a part of the community. Enjoy endless recommendations of your interest.
                    </p>
                    <a href="#" class="btn btn-lg btn-primary">
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
        <div class="row">
            <h3>View Products</h3>
            <div class="col-lg-6 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/book.png" alt="Girl reading book">
                    <div class="card-body">
                            <h5 class="card-title">Books</h5>
                            <p class="card-text">
                                Visit the world and get lost within the words. Nothing can capture the imagination as much as books do.
                            </p>
                            <a href="books" class="btn btn-primary">Go to Books</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-4 mt-4">
            <div class="card" style="width: 100%;">
                    <img class="card-img-top" src="file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/cd.jpg" alt="Girl listening to music">
                    <div class="card-body">
                            <h5 class="card-title">CDs</h5>
                            <p class="card-text">
                                Music can be whatever you want it to be. Whether an escape from reality or a just background noise.
                            </p>
                            <a href="cds" class="btn btn-primary">Go to CDs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>

    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
