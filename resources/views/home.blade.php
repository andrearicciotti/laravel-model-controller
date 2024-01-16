@extends('layouts.app')

@section('movies')

<div class="container text-center">
    <h1 class="my-3">Movies</h1>

    <div class="row g-2">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }} image">
                    <div class="card-body">
                        <h4 class="card-title">Title: {{ $movie->title }}</h4>
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

