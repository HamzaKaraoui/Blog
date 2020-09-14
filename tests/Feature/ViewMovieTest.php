<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ViewMovieTest extends TestCase
{
    public function the_main_page_show_correct_infos()
    {
        $response = $this->get(route('movie.index'));
        $response->assertSuccessful() ; 
    }
}
