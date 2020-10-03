<?php

namespace App\Http\Controllers\Auth;
use  App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        request()->validate([
            'name'=>['required'],
            'no_hp'=>['required','min:10','max:13','unique:users,no_hp'],
            'role_id'=>['required'],
            'password'=>['required','min:6']


        ]);
        User::create([
            'no_hp'=>request('no_hp'),
            'name'=>request('name'),
            'no_hp'=>request('no_hp'),
            'role_id'=>request('role_id'),
            'password'=>bcrypt(request('password')),
        ]);
        return  response('Thank you for registering');
    }
}
