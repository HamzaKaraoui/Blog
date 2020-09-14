<?php

namespace App\ViewModels;

use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class TvshowViewModel extends ViewModel
{

   public $popularTvShows;
   public $TopRatedShows;
   public $genres;

    public function __construct($popularTvShows,$TopRatedShows,$genres)
    {
        $this->popularTvShows = $popularTvShows;
        $this->TopRatedShows = $TopRatedShows;
        $this->genres = $genres;    
    }

    public function popularTvShows(){
        
        return $this->fromatTvShows($this->popularTvShows);
       
    }
    public function TopRatedShows(){
        
        return $this->fromatTvShows($this->TopRatedShows);
    }
    public function genres(){

        return collect( $this->genres)->mapWithKeys(function($genre){

            return [$genre['id'] => $genre['name']];
        });
    }

    private function fromatTvShows ($tv){

        return collect($tv)->map(function($tv){

        $genreFromatted = collect($tv['genre_ids'])->mapWithKeys(function($value){
        return [$value =>$this->genres()->get($value)];
            })->implode(', ');

        return collect($tv)->merge([
            'poster_path' => $tv['poster_path']
            ? 'https://image.tmdb.org/t/p/w185'.$tv['poster_path']
            : 'https://via.placeholder.com/185x278',
                'vote_average' => $tv['vote_average'] * 10 .'%' ,
                'first_air_date' => Carbon::parse($tv['first_air_date'])->format('M d,Y') ,
                'genres' => $genreFromatted, 
            ]);

        })->dump();
    }
    
}
