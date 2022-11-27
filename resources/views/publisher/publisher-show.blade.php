@extends('layout')
@section('content')
    <div class="container py-4">


        <h1>{{$publisher->name}}</h1>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="p-3">
                        <img src="{{ asset('Publisher Image/' . $publisher->image) }}"
                            style="border-radius: 10px; max-width:100%;">
                    </div>
                    <div class="card-body pt-3 px-0 text-center">
                        <h2 class="card-title ">{{ $publisher->name }}</h2>
                        <h6 class="card-text">{{ $publisher->address }}</h6>
                        <h6 class="card-text">{{ $publisher->email }}</h6>
                        <h6 class="card-text">{{ $publisher->phone }}</h6>
                    </div>
                    <div class="card-footer ">
                        <a href="{{route('publisher.edit',$publisher->id)}}" class="btn btn-warning"> Edit</a>
                        <a href="{{route('publisher.delete',$publisher->id)}}" class="btn btn-danger"> Hapus</a>
                    </div>
                </div>


            </div>
            <div class="col-lg-8">
                <h3>Book by {{$publisher->name}}</h3>
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year</th>
                        <th scope="col">Synopsis</th>
                        <th scope="col">Publisher</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @forelse ($publisher->Book as $book)
                            <td>{{$loop->iteration}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->year}}</td>
                            <td>{{$book->synopsis}}</td>
                            <td>{{$book->Publisher->name}}</td>
                            <td>
                                <a href="{{route('book.show',$book->id)}}" class="btn btn-sm btn-info">Show</a>
                                <a href="{{route('book.edit',$book->id)}}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{route('book.delete',$book->id)}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        @empty

                        @endforelse
                      </tr>

                    </tbody>
                  </table>
            </div>
        </div>



    </div>
@endsection
