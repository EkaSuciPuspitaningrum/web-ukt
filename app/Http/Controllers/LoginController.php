<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller 
{
    public function show()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }else{
            return view('auth.login');
        }
    }

    public function perform(Request $request)
    {

        // if(Auth::attempt($request->only('email', 'password'))){
        //     return redirect('dashboard');
        // }else{
        //         session()->flash('error', 'Email atau Password Salah');
        //         return \redirect('/');
        // }

        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            $email = $request->input('email');
            $user = User::where('email', $email)->first();
            session()->put('username',$user->username);
            return redirect('dashboard');    
        }else{
            session()->flash('error', 'Email atau Password Salah');
            return redirect()->back();
        }

        // Session::flash('email', $request->email);

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ], [
        //     'email.required' => 'Email wajib diisi',
        //     'password.required' => 'Password wajib diisi',
        // ]);

        // $user = User::where('email', '=',$request->email)->first();
        // if($user){
        //     if(Hash::check($request->password,$user->password)){
        //         $request->session()->put('username'.$user->username);
        //         return redirect('/dashboard');
        //     }else{
        //         session()->flash('error', 'Password tidak sesuai');
        //         return redirect()->back();
        //     }
        // }else{
        //     session()->flash('error', 'Email atau Password Salah');
        //     return redirect()->back();
        // }
    // }

        // $infologin = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ];

        // if(Auth::attempt($infologin)){
        //     return redirect('/dashboard');
        // }else{
        //     session()->flash('error', 'Email atau Password Salah');
        //     return redirect()->back();
        

        }

    public function out()
    {
        Auth::logout();
        session()->flush();
        return redirect('/');
    }

}

