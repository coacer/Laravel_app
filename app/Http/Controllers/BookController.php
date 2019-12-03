<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
  public function index() {
    $books = Book::all();

    return view('book/index', ["books" => $books]);
  }

  public function show($id)
  {
    $book = Book::find($id);

    return view('book/show', compact('book'));
  }

  public function create()
  {
    return view('book/create');
  }

  public function store(BookRequest $request)
  {
    $book = new Book();
    $book->name = $request->name;
    $book->save();

    return redirect('/');
  }

  public function edit($id)
  {
    $book = Book::find($id);

    return view('book/edit', compact('book'));
  }

  public function update(BookRequest $request, $id)
  {
    $book = Book::find($id);
    $book->name = $request->name;
    $book->save();

    return redirect('/books/'.$id);
  }

  public function destroy($id)
  {
    $book = Book::find($id);
    $book->delete();

    return redirect('/');
  }
}
