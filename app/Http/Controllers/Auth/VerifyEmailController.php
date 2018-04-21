<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VerifyEmailController extends Controller
{


    /**
     * Send email verfication.
     *
     * @param  string $token 
     * @return Response
     */
    public function verify($token)
    {
        User::where('email_token',$token)->firstOrFail()
            ->update(['email_token' => null, 'email_verified' => "1"]);        

        return view ('verified');
            //->with('success', 'Acount Verfied');
    }


}
