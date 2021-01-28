<?php

namespace App\Http\View\Composers;


use Illuminate\View\View;
use Modules\Cinema\Entities\Cinema;

class CinemasComposer
{

    public function compose(View $view)
    {
        
        $view->with('cinemas', Cinema::all());
    }

}