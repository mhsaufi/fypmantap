<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public function Users()
	{
		return $this->belongsTo(User::class);
	}
   
}

