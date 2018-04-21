<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\Notifications\VerifyEmail;

Relation::morphMap([
    'employer' => 'App\Employer',
    'student' => 'App\Student',
    'admin' => 'App\Administrator',
]);

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'userable_id', 'userable_type', 'email_token', 'email_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userable(){
        return $this->morphTo();
    }

    /***
    *   Check if the user mail is verified
    *
    *
    */
    public function verified()
    {
        return $this->email_verified === 1;
    }

    /**
    *
    *
    */
    public function sendVerificationEmail()
    {
        $this->notify(new VerifyEmail($this));
    }

}