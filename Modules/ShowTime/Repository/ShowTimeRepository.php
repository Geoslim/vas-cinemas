<?php

namespace Modules\ShowTime\Repository;


use Modules\ShowTime\Entities\ShowTime;

class ShowTimeRepository 
{
    public function getShowTime()
    {
        return ShowTime::all();
    }

    public function create($request)
    {
        ShowTime::create([
            'showtime' => $request['showtime'],
           
        ]);
    
    }
}