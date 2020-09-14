@extends('layouts.main')
@section('content')

<div class="container mx-auto px-4 pt-16">
    <div class="popular-shows">
        <ul class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Shows</ul>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularTvShows as $tvshow)
           
           <x-tv-card :tvshow="$tvshow" />
           @endforeach
 

        </div>

    </div>

</div>

<div class="container mx-auto px-4 pt-16">
    <div class="popular-shows">
        <ul class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Top Rated Shows</ul>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

         @foreach ($TopRatedShows as $tvshow)
           
         <x-tv-card :tvshow="$tvshow" />

        @endforeach

        </div>

    </div>

</div>
    
@endsection