<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        $data['books'] = Book::orderBy('id','desc')->paginate(15);
        return view('books.index', $data);
    }

    public function userIndex()
    {
        $data['books'] = Book::orderBy('id','desc')->paginate(15);
        return view('books.userIndex', $data);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required',
            'author_first_name' => 'required',
            'author_second_name' => 'required',
            'price' => 'required',
            'total_pages'=>'required',
        ]);
        $book = new Book;
        $book->book_name = $request->book_name;
        $book->author_first_name = $request->author_first_name;
        $book->author_second_name = $request->author_second_name;
        $book->price = $request->price;
        $book->total_pages = $request->total_pages;
        $book->save();
        return redirect()->route('books.index')
        ->with('success','Book has been stored successfully.');
    }
    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }
    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'book_name' => 'required',
            'author_first_name' => 'required',
            'author_second_name' => 'required',
            'price' => 'required',
            'total_pages'=>'required',
        ]);
        $book = Book::find($id);
        $book->book_name = $request->book_name;
        $book->author_first_name = $request->author_first_name;
        $book->author_second_name = $request->author_second_name;
        $book->price = $request->price;
        $book->total_pages = $request->total_pages;
        $book->save();
        return redirect()->route('books.index')
        ->with('success','Book has been updated successfully');
    }
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
        ->with('success','Book has been deleted successfully');
    }

}
