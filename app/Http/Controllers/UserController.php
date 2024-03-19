<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name
        ]);
        return redirect()->route('login');
    }
    public function loginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if (!Auth::attempt($credentials)) {
            return redirect()->route('login');
        }
        $request->session()->regenerate();
        return redirect()->route('index');
    }
    public function logoutUser(Request $request)
    {
        $data = Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
