<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $category = Categories::all();
        return view('layout',compact('category'));
    }

    public function contactPage()
    {
        return view('contact-page');
    }
}
