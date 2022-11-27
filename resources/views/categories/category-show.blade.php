@extends('layout')
@section('content')
<div class="container my-4">
    <div class="card">
        <div class="card-header">
            Detail Kategori
        </div>
        <div class="card-body">
            <form action="{{route('category.update',$category->id)}}" method="POST">
                @csrf
                <div class="mb-2">
                    <label class="fw-bold"> Nama Kategori</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}" disabled>
                </div>


            </form>
        </div>
    </div>
</div>
@endsection
