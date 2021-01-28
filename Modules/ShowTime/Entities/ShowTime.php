<?php

namespace Modules\ShowTime\Entities;

use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    protected $fillable = ['showtime'];


    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
