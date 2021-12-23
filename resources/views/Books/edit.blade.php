<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update Book</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="float-start mb-2">
                        <h2>Update Book</h2>
                    </div>
                </div>
                <div class="ml-3 mb-3">
                    <a class="btn btn-dark" href="{{ route('books.index') }}" enctype="multipart/form-data">Back</a>
                </div>
            </div>

            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif

            <form action="{{ route('books.update',$book->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="book_name" class="form-control" placeholder="Book name" value="{{ $book->book_name }}" >
                            @error('book_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="author_first_name" class="form-control" placeholder="Author First Name" value="{{ $book->author_first_name }}" >
                            @error('author_first_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="author_second_name" class="form-control" placeholder="Author Second Name" value="{{ $book->author_second_name }}" >
                            @error('author_second_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $book->price }}" >
                            @error('price')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="total_pages" class="form-control" placeholder="Total Pages" value="{{ $book->total_pages }}" >
                            @error('total_pages')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-5 col-sm-5 col-md-5">
                        <button type="submit" class="float-start btn btn-dark">Update</button>
                    </div>


                </div>
            </form>
        </div>

    </body>
</html>
