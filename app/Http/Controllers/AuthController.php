<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ---------- REGISTER ----------

    public function showRegister()
    {
        return view('authentication.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|max:100|unique:users,email',
            'password' => 'required|min:5|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('login.form')
            ->with('success', 'Registration Successful');
    }

    // ---------- LOGIN ----------

    public function showLogin()
    {
        return view('authentication.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            // Admin redirect
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.dashboard');
            }

            // Normal user redirect -> Send to Portfolio Page
            return redirect()->route('user.portfolio');
        }

        return back()->withErrors([
            'email' => 'Invalid login credentials.',
        ])->onlyInput('email');
    }

    // ---------- LOGOUT ----------

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // 🔥 redirect to login page
        return redirect()->route('login.form');
    }
}