<?php

namespace App\Http\Controllers;

use App\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dokter::latest()->paginate(5);
        return view('master.dokter.d_create', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_dokter' => 'required',
            'umur' => 'required|max:5|min:2',
            'jk' => 'required|max:10',
            'alamat' => 'required',
            'no_telp' => 'required|max:15'
        ]);
        Dokter::create($request->all());
        return redirect()->route('dokter.index')->with('succes', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function show(Dokter $dokter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Dokter::findOrFail($id);
        return view('master.dokter.d_update', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request, [
            'nama_dokter' => 'required',
            'umur' => 'required|max:5|min:2',
            'jk' => 'required|max:10',
            'alamat' => 'required',
            'no_telp' => 'required|max:15'
        ]);
        $data = Dokter::findOrFail($id);
        $data->nama_dokter = $request->nama_dokter;
        $data->umur = $request->umur;
        $data->jk = $request->jk;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->save();
        return redirect()->route('dokter.index')->with('succes', 'Data Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dokter  $dokter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Dokter::find($id);
        $data->delete();
        return redirect()->route('dokter.index')->with('succes', 'Data Berhasil Dihapus');
    }
}
