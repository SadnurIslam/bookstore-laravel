<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index(){
        $books = Book::paginate(10);
        return view("books.index",['books'=>$books]);
    }
    public function show($id){
        $book = Book::findOrFail($id);
        return view("books.show",['book'=>$book]);
    }

    public function create(){
        return view("books.create");
    }

    public function store(Request $request){

        $rules = [
            'title'=> 'required|alpha_num|max:255',
            'author'=> 'required',
            'isbn'=> 'required|unique:books|alpha_num|size:13',
            'price'=> 'required|decimal:0,10|min:0',
            'stock'=> 'required|integer|min:0',
        ];
        $request->validate($rules);
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->isbn = $request->isbn;
        $book->price = $request->price;
        $book->stock = $request->stock;
        $book->save();
        // return redirect()->route('books.index');
        return redirect()->route('books.show',['id'=>$book->id])->with('status','Book created successfully');
    }
}
