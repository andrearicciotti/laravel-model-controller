@extends('layouts.app')

@section('movies')

<div class="container text-center">
    <h1>Movies</h1>

    <div class="row row-cols-4">
        @foreach ($movies as $movie)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }} image">
                    <div class="card-body">
                        <h3 class="card-title">Title: {{ $movie->title }}</h3>
                        <h5>Nationality: {{ $movie->nationality }}</h5>
                        <p><strong>Release date:</strong> {{ $movie->date }}</h5>
                        <p><strong>Vote average:</strong> {{ $movie->vote }}</p>
                    </div>
                    </div>
            </div>
        @endforeach
    </div>

</div>
    
@endsection

