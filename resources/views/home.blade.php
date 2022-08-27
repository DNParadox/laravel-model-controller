@extends('layouts.app')

@section('main_content')
    <div class="container">
        <div class="card-container">
        @foreach ($movies as $movie)
            <div class="column">
            <div class="card"> 

                <div>Titolo: {{ $movie->title }}</div>
                <div>Nazionalità: {{ $movie->nationality }} </div>
                <div>Data di uscita: {{ $movie->date }} </div>
                <div>Voto della critica: {{ $movie->vote }} </div>
            
            </div>
        </div>
     
        @endforeach
        </div>
    </div>

@endsection