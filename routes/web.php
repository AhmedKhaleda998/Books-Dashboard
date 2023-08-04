<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', function () {
    $books = [
        [
            'title' => 'Sample Book 1',
            'author' => 'John Doe',
            'genre' => 'Fiction',
            'publication_year' => 2020,
        ],
        [
            'title' => 'Sample Book 2',
            'author' => 'Jane Smith',
            'genre' => 'Mystery',
            'publication_year' => 2018,
        ],
    ];
    $page = "Books";
    return view('books', [
        "page" => $page,
        "books" => $books
    ]);
});

Route::get('create-book', function () {
    $page = "create book";
    return view('create-book', ['page' => $page]);
});
