<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add Book</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
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
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <input type="text" name="book_name" class="form-control" placeholder="Book Name">
                            @error('book_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <input type="text" name="author_first_name" class="form-control" placeholder="First Name">
                            @error('author_first_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <input type="text" name="author_second_name" class="form-control" placeholder="Second Name">
                            @error('author_second_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" placeholder="Price">
                            @error('price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="form-group">
                            <input type="text" name="total_pages" class="form-control" placeholder="Total Pages">
                            @error('total_pages')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <button type="submit" class="btn float-end btn-dark">Add New</button>
                    </div>

                </div>
            </form>
        </div>
    </body>
</html>
