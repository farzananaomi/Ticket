<?php

namespace App\Http\Controllers;

use \App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
    public function postLogin(LoginRequest $request)
    {
        $username = $request->name; //the input field has name='username' in form
        $password=$request->password;
        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
            //user sent their email
            Auth::attempt(['email' => $username, 'password' => $password]);
        } else {
            //they sent their username instead
            Auth::attempt(['username' => $username, 'password' => $password]);
        }

//was any of those correct ?
        if ( Auth::check() ) {
            //send them where they are going
            return redirect()->intended(route('tickets.create'));
        }

//Nope, something wrong during authentication
        return redirect()->back()->withErrors([
            'credentials' => 'The credentials you entered did not match our records. Try again...',
        ]);

    }

    public function getLogout()
    {
        auth('web')->logout();

        return redirect()->route('auth.login');
    }
}
