<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $fillable = ['nama', 'user_id', 'jk', 'agama', 'no_telp', 'alamat'];
}
