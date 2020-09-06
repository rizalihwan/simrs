<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $primaryKey = 'id_pasien';
    protected $fillable = [
        'no_rawat', 'nama_pasien', 'umur', 'jk', 'poli', 'nama_pj', 'alamat_pj', 'no_telp_pj', 'dokter_pj', 'jenis_bayar', 'cara_masuk'
    ];
}
