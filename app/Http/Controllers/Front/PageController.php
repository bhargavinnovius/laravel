<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
class PageController extends Controller
{
    public function index(Request $request)
    {
        //return view('front.index');
    }

    public function books(Request $request)
    {
        $books = Book::latest()->paginate();
        //$books = [];
        return view('front.books',compact('books'));
    }
}
