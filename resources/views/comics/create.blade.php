@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo del fumetto</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating">
                <textarea class="form-control" id="description" name="description" style="height: 100px"></textarea>
                <label for="description">Descrizione del fumetto</label>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="image" class="form-label">Immagine del fumetto</label>
                <input type="text" class="form-control" id="image" name="image" aria-describedby="emailHelp">
            </div>
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo del fumetto</label>
                <input type="text" class="form-control" id="price" name="price" aria-describedby="emailHelp">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="series" class="form-label">Serie del fumetto</label>
                <input type="text" class="form-control" id="series" name="series" aria-describedby="emailHelp">
            </div>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="sale_date" class="form-label">Giorno di vendita del fumetto</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" aria-describedby="emailHelp">
            </div>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="type" class="form-label">Tipo di fumetto</label>
                <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp">
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
