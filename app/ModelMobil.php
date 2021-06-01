<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelMobil extends Model
{
    protected $table="mobil";
    protected $primarykey="id_mobil";
    public $timestamps=false;

    protected $fillable = [
        'id_mobil',
        'plat_nomor',
        'merk',
        'warna',
        'gambar',
        'tahun_pembuatan',
        'harga_sewa_perhari'

    ];
}

