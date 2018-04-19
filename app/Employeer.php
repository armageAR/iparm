<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    

    public function users()
    {
    	return $this->morphOne('user','userable');
    }
}
