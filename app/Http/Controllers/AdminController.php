<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
class AdminController extends Controller
{
    public function index()
    {
        $query = User::where('role', 'admin')->get();
        return view('master.admin.a_create', ['data' => $query]);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string'],
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8']
        ]);
        $data = new User;
        $data->name = $request->name;
        $data->role = $request->role;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('admin.index')->with('succes', 'Data Berhasil Disimpan');
    }

    public function delete($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        return redirect()->route('admin.index')->with('succes', 'Data berhasil dihapus');
    }
}
