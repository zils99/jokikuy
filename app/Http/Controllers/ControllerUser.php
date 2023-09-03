<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function Login()
    {
        return view('login');
    }

    public function Register()
    {
        return view('register');
    }

    public function TambahUser(Request $request)
    {
        $validateData = $request->validate([
            'c_NamaUser' => 'required|unique:user',
            'Password' => 'required',
            'jeniskelamin' => 'required',
            'c_EmailUser' => 'required|unique:user',
            'rolependaftar' => 'required'
        ]);

        $validateData['Password'] = bcrypt($validateData['Password']);

        dd($validateData);
    }
}
