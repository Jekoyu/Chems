<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest', ['except' => 'logout']);
    }
    public function showLogin()
    {
        return view('default', [
            'title' => 'Login',
            'content' => view('page.login')
        ]);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->is_admin) {
                return redirect()->intended(route('adminHome'));
            } else {
                return redirect()->intended('/');
            }
        }
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showRegister()
    {
        return view('default', [
            'title' => 'Register',
            'content' => view('page.register')
        ]);
    }
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'hp' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'password' => [
                'required', Password::min(3)
                //disini bisa di pasang validasi password seperti jumlah karakter mix, dll
            ],
        ]);
        // echo $request-;
        $user = User::create([
            'nama' => $request->name,
            'email' => $request->email,
            'hp' => $request->hp,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        if ($user->is_admin) {
            return redirect()->route('adminHome');
        } else {
            return redirect()->intended('/login');
        }
    }
    public function forgotPassword()
    {
        return view('default', [
            'title' => 'Forgot Password',
            'content' => view('page.forgot-password')
        ]);
    }
}
