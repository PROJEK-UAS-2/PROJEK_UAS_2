<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    function index()
    {
        return view('auth.register');
    }
    function register(Request $request)
    {
        $validatedUser = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'contact' => 'required',
        ]);
        $userData = new User;
        $userData->name = $request->name;
        $userData->email = $request->email;
        $userData->password = bcrypt($request->password);
        $userData->contact = $request->contact;
        $userData->save();

        return redirect()->to('/login')->with('sukses', 'Registrasi Berhasil');
    }
}
