@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Movies:</h1>
      
    <div class="row justify-content-center">
         @forelse ($movies as $movie)
        <div class="card col-3 mx-3 my-3">
            <div class="card-img-top">
                <img src="{{ $movie->image }}" alt="Locandina {{ $movie->title }}">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                <p class="card-text">Voto: {{ $movie->vote }}</p>
                
              </div>
        </div>
        @empty
            <div>Movie non trovato</div>
        @endforelse
    </div>
</div>   
@endsection  
