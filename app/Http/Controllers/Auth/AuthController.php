<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login', ['title' => 'Login']);
    }

    public function register()
    {
        return view('pages.auth.register', ['title' => 'Register']);
    }

    public function store_register(Request $request)
    {
        $rules = ([
            'fullname' => 'required|max:50|min:5',
            'username' => 'required|max:30|min:5|unique:users',
            'email' => 'required|email:dns|unique:users',
            'birthday' => 'required|max:12',
            'password' => 'required|max:255|min:5',
            'confirm_password' => 'required|max:255|min:5|same:password',
        ]);

        $validated = $request->validate($rules);
        $validated['password'] = bcrypt($validated['password']);
        $validated['remember_token'] = Str::random(100);
        User::create($validated);
        return back()->with('success', 'Register berhasil, silahkan login!');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
        return back()->with('error', 'Oops! Invalid email dan password.');
    }


    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
