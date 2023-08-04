<!DOCTYPE html>
<html>
<head>
    <title>{{ $page }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container mt-4">
    <h1 class="mb-4">Add New Book</h1>

    <form action="" method="">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>

        <div class="mb-3">
            <label for="publication_year" class="form-label">Publication Year</label>
            <input type="number" class="form-control" id="publication_year" name="publication_year" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Book</button>
    </form>
</div>
</body>
</html>