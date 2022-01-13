@extends('layouts.app')

@section('content')
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
    <div class="row">
        <h1><center>Category</center></h1>
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/book.png" alt="Girl reading book">
                <div class="card-body">
                    <h5 class="card-title">Books</h5>
                    <p class="card-text">
                        Visit the world and get lost within the words. Nothing can capture the imagination as much as books do.
                    </p>
                    <a href="books" class="btn btn-lg btn-outline-dark">Go to Books</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="file:///C:/xampp8.0.12/htdocs/laravel/component-2-xxPrasi/resources/views/cd.jpg" alt="Girl listening to music">
                <div class="card-body">
                    <h5 class="card-title">CDs</h5>
                    <p class="card-text">
                        Music can be whatever you want it to be. Whether an escape from reality or a just background noise.
                    </p>
                    <a href="cds" class="btn btn-lg btn-outline-dark">Go to CDs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="mt-auto"  style="background-color:#D3D3D3">
        <p class="d-flex justify-content-center">©Precious2022</p>
</footer>
@endsection
