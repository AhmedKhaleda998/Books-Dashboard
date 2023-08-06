<!DOCTYPE html>
<html>
<head>
    <title>{{ $page }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .custom-card {
            max-width: 400px;
            height: 300px;
        }
    </style>
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
    @isset($books)
    <div class="container my-4 p-4">
        <h1 class="mb-4">Book List</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($books as $book)
                <div class="col">
                    <div class="card custom-card">
                        <div class="card-body">
                            <h5 class="card-title h4 bold"><strong>{{ $book['title'] }}</strong></h5>
                            <p class="card-text"><strong>Price:</strong> ${{ $book['price'] }}</p>
                            <p class="card-text"><strong>Description:</strong> {{ $book['description'] }}</p>
                        </div>
                        <div class="card-footer py-3">
                            <form action="{{ route('books.show', $book['id']) }}" method="GET" class="d-inline">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-primary">View</button>
                            </form>
                            <form action="{{ route('books.edit', $book['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('GET')
                                <button type="submit" class="btn btn-success">Edit</button>
                            </form>
                            <form action="{{ route('books.destroy', $book['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container mt-5">
                {{ $books->links() }}
            </div>
        </div>
    </div>

    @else
        <p>No Books</p>
    @endif
</body>
</html>
