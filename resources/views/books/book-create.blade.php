@extends('layout')
@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                Add New Book
            </div>
            <div class="card-body">
                <form action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label> Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-2">
                        <label> Author</label>
                        <input type="text" class="form-control" name="author">
                    </div>
                    <div class="mb-2">
                        <label> Year</label>
                        <input type="text" class="form-control" name="year">
                    </div>
                    <div class="mb-2">
                        <label> Synopsis</label>
                        <input type="text" class="form-control" name="synopsis">
                    </div>
                    <div class="mb-2">
                        <label> Publisher</label>
                        <select name="publisher_id" class="form-control">
                            <option aria-readonly>-- Publisher --</option>
                            @foreach ($publisher as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="mb-2">
                        <label> Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option aria-readonly>-- Category --</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-2">
                        <label> Image</label>
                        <input type="file" class="form-control" accept="image/*" name="image">
                    </div>



                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
