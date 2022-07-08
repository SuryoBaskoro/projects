<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function do_regis(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed'
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('home');
    }
    public function do_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'min:8',
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return redirect()->back()->with('Loginerror', "E-mail atau sandi Salah");
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->back();
    }
}
