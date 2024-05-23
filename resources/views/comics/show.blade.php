@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-bg-dark">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQcjzmHRDOmB2pdLNDRZHlvO2XXlQ1d5LWL8lmrxzf-w&s"
                class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <p class="card-text"><small>Costo: {{ $comic->price }}</small></p>
                <p class="card-text"><small>Costo: {{ $comic->sale_date }}</small></p>
                <p class="card-text"><small>Costo: {{ $comic->type }}</small></p>
            </div>
        </div>
    </div>
@endsection
