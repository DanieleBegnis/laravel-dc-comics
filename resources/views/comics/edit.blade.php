@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo del fumetto</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" aria-describedby="emailHelp">
            </div>
            <div class="form-floating">
                <textarea class="form-control" id="description" name="description" style="height: 100px"></textarea>
                <label for="description">{{ $comic->description }}</label>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Immagine del fumetto</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $comic->image }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo del fumetto</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie del fumetto</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Giorno di vendita del fumetto</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo di fumetto</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <h3>ELIMINA ELEMENTO</h3>
    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Elimina il Comic</button>
    </form>
@endsection
