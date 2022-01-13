<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Books</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&display=swap" rel="stylesheet">
        <style>
            .navbar{
                background-color:#C6CAED;
            }
            .navbar-brand
            {
                font-family: 'Lobster Two', cursive;
                letter-spacing: 2px;
            }
            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: #C6CAED;
                color: black;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <b>The Stopshop</b>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="books">Book</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cds">CD</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="float-start mb-2">
                        <h2>Add Book</h2>
                    </div>
                </div>
                <div class="ml-3 mb-3">
                    <a class="btn btn-dark" href="{{ route('books.index') }}">Back</a>
                </div>
            </div>

            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif

            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="book_name" class="form-control" placeholder="Book Name">
                            @error('book_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="author_first_name" class="form-control" placeholder="First Name">
                            @error('author_first_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="author_second_name" class="form-control" placeholder="Second Name">
                            @error('author_second_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" placeholder="Price">
                            @error('price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="total_pages" class="form-control" placeholder="Total Pages">
                            @error('total_pages')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <button type="submit" class="btn btn-outline-dark">Add New</button>
                    </div>

                </div>
            </form>
        </div>

    </body>
</html>
