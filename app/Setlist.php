<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setlist extends Model
{
   public function setsongs()
   {
   		return $this->hasMany(SetSong::class);
   }
}
