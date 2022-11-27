@extends('layout')
@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                Add New Book
            </div>
            <div class="card-body">
                <form action="{{route('book.update',$book->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label> Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $book->title }}" >
                    </div>
                    <div class="mb-2">
                        <label> Author</label>
                        <input type="text" class="form-control" name="author" value="{{ $book->author }}" >
                    </div>
                    <div class="mb-2">
                        <label> Year</label>
                        <input type="text" class="form-control" name="year" value="{{ $book->year }}" >
                    </div>
                    <div class="mb-2">
                        <label> Synopsis</label>
                        <input type="text" class="form-control" name="synopsis" value="{{ $book->synopsis }}" >
                    </div>
                    <div class="mb-2">
                        <label> Publisher</label>
                        <select name="publisher_id" id="" class="form-control">
                            <option >-- Publisher --</option>
                            @foreach ($publisher as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label> Category</label>
                        <input type="text" class="form-control" value="{{ $book->Categories->first()->name }}" >

                    </div>
                    <div class="mb-2">
                        <label> Image</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambahkan</button>

                </form>


            </div>
        </div>
    </div>
@endsection
