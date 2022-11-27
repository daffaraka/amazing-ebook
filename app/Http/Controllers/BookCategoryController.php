<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookCategoryController extends Controller
{
    public function index()
    {
        $bookCategory = Books::all();
        return view('book_category.bc_index',compact('bookCategory'));
    }
}
