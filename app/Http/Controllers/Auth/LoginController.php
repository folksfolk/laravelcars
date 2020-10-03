<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $request->validate([
            'no_hp'=>['required'],
            'password'=>['required']
        ]);
        if(!$token=auth()->attempt($request->only('no_hp','password'))){
            return response(null,401);
        }

        return response()->json(compact('token'));
    }
}
