<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; #AUthentication
use Illuminate\Support\Facades\Hash; #FOr password
use App\Models\User;
class AuthController extends Controller
{
    function showRegister(){
        return view('authentication.register');
    }

    function showLogin(){
        return view('authentication.login');
    }
    function performLogin(Request $request){

    }
    function performRegister(Request $request){
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'         => 'required|email|unique:users', 
            'password'      => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login.form')->with('success','Registration Successful!');

    }
}
