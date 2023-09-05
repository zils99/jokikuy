<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Game;

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

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('c_EmailUser', '=', $request->email)->first();
        if ($user && Hash::check($request->password, $user->c_PasswordUser)) {
            $request->session()->put('c_IdUser', $user->c_IdUser);
            return redirect('/homepengguna');
        } else {
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
            'c_NamaUser' => $request->input('c_NamaUser'),
            'c_EmailUser' => $request->input('c_EmailUser'),
            'c_JenisKelaminUser' => $request->input('jeniskelamin'),
            'c_PasswordUser' => $password,
            'c_RoleUser' => $request->input('rolependaftar'),
            'c_GambarUser' => "http://bootdey.com/img/Content/avatar/avatar1.png"
        ]);

        return redirect('/login');
    }

    public function homepengguna()
    {
        $datagame['game'] = Game::all();
        $datagame['user'] = User::where('c_IdUser', '=', session()->get('c_IdUser'))->first();
        return view('pengguna/homepengguna')->with('datagame', $datagame);
    }

    public function logout()
    {
        if (Session::has('c_IdUser')) {
            Session::pull('c_IdUser');
            return redirect('/');
        }
    }

    public function profilepengguna()
    {
        $user = User::where('c_IdUser', '=', session()->get('c_IdUser'))->first();
        return view('pengguna/profilepengguna', $user);
    }

    public function editprofile(Request $request)
    {
        if ($request->passwordlama) {
            $data = User::where('c_IdUser', '=', session()->get('c_IdUser'))->first();
            if (password_verify($request->passwordlama, $data->c_PasswordUser)) {
                $data = User::where('c_IdUser', '=', session()->get('c_IdUser'))->update([
                    'c_PasswordUser' => $password = bcrypt($request->input('passwordbaru'))
                ]);
                return redirect('/profilepengguna')->with('update', 'Password Berhasil di Update');
            } else {
                return redirect('/profilepengguna')->with('gagal', 'Password lama tidak sama');
            }
        } else {
            $data = User::where('c_IdUser', '=', session()->get('c_IdUser'))->update([
                'c_NamaUser' => $request->input('nama'),
                'c_EmailUser' => $request->input('email'),
                'c_JenisKelaminUser' => $request->input('jeniskelamin')
            ]);
            return redirect('/profilepengguna')->with('update', 'Data User Berhasil di Update');
        }
    }

    public function carigame(Request $request)
    {
        $datagame['game'] = Game::where('c_NamaGame', 'like', '%' . $request->input('carigame') . '%')->get();
        $datagame['search'] = $request->input('carigame');
        return view('pengguna/carigame')->with('datagame', $datagame);
    }

    public function detailgame($id)
    {
        $datagame = Game::where('c_IdGame', '=', $id)->first();
        return view('pengguna/detailgame')->with('datagame', $datagame);
    }
}
