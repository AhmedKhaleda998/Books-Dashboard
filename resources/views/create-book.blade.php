<!DOCTYPE html>
<html>
<head>
    <title>{{ $page }}</title>
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
    <div class="container mt-4 p-4" >
        <h1 class="mb-4">Add New Book</h1>

        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Price">
            </div>
            <div class="form-group">
                <label for="exampleInputText">Description</label>
                <textarea class="form-control" name="description" name="description" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
        </form>
    </div>
</body>
</html>
