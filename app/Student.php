<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //protected $fillable = [];

	public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
