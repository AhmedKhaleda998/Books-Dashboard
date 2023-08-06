<!DOCTYPE html>
<html>
<head>
    <title>{{ $book->title }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/books">My Library</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('books.index') }}">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('books.create') }}">Add Books</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-5">
                <div class="card mt-4">
                    <div class="card-header">
                        <h2 class="card-title">{{ $book->title }}</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Price:</strong> ${{ $book->price }}</li>
                            <li class="list-group-item"><strong>Description:</strong> {{ $book->description }}</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('books.index') }}" class="btn btn-primary">Back to Books</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
