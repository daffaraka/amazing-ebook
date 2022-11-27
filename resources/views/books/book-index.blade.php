@extends('layout')
@section('content')
    <div class="container">
        <h1 class="text-center">Books</h1>

        <a href="{{ route('book.create') }}" class="btn btn-primary mb-3">Add Books </a>

        <div class="row">
            @forelse ($book as $data)
                <div class="col-3 mb-3">
                    <!-- Card -->
                    <div class="card">

                        <!-- Card image -->
                        <div class="view overlay p-3">
                            <img class="card-img-top p-3 img-thumbnail" src="{{ asset('Book Image/' . $data->image) }}" alt="Card image cap" style="min-height:150px; max-height: 150px;">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="card-body">

                            <!-- Title -->
                            <h4 class="card-title">{{ $data->title }}</h4>
                            <h6>Author : {{ $data->author }}</h6>
                            <h6>Year : {{ $data->year }}</h6>
                            <h6>Publisher : {{ $data->Publisher->name }}</h6>
                            <!-- Text -->

                            Synopsis : <br>
                            <div class="card bg-light p-2 mb-2">
                                <p class="card-text">{{ $data->synopsis }}</p>
                            </div>

                            <!-- Button -->
                            <a href="{{ route('book.show', $data->id) }}" class="btn btn-sm btn-primary">Show</a>
                            <a href="{{ route('book.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('book.delete', $data->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </div>

                    </div>
                    <!-- Card -->
                </div>
            @empty
                <div class="d-flex justify-content-center">
                    <button class="text-center fw-bolder btn btn-outline-danger">No data available</button>

                </div>
            @endforelse
        </div>


    </div>
@endsection
