<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = [
        'companyname'
    ];

	public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }
}
