@extends('layout')
@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                Update {{$publisher->name}} Data
            </div>
            <div class="card-body">
                <form action="{{route('publisher.update',$publisher->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label> Publisher Name</label>
                        <input type="text" class="form-control" name="name" value="{{$publisher->name}}">
                    </div>
                    <div class="mb-2">
                        <label> Address</label>
                        <input type="text" class="form-control" name="address" value="{{$publisher->address}}">
                    </div>
                    <div class="mb-2">
                        <label> Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{$publisher->phone}}">
                    </div>
                    <div class="mb-2">
                        <label> Email</label>
                        <input type="email" class="form-control" name="email" value="{{$publisher->email}}">
                    </div>
                    <div class="mb-2">
                        <label> Publisher Logo</label>
                        <input type="file" class="form-control" name="image" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
