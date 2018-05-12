<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = ['users_id','status','start_date','due_date','debtor','subject'];
}
