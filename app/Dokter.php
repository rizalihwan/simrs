<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $primaryKey = 'id_dokter';
    protected $fillable = ['nama_dokter', 'umur', 'jk', 'alamat', 'no_telp'];
}
