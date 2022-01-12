<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                STORE NAME
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

    <!--<div id="carouselControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/banner.jpg" alt="Vintage welcome text">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/readme_images/bookstore.jpg" alt="Girl reading a book looking through bookshelf">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/readme_images/cdstore.jpg" alt="Man choosing a cd from record store">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>--!>

    <div class="container mt-5">
        <div class="row">
            <h2>Products</h2>
            <div class="col-lg-4 mb-4 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="display-1"><a href="books" style="text-decoration:none">Book</a></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mt-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <h1 class="display-1"><a href="cds" style="text-decoration:none">CD</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
