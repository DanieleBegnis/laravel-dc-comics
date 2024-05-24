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
        </form>
    </div>
@endsection
