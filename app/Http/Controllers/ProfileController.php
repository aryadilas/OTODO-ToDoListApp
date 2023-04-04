<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function update(Request $request)
    {

        $pesan = [
            'required' => 'Kolom :attribute harus diisi'
        ];
        $credentials = $request->validate([
            'nama' => 'required',
            'email' => 'required',
        ], $pesan);

        $data = [
            'nama' => $request->nama,
            'email' => $request->email,
        ];

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        User::where('id', Auth::user()->id)->update($data);
        
        return redirect('/profile')->with('success', 'Profile Berhasil Di Update');
    }

    public function register()
    {
        return view('register');
    }

    public function addUser(Request $request)
    {
        $pesan = [
            'required' => 'Kolom :attribute harus diisi'
        ];
        $credentials = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
        ], $pesan);

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'avatar' => null,
        ]);

        return redirect('/login')->with('success', 'Akun berhasil dibuat, silahkan login');
    }
}
