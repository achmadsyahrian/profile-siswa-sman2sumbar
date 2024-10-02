<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'nik' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && $user->password === $request->nik) {
            Auth::login($user);
            return redirect()->route('home');
        }

        return back()->with('error', 'Akun tidak ditemukan, coba periksa kembali!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Anda berhasil logout. Terima kasih telah berkunjung.');
    }
    
}
