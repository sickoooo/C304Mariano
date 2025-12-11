<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // 1. List all users
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    // 2. Show the "Create User" form
    public function create()
    {
        return view('admin.users.create');
    }

    // 3. Store the new user in the database
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:5',
            'role'     => 'required|in:0,1' // 0 = User, 1 = Admin
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->role, 
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User created successfully.');
    }

    // 4. Delete a user
    public function destroy(User $user)
    {
        // Prevent deleting yourself
        if (Auth::id() === $user->id) {
            return back()->with('error', 'You cannot delete your own account.');
        }

        $user->delete();

        return back()->with('success', 'User deleted successfully.');
    }
}