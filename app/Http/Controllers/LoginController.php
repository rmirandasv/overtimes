<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Login;

class LoginController extends Controller
{

    public function authenticate(Login $request)
    {
        if (\Auth::attempt(['username' => $request->username, 'password' => $request->password , 'active' => 1, 'locked' => 0])) {
            return redirect()->route('overtimes.index');
        }
        
        return redirect()->route('login')->with('message', __('ui.login.error'));
    }

    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }

}
