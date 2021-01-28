<?php

namespace Modules\Movie\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ShowTime\Entities\ShowTime;

class Movie extends Model
{
    protected $fillable = ['name', 'description', 'cinema_id', 'slug'];


    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function showtimes()
    {
        return $this->belongsToMany(ShowTime::class);
    }
}
