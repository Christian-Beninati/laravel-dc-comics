@extends('layouts.main')

@section('title', 'Create')

@section('main-content')
    <h1>Create a new comic</h1>
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST" novalidate>
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title') }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required> {{ old('description') }}</textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="url" class="form-control  @error('thumb') is-invalid @enderror" id="thumb"
                            name="thumb" value="{{ old('thumb') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('thumb') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" min="0" value="{{ old('price') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('price') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                            name="series" value="{{ old('series') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('series') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                            name="sale_date" value="{{ old('sale_date') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('sale_date') }}
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                            name="type" value="{{ old('type') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('type') }}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="artists" class="form-label">Artists</label>
                        <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists"
                            name="artists" value="{{ old('artists') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('artists') }}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers"
                            name="writers" value="{{ old('writers') }}" required>
                        <div class="invalid-feedback">
                            {{ $errors->first('writers') }}
                        </div>
                    </div>
                </div>
                <div class="col-12 text-end">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-success">Add</button>
                </div>
            </div>
        </form>
    </div>
@endsection
