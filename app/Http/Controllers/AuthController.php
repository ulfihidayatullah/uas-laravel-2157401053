<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){

        return view('auth.register');

    }

    public function registerStore(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ],
         [
            'name.required'=> 'Nama tidak boleh kosong',
            'email.required'=> 'Email tidak boleh kosong',
            'password.required'=> 'Password tidak boleh kosong',
        ]
    );

        $data['password']=bcrypt($data['password']);

        User::create($data);

        return redirect()->route('login')->with('success', 'Berhasil Mendaftar');
    }

    public function login(){

        return view('auth.login');

    }

     public function loginStore(Request $request){

        $data = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required'=> 'Email tidak boleh kosong',
            'password.required'=> 'password tidak boleh kosong',
        ]
    
    );

        if(Auth::attempt($data)){
            $request->session()->regenerate();

           return redirect()->route('dashboard');
        }
        return back()->with('error', 'email atau password salah!');
        
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
