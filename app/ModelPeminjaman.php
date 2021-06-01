<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelPeminjaman extends Model
{
    protected $table="peminjaman";
    protected $primarykey="id_pinjam";
    public $timestamps=false;

    protected $fillable = [
        'id_pinjam',
        'nama',
        'nohp',
        'tgl_pinjam',
        'tgl_kembali',
        'id_mobil'

    ];
}
