<?php

namespace Modules\Cinema\Repository;

use Modules\Cinema\Entities\Cinema;
use Illuminate\Support\Str;

class CinemaRepository 
{
    
    public function create($request)
    {
        
        $slug = Str::slug($request['name'], '-');

        $cinema = Cinema::create([
            'name' => $request['name'],
            'slug' => $slug,
        
        ]);
    }


    public function findBySlug($slug)
    {
        return Cinema::where('slug', $slug)->first();
    }
}