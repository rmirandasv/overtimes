<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function authenticate(Request $request)
    {
        if (\Auth::attempt(['username' => $request->username, 'password' => $request->password , 'active' => 1, 'locked' => 0])) {
            return redirect()->route('overtimes.index');
        }
        
        redirect()->route('login');
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }

}
