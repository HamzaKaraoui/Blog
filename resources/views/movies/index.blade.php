@extends('layouts.main')
@section('content')

<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <ul class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular movies</ul>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
           @foreach ($popularMovies as $movie)
           
           <x-movie-card :movie="$movie" />
           @endforeach


        </div>

    </div>

</div>

<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <ul class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</ul>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

        @foreach ($nowPlaying as $movie)
           
        <x-movie-card :movie="$movie" />

        @endforeach

        </div>

    </div>

</div>
    
@endsection