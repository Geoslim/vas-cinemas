<?php

namespace Modules\Cinema\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Movie\Entities\Movie;

class Cinema extends Model
{
    protected $fillable = ['name','slug'];
    

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }
}
