<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_year' => 'required|integer',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Book added successfully.');
    }

    public function edit(Book $book)
    {
        //Lengkapi fungsi ini

    }

    public function update(Request $request, Book $book)
    {
        //Lengkapi fungsi ini

    }

    public function destroy(Book $book)
    {
        //Lengkapi fungsi ini

    }
}
