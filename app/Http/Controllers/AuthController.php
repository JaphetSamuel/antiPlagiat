<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $loginError = false;
        if($request->isMethod('POST')){
            if(Auth::attempt($request->only('email','password'))){
                return redirect('dashboard');
            }else{
                $loginError = true;
            }
        }
        return view('auth.login', compact('loginError'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    public function register(Request $request)
    {
        if($request->isMethod('POST')){
            $request->validate([
                'role'=>'required',
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required'
            ]);

            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> Hash::make($request->password)
            ]);
            if($request->role == 'entreprise' || $request->role == 'particular'){
                $user->assignRole($request->role);
            }
            return redirect('dashboard');
        }
        return view('auth.register');
    }
}
