@extends('layout')
@section('content')
<div class="container my-4">
    <div class="card">
        <div class="card-header">
            Update Kategori
        </div>
        <div class="card-body">
            <form action="{{route('category.update',$category->id)}}" method="POST">
                @csrf
                <div class="mb-2">
                    <label> Nama Kategori Baru</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
