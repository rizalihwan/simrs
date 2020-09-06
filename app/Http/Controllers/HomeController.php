<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna, App\Dokter, App\Pasien;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Pengguna::count();
        $data2 = Pasien::count();
        $data3 = Dokter::count();
        return view('master.home', compact('data', 'data2', 'data3'));
    }
}
