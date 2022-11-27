<?php

namespace App\Http\Controllers;

use App\Models\Publishers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PublisherController extends Controller
{

    public function index()
    {
        $publisher = Publishers::all();
        return view('publisher.publisher-index',compact('publisher'));
    }

    public function create()
    {
        return view('publisher.publisher-create');
    }

    public function store(Request $request)
    {

        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $location = "Publisher Image";

        $file->move($location, $request->name.'-'.$imageName);


        $publisher = new Publishers();

        $publisher->name = $request->name;
        $publisher->address = $request->address;
        $publisher->phone = $request->phone;
        $publisher->email = $request->email;
        $publisher->image = $request->name.'-'.$imageName;

        $publisher->save();

        return redirect()->route('publisher.index');

    }

    public function show($id)
    {
        $publisher = Publishers::with('Book')->findOrFail($id);

        return view('publisher.publisher-show',compact('publisher'));
    }
    public function edit($id)
    {
        $publisher = Publishers::findOrFail($id);

        return view('publisher.publisher-edit',compact('publisher'));
    }

    public function update(Request $request, $id)
    {
        $publisher = Publishers::findOrFail($id);


        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $location = "Publisher Image";



        if ($request->has('image')) {
            if (File::exists('Publisher Image/' . $publisher->image)) {
                File::delete('Publisher Image/'.$publisher->image);
            };
        }

        $publisher->name = $request->name;
        $publisher->address = $request->address;
        $publisher->phone = $request->phone;
        $publisher->email = $request->email;
        $publisher->image = $request->name.'-'.$imageName;
        $file->move($location, $request->name.'-'.$imageName);
        $publisher->save();

        return redirect()->route('publisher.show',['id'=>$publisher->id]);
    }

    public function destroy($id)
    {
        $publisher = Publishers::findOrFail($id);

        if($publisher) {
            File::delete('Publisher Image/'.$publisher->image);
            $publisher->delete();
        }

        return redirect()->route('publisher.index');
    }

}
