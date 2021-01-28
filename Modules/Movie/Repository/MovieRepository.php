<?php

namespace Modules\Movie\Repository;

use Modules\Movie\Entities\Movie;
use Modules\ShowTime\Entities\ShowTime;
use Illuminate\Support\Str;

class MovieRepository 
{
    public function getShowTime()
    {
        return ShowTime::all();
    }

    public function create($request)
    {
        // dd($request);
        $slug = Str::slug($request['name'], '-');

        $movie = Movie::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'cinema_id' => $request['cinema_id'],
            'slug' => $slug,
        ]);

        if ($request['showtime']) {
            $movie->showtimes()->attach($request['showtime']);    
        }
    }
}