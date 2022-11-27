@extends('layout')
@section('content')
    <div class="container py-4">

        <a href="{{ route('publisher.create') }}" class="btn btn-primary mb-3">Add Publisher </a>
        <div class="row">
            @foreach ($publisher as $data)
                <div class="col-md-4">
                    <div class="card">
                        <div class="p-3 d-flex justify-content-center">
                            <img src="{{ asset('Publisher Image/' . $data->image) }}"
                                style="border-radius: 10px; max-width:100%; max-height:150px;">
                        </div>
                        <div class="card-body pt-3 px-0 text-center">
                            <h2 class="card-title ">{{ $data->name }}</h2>
                            <h6 class="card-text">{{ $data->address }}</h6>
                            <h6 class="card-text">{{ $data->email }}</h6>
                            <h6 class="card-text">{{ $data->phone }}</h6>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('publisher.show', $data->id) }}" class="btn btn-primary">List Book</a>
                        </div>
                    </div>


                </div>
            @endforeach
        </div>

    </div>
@endsection
