<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
     public function contact() {
        return view('contact');
    }

         public function about() {
        return view('about');
    }


    public function index() {
        $books = Book::all();
        return view('books.index', ['books' => $books]);
    }

    public function create() {
        return view('books.create');
    }

    public function store(Request $request) {
        $book = Book::create([
            'title' => $request['title'],
            'author' => $request['author'],
            'released_at' => $request['released_at'],
        ]);

        return redirect('/books');
    }

    public function show($id) {
        $book = Book::find($id);
        return view('books.show', ['singleBook' => $book]);
    }

    public function edit($id) {
        $book = Book::find($id);
        return view('books.edit', ['editBook' => $book]);
    }

    public function update($id) {
        $book = Book::update();
        return view('books.index', ['editBook' => $book]);
    }

    public function destroy($id) {
        $book = Book::find($id);
        $book->delete($id);
        return redirect('/books/');
    }
}
