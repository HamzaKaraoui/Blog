<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class MoviesViewModel extends ViewModel
{

    public $popularMovies;
    public $nowPlaying;
    public $genres;

    public function __construct($popularMovies,$nowPlaying,$genres)
    {
        $this->popularMovies = $popularMovies;
        $this->nowPlaying = $nowPlaying;
        $this->genres = $genres;    
    }

    public function popularMovies(){
        
        return $this->fomratMovies($this->popularMovies);
       
    }
    public function nowPlaying(){
        
        return $this->fomratMovies($this->nowPlaying);
    }
    public function genres(){

        return collect( $this->genres)->mapWithKeys(function($genre){

            return [$genre['id'] => $genre['name']];
        });
    }

    private function fomratMovies ($movies){

        return collect($movies)->map(function($movie){

        $genreFromatted = collect($movie['genre_ids'])->mapWithKeys(function($value){
        return [$value =>$this->genres()->get($value)];
            })->implode(', ');

        return collect($movie)->merge([
                'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'],
                'vote_average' => $movie['vote_average'] * 10 .'%' ,
                'release_date' => Carbon::parse($movie['release_date'])->format('M d,Y') ,
                'genres' => $genreFromatted, 
            ]);

        });
    }
    
}
