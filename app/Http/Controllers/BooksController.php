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
}