@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <h1>{{ $comic->title }}</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <p class="card-text">{{ $comic->description }}</p>
                        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-success">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
