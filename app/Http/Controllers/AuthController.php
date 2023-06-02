<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
// use App\Models\Admin;
use Illuminate\Contracts\Session\Session as SessionSession;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|string|',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('You have successfully Login');
        }

        return redirect()
            ->route('login')
            ->withSuccess('Oppss, you have entered invalid credentials');
    }


    public function registration()
    {
        return view('auth.registration');
    }

    public function PostRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:64',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('login')->withSuccess ('Great! You Have Successfully Registered. You can loggin now');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function dashboard()
    {
        if(Auth::check()) {            
            return view('dashboard');
        }

        return redirect('login')->withErrors('Opppss you do not have access!');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
