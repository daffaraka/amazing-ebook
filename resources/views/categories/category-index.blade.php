@extends('layout')
@section('content')
    <div class="container py-5">

        <h1 class="text-center mb-3">Category</h1>

        <a href="{{ route('category.create') }}" class="btn btn-primary mb-3">Add New Category </a>

        <div class="px-0">
            <form action="{{ route('category.index') }}" class="d-flex">
                <select name="filter" class="form-control">
                    @foreach ($category_opt as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach

                </select>
                <button type="submit" class="btn btn-primary">Filter</button>
                <a href="{{ route('category.index') }}" class="btn btn-info">Reset</a>
            </form>
        </div>


        @foreach ($category as $data)
            <div class="row  mb-4 p-3 ">

                <div class="card p-0">
                    <div class="card-header d-flex justify-content-between">
                        <h3> {{ $data->name }} </h3>
                        <div>
                            <a href="{{ route('category.edit', $data->id) }}" class="btn btn-warning mb-3">Edit </a>
                            <a href="{{ route('category.delete', $data->id) }}" class="btn btn-danger mb-3">Delete </a>
                        </div>
                    </div>

                    @forelse ($data->Book as $book)
                        <div class="col-3 mb-3 py-3 px-4">
                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">
                                    <img class="card-img-top" src="{{ asset('Book Image/' . $book->image) }}"
                                        alt="Card image cap" style="max-height: 150px;">
                                    <a href="#!">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>

                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title">{{ $book->title }}</h4>
                                    <h6>Author : {{ $book->author }}</h6>
                                    <h6>Year : {{ $book->year }}</h6>
                                    <h6>Publisher : {{ $book->Publisher->name }}</h6>
                                    <!-- Text -->

                                    Synopsis : <br>
                                    <div class="card bg-light p-2 mb-2">
                                        <p class="card-text">{{ $book->synopsis }}</p>
                                    </div>

                                    <!-- Button -->
                                    {{-- <a href="{{ route('book.show', $data->id) }}" class="btn btn-sm btn-primary">Show</a>
                                            <a href="{{ route('book.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="{{ route('book.delete', $data->id) }}" class="btn btn-sm btn-danger">Delete</a> --}}
                                </div>

                            </div>
                            <!-- Card -->
                        </div>

                    @empty
                        <h4 class="text-center my-3">Belum Ada</h4>
                    @endforelse
                </div>

            </div>
        @endforeach
        {{-- </tbody>
            </table> --}}



    </div>
@endsection
