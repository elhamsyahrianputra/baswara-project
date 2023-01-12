<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registration()
    {
        return view('auth.signup', [
            'title' => 'Registraion',
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'unique:users'],
            'password' => 'required|min:8|max:255',
        ]);

        $data['name'] = Str::title($data['name']);
        $data['email'] = Str::lower($data['email']);
        $data['password'] = hash::make($data['password']);

        User::create($data);

        return redirect('/login');
    }

    public function login()
    {
        return view('auth.login', [
            'title' => 'Login',
        ]);
    }

    function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'error' => 'Incorrect username or password',
        ])->onlyInput('error');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
