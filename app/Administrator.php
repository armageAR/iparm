<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    public function users()
    {
    	return $this->morphOne('user','userable');
    }
}
