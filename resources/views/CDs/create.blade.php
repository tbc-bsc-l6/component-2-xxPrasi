<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add CD</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="float-start mb-2">
                        <h2>Add CD</h2>
                    </div>
                </div>
                <div class="ml-3 mb-3">
                    <a class="btn btn-dark" href="{{ route('cds.index') }}">Back</a>
                </div>
            </div>

            @if(session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
            @endif

            <form action="{{ route('cds.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="cd_title" class="form-control" placeholder="CD Title">
                            @error('cd_title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                            @error('first_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <div class="form-group">
                            <input type="text" name="band" class="form-control" placeholder="Band">
                            @error('band')
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
                            <input type="text" name="playlength" class="form-control" placeholder="Playlength">
                            @error('playlength')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 mb-4">
                        <button type="submit" class="btn float-start btn-dark">Add New</button>
                    </div>

                </div>
            </form>
        </div>

    </body>
</html>
