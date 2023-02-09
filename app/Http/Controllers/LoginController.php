<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function login()
    {
        return view('partials.login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request){

        if($request->has('rememberme')){
            Cookie::queue('email', $request->email, 120);
            Cookie::queue('password', $request->password, 120);
        } else {
            Cookie::queue(Cookie::forget('email'));
            Cookie::queue(Cookie::forget('password'));
        }

        $credentials = $request->validate([
            'email' => 'required|email:rfc',
            'password' => 'required|min:8|max:30'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();
            return redirect()->intended(route('home'))->with('success', 'Welcome to Amazing E-Grocery, ' . $user->firstname);
        }

        return back()->with('loginError', 'Wrong Email/Password.
        Please Check Again!');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->flash('logoutsuccess', 'Log Out Success! Thank You!');

        return redirect('/login');
        // ->with('logoutsuccess', 'Log Out Success!');
    }

}
