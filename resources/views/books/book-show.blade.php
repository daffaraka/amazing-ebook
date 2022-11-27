@extends('layout')
@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                Add New Book
            </div>
            <div class="card-body">

                <div class="mb-2">
                    <label> Title</label>
                    <input type="text" class="form-control" name="title" value="{{$book->title}}" readonly>
                </div>
                <div class="mb-2">
                    <label> Author</label>
                    <input type="text" class="form-control" name="author" value="{{$book->author}}" readonly>
                </div>
                <div class="mb-2">
                    <label> Year</label>
                    <input type="text" class="form-control" name="year" value="{{$book->year}}" readonly>
                </div>
                <div class="mb-2">
                    <label> Synopsis</label>
                    <input type="text" class="form-control" name="synopsis" value="{{$book->synopsis}}" readonly>
                </div>
                <div class="mb-2">
                    <label> Publisher</label>
                    <input type="text" class="form-control" value="{{ $book->Publisher->name }}" readonly>

                </div>
                <div class="mb-2">
                    <label> Category</label>
                    <input type="text" class="form-control" value="{{ $book->Categories->first()->name }}" readonly>

                </div>
                <div class="mb-2">
                    <label> Image</label>
                    <div class="view overlay">
                        <img class="card-img-top img-thumbnail" src="{{ asset('Book Image/' . $book->image) }}" alt="Card image cap" style=" max-width:350px;">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
