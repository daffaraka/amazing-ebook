<?php

namespace App\Http\Controllers;

use App\Models\BookCategory;
use App\Models\Books;
use App\Models\Categories;
use App\Models\Publishers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{

    public function index()
    {
        $book = Books::with('Publisher')->get();
        return view('books.book-index', compact('book'));
    }


    public function create()
    {
        $category = Categories::all();
        $publisher = Publishers::all();
        return view('books.book-create', compact('category', 'publisher'));
    }


    public function store(Request $request)
    {


        $Book_Category = new BookCategory();


        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $location = "Book Image";

        $file->move($location, $request->title . '-' . $imageName);


        $book = new Books();

        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->synopsis = $request->synopsis;
        $book->publisher_id = $request->publisher_id;
        $book->image = $request->title . '-' . $imageName;

        $book->save();

        $Book_Category->book_id = $book->id;
        $Book_Category->category_id = $request->category_id;
        $Book_Category->save();

        return redirect()->route('book.index');
    }


    public function show($id)
    {

        $book = Books::with('Publisher')->find($id);

        return view('books.book-show', compact('book'));
    }

    public function edit($id)
    {
        $book = Books::with('Publisher')->find($id);
        $publisher = Publishers::all();
        return view('books.book-edit', compact('book','publisher'));
    }


    public function update(Request $request, $id)
    {

        $book = Books::with('Publisher')->find($id);

        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $location = "Book Image";

        if ($request->has('image')) {
            if (File::exists('Book Image/' . $book->image)) {
                File::delete('Book Image/'.$book->image);

            };
        }

        $book->title = $request->title;
        $book->author = $request->author;
        $book->year = $request->year;
        $book->synopsis = $request->synopsis;
        $book->publisher_id = $request->publisher_id;
        $book->image = $request->title . '-' . $imageName;
        $file->move($location, $request->title . '-' . $imageName);
        $book->save();

        return redirect()->route('book.index');
    }

    public function destroy($id)
    {
        $book = Books::with('Publisher')->find($id);

        if($book) {
            File::delete('Book Image/'.$book->image);
            $book->delete();
        }

        return redirect()->route('book.index');
    }
}
