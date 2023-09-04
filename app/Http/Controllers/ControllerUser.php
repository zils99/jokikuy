<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class ControllerUser extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function Register()
    {
        return view('register');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('c_EmailUser', '=', $request->email)->first();
        if($user && Hash::check($request->password, $user->c_PasswordUser)){
            $request->session()->put('c_IdUser', $user->c_IdUser);
            return redirect('/homepengguna');
        } else{
            return redirect('/login');
        }
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

        $password = bcrypt($validateData['Password']);

        $query = DB::table('user')->insert([
            'c_NamaUser'=>$request->input('c_NamaUser'),
            'c_EmailUser'=>$request->input('c_EmailUser'),
            'c_JenisKelaminUser'=>$request->input('jeniskelamin'),
            'c_PasswordUser'=>$password,
            'c_RoleUser'=>$request->input('rolependaftar'),
            'c_GambarUser'=>"http://bootdey.com/img/Content/avatar/avatar1.png"
        ]);

        return redirect('/login');
    }

    public function homepengguna(){
        return view('pengguna/homepengguna');
    }

    public function logout(){
        if(Session::has('c_IdUser')){
            Session::pull('c_IdUser');
            return redirect('/');
        }
    }
}
