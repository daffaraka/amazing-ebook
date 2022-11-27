@extends('layout')
@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                Tambahkan Kategori
            </div>
            <div class="card-body">
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label> Nama Kategori Baru</label>
                        <input type="text" class="form-control" name="name" >
                    </div>


                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
