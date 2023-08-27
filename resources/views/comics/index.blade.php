@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')
    <div class="text-end">
        <a href="{{ route('comics.create') }}" class="btn btn-primary m-3 p-3">Create a comic</a>
    </div>
    <div class="container">
        <div class="row row-cols-6">
            @forelse ($comics as $comic)
                <div class="col mt-5 mb-2">
                    <div class="card h-100">
                        <div class="h-100">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="comics" class="img-fluid w-100">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Info</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2>There are no Comics</h2>
            @endforelse
        </div>
    </div>
@endsection
