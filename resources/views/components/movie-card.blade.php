<div class="mt-8">

    <a href="{{ route('movie.show', $movie['id']) }}">
    <img src="{{ $movie['poster_path'] }}" alt="poster" class="hover:opacity-75">
    </a>

   <div class="mt-2">
       <a href="{{ route('movie.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{$movie['title']}}</a>
   </div>

   <div class="flex items-center text-gray-400 text-sm mt-1" >

       <span><i class="fa fa-star"></i></span>
       <span class="ml-1">{{ $movie['vote_average'] }} </span>
       <span class="mx-2">|</span>
       <span >{{ $movie['release_date'] }}</span>

   </div>

   <div class="text-gray-400 text-sm" > {{ $movie['genres'] }} </div>

</div>