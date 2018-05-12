<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setsong extends Model
{
     public function songs()
    {
    	return $this->hasMany(Song::class);
    }

    public function setlists()
    {
    	return $this->hasMany(Setlist::class);
    }
}
