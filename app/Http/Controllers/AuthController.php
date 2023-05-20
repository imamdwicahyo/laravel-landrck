<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($credentials)) {
            // Login berhasil
            return redirect(route('admin.dashboard')); // Ubah sesuai dengan URL tujuan setelah login berhasil
        } else {
            // Login gagal
            return back()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function handleRegist(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'karyawan'

        ]);

        return redirect(route('auth.login.form'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/login'); // Ubah sesuai dengan URL tujuan setelah logout
    }
}
