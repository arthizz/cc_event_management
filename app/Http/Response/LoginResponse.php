<?php

namespace App\Http\Response;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract{

    public function toResponse($request){

        $url = '';

        if(Auth::check()){

            if(Auth::user()->hasRole('administrator')){

                $url = '/administrator/dashboard';

            }elseif(Auth::user()->hasRole('student')){

                $url = '/student/profile';

            }elseif(Auth::user()->hasRole('professor')){

                $url = '/professor/dashboard';

            }else{

                $url = config('fortify.home');

            }

        }

        return $request->wantsJson()
            ? response()->json([
                'two_factor' => false,
                'redirection_url' => $url
            ])
            : redirect()->intended($url);

    }

}