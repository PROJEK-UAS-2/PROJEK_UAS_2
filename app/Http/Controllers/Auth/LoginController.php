<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Session;

class LoginController extends Controller
{
    function index()  
    {
        return view('auth.login');
    }
    function login(Request $request)
    {
        $validatedUser = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($validatedUser)){
            session()->flash('login');
            return redirect()->to('/index');
        }else {
            return redirect()->to('/login');
        }
        
    }
    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        session()->flash('logout');
        return redirect()->to('/login');
    }
}
