@extends('layouts.app')
@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .custom-card {
            max-width: 400px;
            height: 300px;
        }
        .img{
            max-width: 350px;
            text-align: center;
        }
    </style>
</head>


    @isset($books)
    <div class="container my-4 p-4">
        <h1 class="mb-4">Book List</h1>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($books as $book)
                <div class="col">
                    <div class="custom-card card">
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
    @endsection