<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Konsumen extends Model
{
    protected $table = 'konsumen';
    protected $fillable = ['nama_konsumen', 'jenis_kendaraan', 'no_polisi','tgl_lahir','kelamin','no_hp'];
}
