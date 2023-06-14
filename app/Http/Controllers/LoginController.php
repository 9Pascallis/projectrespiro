<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth/login');
    }

    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'username' => $validatedData['username'],
            'password' => $validatedData['password'],
        ];

        // Cek autentikasi
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
    
            // Mendapatkan peran (role) pengguna yang berhasil login
            $user = Auth::user();
            $idRole = $user->id_role;
    
            if ($idRole === 1) {
                return redirect('/dashboard-user');
            } elseif ($idRole === 2) {
                return redirect('/dashboard-permintaan');
            } elseif ($idRole === 3) {
                return redirect('/dashboard-konfirmasi');
            } elseif ($idRole === 4) {
                return redirect('/worksheet');
            }
        }
    
        return back()->with('loginError', 'Login failed');
    }
    


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
