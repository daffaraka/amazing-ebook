<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $category_opt = Categories::all();
        // $search = true;
        $category = Categories::with('Book.Publisher');


        if($request->has('filter')) {
            $category = Categories::where('id',$request->filter)->get();

        } else {
            $category = $category->get();
        }

        // dd($category);

        return view('categories.category-index',compact('category','category_opt'));
    }

    public function create()
    {
        return view('categories.category-create');
    }


    public function store(Request $request)
    {
        Categories::create($request->all());

        return redirect()->route('category.index');
    }


    public function show($id)
    {
        $category = Categories::findOrFail($id);
        return view('categories.category-show',compact('category'));
    }


    public function edit($id)
    {
        $category = Categories::findOrFail($id);
        return view('categories.category-edit',compact('category'));
    }


    public function update(Request $request, $id)
    {
        $category = Categories::findOrFail($id);

        $category->name = $request->name;

        $category->save();

        return redirect()->route('category.index');
    }


    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->route('category.index');
    }

    public function filter($id)
    {
        $categoryFilter = Categories::with('Book')->findOrFail($id);

        return view('categories.category-filter',compact('categoryFilter'));
    }
}
