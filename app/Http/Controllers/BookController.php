<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->paginate(12);
        $page = "Books";
        return view('books', [
            "page" => $page,
            "books" => $books
        ]);
    }

    public function create()
    {
        $page = "Add book";
        return view('create-book', ['page' => $page]);
    }

    public function store(Request $request)
    {
        Book::create([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description,
        ]);
        return redirect()->route('books.index');
    }

    public function show($book)
    {
        $book = Book::findOrFail($book);
        // dd($book);
        return view('show-book', compact('book'));

    }

    public function edit(Book $book)
    {
        return view('edit-book', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    public function destroy($book)
    {
        $book = Book::find($book);
        $book->delete();
        return redirect()->back();
    }
}
