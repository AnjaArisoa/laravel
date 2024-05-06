<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class LoginController extends Controller
{
    public function login(){
        return view('template.login');
    }
    public function register(){
        return view('template.register');
    }
    public function insert_user(Request $request){
        User::create([
            'name'=>$request->nom,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect(route('general.login'));
    }
    public function authLogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentification réussie
            return redirect()->intended(route('general.dashboard'));
        } else {
            // Authentification échouée
            return back()->withErrors(['email' => 'Email ou mot de passe incorrect.'])->withInput($request->only('email'));
        }
    }
}
