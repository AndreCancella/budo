<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        // $hashedPassword = password_hash($request->password, PASSWORD_BCRYPT);
        // echo "".$hashedPassword."";
        // die();
        $auth = Auth::attempt(['user' => $request->user, 'password' => $request->password]);

        if ($auth) {
            return redirect()->route('panel')->with('sucess', 'Logged in');
        } else {
            return redirect()->route('login')->withErrors(['error' => 'email or password invalid']);
        }
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
