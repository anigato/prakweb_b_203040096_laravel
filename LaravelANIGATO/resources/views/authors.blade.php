@extends('layouts.main')
@section('container')
    <h1 class="mb-5">{{ $title }}</h1>
    <div class="container">
        <div class="row">
            @foreach ($authors as $author)
                <div class="col-md-4 mb-3">
                    <a href="/authors/{{ $author->slug }}">
                        <div class="card bg-dark text-white">
                            <img src="https://source.unsplash.com/400x400?{{ $author->name }}" class="card-img img-circle"
                                alt="{{ $author->name }}">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title text-center flex-fill p-4 fs-3"
                                    style="background-color: rgba(0, 0, 0, 0.7)">{{ $author->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
