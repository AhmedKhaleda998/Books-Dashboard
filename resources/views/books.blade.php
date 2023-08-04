<!DOCTYPE html>
<html>
<head>
    <title>{{ $page }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Book List</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Genre</th>
                <th>Publication Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['genre'] }}</td>
                    <td>{{ $book['publication_year'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
