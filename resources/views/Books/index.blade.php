<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Books</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="books">Book</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cds">CD</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="float-start mb-2">
                        <h2>Books</h2>
                    </div>
               </div>
                <div class="mb-3">
                    <a class="btn btn-dark" href="{{ route('books.create') }}"> Add New</a>
                </div>
            </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="container">
            <div class="row">
                @foreach ($books as $book)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $book->book_name}}</strong></h5>
                            <small>ID: {{ $book->id }}</small></br>
                            <p class="card-text" style="color:grey">{{ $book->author_first_name}}&nbsp;{{ $book->author_second_name}}</br>
                            £{{ $book->price}}</br>
                            Number of pages: {{ $book->total_pages}}</p>

                            <form action="{{ route('books.destroy',$book->id) }}" method="Post">
                                <a class="btn btn-dark float-start" href="{{ route('books.edit',$book->id) }}">Select</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger float-end">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        </div>
        {!! $books->links() !!}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
