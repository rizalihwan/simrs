<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pengguna;
use \App\User;
class PenggunaController extends Controller
{
    public function index()
    {
        $query = Pengguna::all();
        return view('master.pengguna.p_create', ['data' => $query]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => ['required', 'string'],
            'jk' => ['required'],
            'agama' => ['required'],
            'no_telp' => ['required', 'max:13'],
            'alamat' => ['required']
        ]);
        // insert ke table users
        $user = new User;
        $user->role = $request->role;
        $user->name = $request->nama;
        $user->email = $request->username;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table pengguna
        $request->request->add(['user_id' => $user->id]);
        Pengguna::create($request->all());
        return redirect()->route('pengguna.index')->with('succes', 'Data Berhasil Disimpan');
    }

    public function delete($id)
    {
        $data = Pengguna::findOrFail($id);
        $data->delete();
        return redirect()->route('pengguna.index')->with('succes', 'Data Berhasil Dihapus');
    }
}
