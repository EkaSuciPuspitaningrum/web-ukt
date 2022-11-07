<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisController extends Controller
{

    public function show()
    {
        return view('auth.regis-mahasiswa');
    }

    // public function store(Request $request)
    // {
    //     $akunregis = new RegisModel;
    //     $akunregis->nim = $request-> input('nim');
    //     $akunregis->nama = $request-> input('nama');
    //     $akunregis->email = $request-> input('email');
    //     // $akunregis->password = $request-> input('password');
    //     $akunregis->password = Hash::make($request->password);
    //     // if($request-> hasFile('foto')){
    //     //     $file = $request->file('foto');
    //     //     $extention = $file->getClientOriginalExtension();
    //     //     $filename = time().'.'.$extention;
    //     //     $file->move('uploads/foto',$filename);
    //     //     $akunregis->foto = $filename;
    //     // }
    //     $akunregis->save();
    //     return redirect()->back()->with('status', 'Berhasil Registrasi');
    // }


    public function register(RegisterRequest $request) 
    {
        $user = User::create($request->validated());

        $user->nim = $request-> input('nim');
        $user->username = $request-> input('username');
        $user->email = $request-> input('email');
        $user->password = $request-> input('password');
        $user->password = Hash::make($request->password);
        if($request->hasFile('foto')){
            $request->file('foto')->move('akun/foto'.$request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }

        auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}
