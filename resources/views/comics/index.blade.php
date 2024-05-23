@extends('layouts.app')

@section('content')
    <section>
        <h2 class="text-center">tutti i nostri fumetti migliori</h2>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card my-3" style="width: 18rem;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQcjzmHRDOmB2pdLNDRZHlvO2XXlQ1d5LWL8lmrxzf-w&s"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">Descrizione: {{ $comic->description }}</p>
                            <p class="card-text">Costo: {{ $comic->price }}</p>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>

    </section>
@endsection
