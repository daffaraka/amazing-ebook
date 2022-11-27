@extends('layout')
@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                Add New Publisher Data
            </div>
            <div class="card-body">
                <form action="{{route('publisher.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-2">
                        <label> Publisher Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-2">
                        <label> Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="mb-2">
                        <label> Phone</label>
                        <input type="number" class="form-control" name="phone">
                    </div>
                    <div class="mb-2">
                        <label> Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-2">
                        <label> Publisher Logo</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
